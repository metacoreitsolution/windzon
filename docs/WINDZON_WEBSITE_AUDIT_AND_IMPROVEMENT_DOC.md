# Windzon Website – Audit, Improvement & Competitor Analysis

**Document Version:** 1.0  
**Date:** March 7, 2025  
**Purpose:** Code review, required changes, premium design ideas, section naming, and competitor-inspired improvements for Windzon (Aluminium Windows & Doors company website)

---

## Table of Contents

1. [Executive Summary](#1-executive-summary)
2. [Current Website Overview](#2-current-website-overview)
3. [Critical Code Issues & Required Fixes](#3-critical-code-issues--required-fixes)
4. [Section Names – Review & Recommendations](#4-section-names--review--recommendations)
5. [Premium & Attractive Design Ideas (Simple & Sober)](#5-premium--attractive-design-ideas-simple--sober)
6. [Competitor Analysis & Implementable Ideas](#6-competitor-analysis--implementable-ideas)
7. [Action Checklist](#7-action-checklist)

---

## 1. Executive Summary

Windzon is a static HTML template for an **aluminium windows and doors** company. The site has a solid structure but contains **broken links**, **placeholder content**, **missing backend**, and **generic design elements** that reduce trust and professionalism. This document outlines required code changes, section naming improvements, and ideas to make the site premium, simple, and attractive for clients.

---

## 2. Current Website Overview

### Business Type
- **Industry:** Aluminium windows, doors, and blinds
- **Services:** Installation, repair, maintenance, accessories, project planning
- **Target:** Residential and commercial clients

### Tech Stack
| Layer | Technology |
|-------|------------|
| Frontend | HTML5, CSS3, Bootstrap 5 |
| JS | jQuery 3.7.1 |
| Plugins | Owl Carousel, Isotope, Magnific Popup, WOW.js |

### Pages Structure
| Page | Purpose |
|------|---------|
| index.html | Homepage |
| about.html | Company info |
| window.html | Window products |
| door.html | Door products |
| blinds.html | Blinds products |
| our-project.html | Portfolio |
| service.html | Services list |
| contact.html | Contact form + map |
| blog.html, testimonial.html, pricing.html, faq.html, cost-calculator.html | Supporting pages |

---

## 3. Critical Code Issues & Required Fixes

### 3.1 Broken Links (High Priority)

| Current Link | Issue | Fix |
|--------------|-------|-----|
| `products.html` | File does not exist | Replace with `window.html` or `door.html` depending on context. For generic "Explore Windows" → `window.html`, "Explore Doors" → `door.html` |
| `projects.html` | File does not exist | Replace with `our-project.html` |

**Affected locations in index.html:**
- Hero Slide 1: "Explore Windows" → `window.html`
- Hero Slide 2: "Explore Doors" → `door.html`
- Hero Slide 3: "View Projects" → `our-project.html`
- Service cards: "Read More" for windows/doors → `window.html` or `door.html` or `service.html`
- Window types (Casement, Sliding, etc.) → `window.html`
- Door types (Sliding, Hinged, etc.) → `door.html`

### 3.2 Contact Form Backend Missing

| Issue | Details |
|-------|---------|
| Form action | `action="/Windzon/assets/php/contact.php"` – path is wrong and `contact.php` does not exist |
| Newsletter form | No action or backend |
| Quote form (homepage) | No action or backend |
| Search form | No action – search does nothing |

**Required fixes:**
1. Create `assets/php/contact.php` or integrate a form service (e.g. Formspree, Netlify Forms, EmailJS).
2. Update contact form action to a valid endpoint.
3. Add backend or third-party service for newsletter and quote forms.
4. Implement search (e.g. client-side JS search or integrate a search API) or remove if not needed.

### 3.3 Meta Tags Empty

All pages have:
```html
<meta name="description" content="">
<meta name="keywords" content="">
```

**Required:** Add unique, SEO-friendly descriptions and keywords per page.

**Example for index.html:**
```html
<meta name="description" content="Windzon – Premium aluminium windows and doors. 25+ years of experience. Residential and commercial installation, repair, and maintenance.">
<meta name="keywords" content="aluminium windows, aluminium doors, window installation, door systems, blinds, Windzon">
```

### 3.4 Placeholder / Lorem Ipsum Content

| Location | Issue |
|----------|-------|
| CTA section (index.html ~line 660) | "Lorem ipsum dolor sit amet..." – generic placeholder |
| Testimonials | Same Lorem-style text for all 5 testimonials |
| Blog posts | Generic "There are many variations of passage available" |
| Footer about | "We are many variations of passages available..." |
| Contact form intro | Generic "It is a long established fact..." |

**Required:** Replace with real company copy, real testimonials, and relevant blog content.

### 3.5 Inconsistent Contact Information

| Location | Phone | Address |
|----------|-------|---------|
| Header | +91 9712002300 | Kalawad Road, Rajkot |
| Contact page | +2 123 4565 789 | 25/B Milford, New York, USA |
| CTA section | +91 9712002300 | – |

**Required:** Use one consistent phone number and address across all pages.

### 3.6 Home Navigation Dropdown

- "Home" has `data-bs-toggle="dropdown"` but no dropdown menu.
- **Fix:** Either add a dropdown with sub-pages (e.g. index, index-2, index-3) or change to a simple link: `href="index.html"`.

### 3.7 External Scripts

- Cloudflare beacon script (`beacon.min.js`) – verify if needed for your setup.
- Email decode script – ensure it works with your hosting/email setup.

### 3.8 Quote Form (Homepage)

- Form has `action="#"` – no submission logic.
- **Fix:** Point to same backend as contact form or a dedicated quote endpoint.

---

## 4. Section Names – Review & Recommendations

### Homepage Sections

| Current Name | Assessment | Recommendation |
|--------------|-------------|----------------|
| Hero Slider | ✓ OK | Keep or rename to "Welcome" if preferred |
| About Our Company | ✓ OK | Keep |
| Why Choose Us (Features) | ⚠ Duplicate | Rename to "Features & Benefits" or "Why Windzon" |
| Our Services | ✓ OK | Keep |
| Counter area | ⚠ Generic | Add `id` or `aria-label`: "Our Achievements" or "By The Numbers" |
| Aluminium Window Systems | ✓ OK | Keep |
| Aluminium Door Systems | ✓ OK | Keep |
| Get Free Quote | ✓ OK | Keep |
| CTA area | ⚠ No clear label | Add section title: "Ready to Transform Your Space?" |
| What Our Client Say's About Us | ⚠ Typo | Fix: "What Our Clients Say About Us" |
| Why Choose Us (Choose area) | ⚠ Duplicate | Rename to "Your Trusted Partner" or "Our Commitment" |
| Our Blog | ✓ OK | Keep |
| Partner area | ⚠ Unclear | Rename to "Our Partners" or "Trusted By" |

### Section Naming Summary

| Priority | Change |
|----------|--------|
| High | Fix typo: "Say's" → "Say" |
| Medium | Avoid duplicate "Why Choose Us" – use distinct names |
| Low | Add semantic IDs for accessibility and analytics |

---

## 5. Premium & Attractive Design Ideas (Simple & Sober)

### 5.1 Color & Typography

| Current | Premium Suggestion |
|---------|--------------------|
| Generic template colors | Use a restrained palette: deep navy/charcoal + white + one accent (e.g. warm gold or soft grey) |
| Standard fonts | Use clean, professional fonts (e.g. Inter, Source Sans, or a serif for headings) |
| Busy backgrounds | Prefer solid colors or subtle gradients; avoid noisy patterns |

### 5.2 Layout & Spacing

- **More whitespace** – increase padding between sections.
- **Clear hierarchy** – one main message per section.
- **Fewer elements** – remove clutter; focus on key CTAs.

### 5.3 Hero Section

- Reduce slider to 1–2 slides or use a single strong hero.
- Short, benefit-focused headline.
- Single primary CTA (e.g. "Get a Free Quote" or "Book Consultation").

### 5.4 Trust Elements

- Add certifications (e.g. ISO, industry standards).
- Show real project photos with location/project type.
- Add "Years in Business" and "Projects Completed" with real numbers.
- Use real client logos if available.

### 5.5 Forms

- Fewer fields where possible.
- Clear labels and helpful placeholder text.
- Visible privacy/consent note.
- Success/error messages that match your brand tone.

### 5.6 Footer

- Short, professional company description.
- Clear contact details.
- Links to key pages only.
- Optional: minimal partner logos with proper alt text.

---

## 6. Competitor Analysis & Implementable Ideas

### 6.1 Competitors Reviewed

| Company | Focus | Notable Features |
|---------|-------|------------------|
| **Allumondo** | Premium aluminium windows, doors, pergolas | Minimal design, full project management, sustainability, clear value props |
| **Schüco UK** | Aluminium windows | Product specs (U-values, dimensions), FAQs, case studies, showroom finder |
| **ViewLux** | Precision aluminium systems | Custom shapes, thermal break tech, quality process (26 steps) |
| **Imperial Aluminium** | Residential premium | Product series (Apollo, Titan), technical specs |
| **Premium Windows** | Aluminium series | Thermal performance, slim sightlines, argon insulation |

### 6.2 Ideas to Implement from Competitors

#### From Allumondo
- **Full project journey** – Show steps: Design → Quote → Production → Installation.
- **Sustainability** – Add a short section on recyclable aluminium and eco-friendly practices.
- **Minimal hero** – One strong headline, one CTA, less text.

#### From Schüco
- **Product specifications** – Add U-values, dimensions, security ratings for key window/door types.
- **FAQ section** – Expand FAQ with real questions (energy efficiency, colors, cleaning, warranties).
- **Case studies** – Replace generic project images with real projects and short descriptions.
- **Design advice / blog** – Add practical articles (e.g. "Choosing windows for your home").

#### From ViewLux
- **Quality process** – Add a "Our Process" or "Quality Assurance" section (e.g. steps, inspections).
- **Technical differentiators** – Mention thermal break, custom configurations.

#### From Imperial Aluminium
- **Product series** – Group windows/doors into named series (e.g. "Classic", "Premium", "Commercial").
- **Technical specs** – Frame depths, glazing options, max dimensions.

#### General Industry Best Practices
- **Showroom / visit** – "Book a Site Visit" or "Visit Our Showroom" CTA.
- **Partner / installer network** – If applicable, "Find a Partner" or "Our Installers".
- **Warranty** – Clear warranty information.
- **Color/finish options** – Show color samples or configurator.
- **Before/after** – For renovation projects.

---

## 7. Action Checklist

### Immediate (Critical)

- [x] Fix all `products.html` links → `window.html` or `door.html` ✓
- [x] Fix `projects.html` → `our-project.html` ✓
- [x] Create or configure contact form backend (assets/php/contact.php) ✓
- [x] Update contact form action URL ✓
- [x] Fix "Say's" → "Say" in testimonials heading ✓
- [x] Align contact info (phone, address) across all pages ✓

### Short Term (Important)

- [x] Add meta description and keywords to all pages ✓
- [x] Replace Lorem ipsum and placeholder content ✓
- [x] Fix Home nav (link or proper dropdown) ✓
- [x] Add quote form (redirects to contact.html) ✓
- [ ] Add newsletter form backend
- [ ] Replace duplicate partner logos with real partners (or remove)

### Medium Term (Enhancement)

- [ ] Add product specifications (U-values, dimensions)
- [ ] Expand FAQ with real questions
- [ ] Add "Our Process" or "Quality Assurance" section
- [ ] Add sustainability / eco-friendly section
- [ ] Refine color palette and typography for premium look
- [ ] Add case studies with real project details

### Long Term (Premium)

- [ ] Implement search (or remove if not needed)
- [ ] Add product series/categories
- [ ] Add color/finish configurator
- [ ] Add "Book Site Visit" or showroom CTA
- [ ] Add certifications and trust badges
- [ ] Collect and display real testimonials

---

## Appendix: File Reference

### Files to Update for Broken Links
- `index.html` (primary)

### Files Needing Meta Tags
- All HTML files in root

### Files Needing Content Updates
- `index.html` (CTA, testimonials, blog)
- `about.html`
- `contact.html`
- `footer` (all pages)

### Backend / Form Files to Create
- `assets/php/contact.php` (or equivalent)
- Quote form handler
- Newsletter handler

---

*End of Document*
