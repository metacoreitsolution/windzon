# Software Requirements Specification (SRS)

## Windzon — Blog Admin Panel (Create / Edit / Publish)

| Document | Version |
|----------|---------|
| 1.0 | 2026-04-09 |

**Scope:** Documentation only. This SRS is based on analysis of the existing static templates in this repository. It defines what an **admin panel** must support so that **new blogs created in the admin appear on the public website** once the site is connected to a backend.

**Reference templates:** [blog.html](../blog.html) (listing), [blog-single.html](../blog-single.html) (detail), [index.html](../index.html) (homepage “Latest News & Blog” strip).

---

## 1. Website blog analysis (source of required fields)

### 1.1 Blog listing page (`blog.html`)

Each post is rendered as a **card** (`.blog-item`). The template exposes:

| UI element | Data needed for dynamic site |
|------------|------------------------------|
| Card image | `featured_image_url` (or path under `assets/img/blog/`) |
| “By …” line | Author **display name** (from `authors` or inline field) |
| Date line | **Published date** (`published_at`), formatted for display |
| Heading + link | **Title** + **permalink** (typically `/blog/{slug}` or `blog-single.html?id=` during migration) |
| Paragraph under title | **Excerpt** (short summary for cards) |
| “Read More” | Same permalink as title |

The page includes **pagination** (`.pagination`) and a header **search** form (`GET` to `blog.html` with query `s`). Search requires either server-side query or client-side index when dynamic.

### 1.2 Homepage blog strip (`index.html`)

Uses the **same card structure** as the listing: featured image, author, date, title, excerpt, link to the single post. Admin-created posts **SHOULD** be able to power this section (e.g. latest 3 by `published_at`).

### 1.3 Single post page (`blog-single.html`)

| Section | Data needed |
|---------|-------------|
| Breadcrumb | Optional: post title for “Blog Single” replacement |
| Hero image | **Featured image** (same asset as card or dedicated hero URL) |
| Meta row | Author name; template shows comment/like counts as static text — **optional** for v1 (can hide or wire later) |
| Article title | **Title** |
| Body | **Full content** (HTML: paragraphs, blockquote + attribution, multiple images) |
| Tags block | List of **tag** labels |
| Author box | Author **photo**, **name**, **short bio**, **social URLs** (Facebook, Instagram in template) |
| Comments + form | Template only (`action="#"`). **Out of scope for v1** unless you add moderation and storage |

**Sidebar (derived data, not all stored per post):**

| Widget | Source |
|--------|--------|
| Category list with counts | **Category** per post + aggregate `COUNT` |
| Recent posts | Latest posts by date (excluding current or including) |
| Popular tags | Tags with usage counts or manual ordering |

### 1.4 Minimum vs recommended admin fields

**Minimum to match current visuals (MVP):**

| Field | Required | Notes |
|-------|----------|--------|
| Title | Yes | Shown on listing, single, SEO |
| Slug | Yes | Unique URL segment for each post |
| Excerpt | Yes | Listing + homepage cards |
| Body (HTML) | Yes | Full article on single page |
| Featured image | Yes | Card + single hero |
| Author (name at least) | Yes | Byline + author box |
| Published date/time | Yes | Ordering and display |
| Status (draft/published) | Yes | Only **published** posts appear on site |

**Recommended (aligns with template and SEO):**

| Field | Notes |
|-------|--------|
| Author bio + avatar + social links | Powers `.blog-author` block |
| Tags (many) | Footer tags + “Popular tags” |
| One category | Sidebar categories and filtering |
| `meta_title`, `meta_description` | Replace empty `<meta name="description">` in templates |
| Scheduled publish | `published_at` in the future |

**Optional / later:** comment counts, likes, public comments workflow.

---

## 2. Purpose and stakeholders

| Stakeholder | Interest |
|-------------|----------|
| Business owner | Publish Windzon-related articles without editing HTML. |
| Content editor | Create drafts, upload images, publish. |
| Developers | Implement admin + API + DB consistent with this SRS. |
| QA | Verify listing, single page, and homepage show correct data. |

---

## 3. Overall description

### 3.1 Product perspective

Today the site is **static HTML**. The target system adds:

1. A **secured admin panel** to create and manage posts and media.
2. A **database** (see [BLOG_DATABASE_DOCUMENTATION.md](BLOG_DATABASE_DOCUMENTATION.md)) storing posts and related entities.
3. A **public integration** (SSR, API + SPA, or build step) that reads published posts and renders `blog.html`-style listing and `blog-single.html`-style detail. *Integration mechanics are outside this SRS except for data contract.*

### 3.2 User roles

| Role | Capabilities |
|------|----------------|
| Admin | Full CRUD on posts, categories, tags, authors; user management if local auth is used. |
| Editor | Create/edit/publish posts; upload images; may be restricted from deleting others’ posts or managing users (configurable). |

### 3.3 Constraints

- Admin **SHALL** be served over **HTTPS** in production.
- Uploaded images **SHALL** be validated (type/size); HTML body **SHALL** be sanitized for XSS.

---

## 4. Functional requirements

| ID | Requirement |
|----|-------------|
| FR-01 | Authenticated users only for admin; login and logout. |
| FR-02 | Create post with: title, slug, excerpt, body HTML, featured image, author, category (optional), tags (optional), `published_at`, status draft/published, optional SEO fields. |
| FR-03 | Edit and delete (or soft-delete) existing posts. |
| FR-04 | List posts with filters: status, category, text search (title/excerpt), date range; pagination. |
| FR-05 | Slug **unique** among active posts; auto-suggest from title with manual edit. |
| FR-06 | Only **published** posts with `published_at` ≤ now appear on the **public** listing and single routes. |
| FR-07 | Upload featured image; allowed types at least JPEG, PNG, WebP; max size configurable (e.g. 5 MB). |
| FR-08 | Rich text editor producing HTML compatible with existing CSS (paragraphs, headings, blockquote, images). |
| FR-09 | Manage **authors** (name, bio, avatar, social URLs) and assign author to each post. |
| FR-10 | Manage **categories** and **tags**; assign one category and many tags per post (v1). |
| FR-11 | Optional: media library listing uploaded files. |

**Out of scope v1:** Public comment submission and moderation (template exists but no backend).

---

## 5. Admin UI (screens)

| Screen | Purpose |
|--------|---------|
| Login | Authenticate. |
| Post list | Table/cards with filters, pagination, “New post”. |
| Post editor | All fields in §1.4 + preview; Save draft / Publish. |
| Authors | CRUD author profiles. |
| Categories / Tags | CRUD taxonomy. |
| Media (optional) | Browse uploads. |

---

## 6. Public data contract (for website integration)

When the website is wired to the backend, it **SHALL** be able to retrieve:

- **List:** array of posts with `title`, `slug`, `excerpt`, `featured_image_url`, `author_name`, `published_at`, optional `category`, `tags`.
- **Detail:** single post by `slug` with full HTML body, tags, author bio fields, SEO meta.

Exact JSON shape and routes are implementation-specific; fields **SHALL** map to §1.

---

## 7. Non-functional requirements

| ID | Category | Requirement |
|----|----------|-------------|
| NFR-01 | Security | Role-based access; secure session or tokens; password hashing if local accounts. |
| NFR-02 | Performance | Paginated admin and public lists; cache public reads if needed. |
| NFR-03 | Usability | Preview before publish; clear validation errors (duplicate slug, missing title). |

---

## 8. Traceability

| Template area | SRS / FR |
|---------------|----------|
| `blog.html` card | FR-02, FR-06, §1.1 |
| `index.html` strip | FR-06, §1.2 |
| `blog-single.html` article + author + tags | FR-02, FR-07, FR-08, FR-09, FR-10 |
| Sidebar categories/tags/recent | FR-10, derived queries |

---

## 9. Out of scope

- Implementing backend code, database migrations, or changing static HTML in this repo (unless a separate task).
- Visitor comments and like counts as live data (unless added later).

---

*End of SRS*
