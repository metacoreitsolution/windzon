<?php
/**
 * Blog Repository - Business Logic Layer
 * Handles filtering, pagination, formatting, and sanitization
 */

require_once __DIR__ . '/blog_db.php';

// Configuration
define('MC_BLOG_PER_PAGE', 6);

/**
 * Get all published posts
 * @return array
 */
function mc_all_posts() {
    return mc_blog_fetch_published_posts();
}

/**
 * Filter posts by category slug
 * @param array $posts
 * @param string $categorySlug
 * @return array
 */
function mc_filter_posts_by_cat($posts, $categorySlug) {
    if (empty($categorySlug) || $categorySlug === 'all') {
        return $posts;
    }

    $pdo = mc_blog_pdo();
    if (!$pdo) return [];

    try {
        // Get category ID
        $stmt = $pdo->prepare("SELECT id FROM mc_blog_categories WHERE slug = ?");
        $stmt->execute([$categorySlug]);
        $catId = $stmt->fetchColumn();
        
        if (!$catId) return [];

        // Get post IDs in this category
        $stmt = $pdo->prepare("SELECT post_id FROM mc_blog_post_categories WHERE category_id = ?");
        $stmt->execute([$catId]);
        $postIds = $stmt->fetchAll(PDO::FETCH_COLUMN);

        if (empty($postIds)) return [];

        // Filter posts
        return array_filter($posts, function($post) use ($postIds) {
            return in_array($post['id'], $postIds);
        });
    } catch (PDOException $e) {
        error_log('Blog filter by category error: ' . $e->getMessage());
        return [];
    }
}

/**
 * Paginate posts
 * @param array $posts
 * @param int $page
 * @return array
 */
function mc_blog_paginate_slice($posts, $page) {
    $page = max(1, (int)$page);
    $offset = ($page - 1) * MC_BLOG_PER_PAGE;
    return array_slice($posts, $offset, MC_BLOG_PER_PAGE);
}

/**
 * Calculate total pages
 * @param int $totalCount
 * @return int
 */
function mc_blog_total_pages($totalCount) {
    return max(1, (int)ceil($totalCount / MC_BLOG_PER_PAGE));
}

/**
 * Generate slug from title
 * @param string $title
 * @return string
 */
function mc_blog_slugify($title) {
    $slug = strtolower(trim($title));
    $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    $slug = trim($slug, '-');
    return substr($slug, 0, 190);
}

/**
 * Sanitize HTML body content
 * @param string $html
 * @return string
 */
function mc_blog_sanitize_body($html) {
    $allowedTags = '<p><br><strong><em><u><h2><h3><h4><h5><h6><ul><ol><li><a><img><blockquote><code><pre>';
    return strip_tags($html, $allowedTags);
}

/**
 * Format date for display
 * @param string $isoDate
 * @return string
 */
function mc_blog_format_display_date($isoDate) {
    $timestamp = strtotime($isoDate);
    return date('F j, Y', $timestamp);
}

/**
 * Get accent color classes
 * @param string $accent
 * @return array
 */
function mc_blog_accent_classes($accent) {
    $map = [
        'blue'    => ['badge' => 'bg-primary', 'title' => 'text-primary'],
        'indigo'  => ['badge' => 'bg-info', 'title' => 'text-info'],
        'violet'  => ['badge' => 'bg-purple', 'title' => 'text-purple'],
        'slate'   => ['badge' => 'bg-secondary', 'title' => 'text-secondary'],
        'emerald' => ['badge' => 'bg-success', 'title' => 'text-success'],
        'amber'   => ['badge' => 'bg-warning', 'title' => 'text-warning'],
        'pink'    => ['badge' => 'bg-danger', 'title' => 'text-danger'],
        'teal'    => ['badge' => 'bg-info', 'title' => 'text-info'],
        'sky'     => ['badge' => 'bg-primary', 'title' => 'text-primary'],
        'orange'  => ['badge' => 'bg-warning', 'title' => 'text-warning'],
    ];

    return $map[$accent] ?? $map['blue'];
}

/**
 * Get allowed accent values
 * @return array
 */
function mc_blog_allowed_accents() {
    return ['blue', 'indigo', 'violet', 'slate', 'emerald', 'amber', 'pink', 'teal', 'sky', 'orange'];
}

/**
 * Find post by slug (alias for compatibility)
 * @param string $slug
 * @return array|null
 */
function mc_blog_find_dynamic_by_slug($slug) {
    return mc_blog_find_post_by_slug($slug, true);
}
