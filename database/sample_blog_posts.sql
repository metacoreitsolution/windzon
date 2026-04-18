-- Sample Blog Posts for Windzon
-- Run this AFTER creating the tables with blog_tables.sql

-- Insert sample posts
INSERT INTO `mc_blog_posts` (
    `public_id`, `slug`, `title`, `excerpt`, `body_html`, 
    `image_url`, `image_alt`, `category_label`, `badge`, `accent`,
    `author`, `meta_title`, `meta_description`, `meta_keywords`,
    `status`, `published_at`
) VALUES
(
    MD5(RAND()),
    'choosing-right-aluminium-windows',
    'Choosing the Right Aluminium Windows for Your Home',
    'Discover how to select the perfect aluminium window system based on climate, style, and energy efficiency needs.',
    '<p>Choosing the right windows for your home is a crucial decision that affects both aesthetics and functionality. Aluminium windows have become increasingly popular due to their durability, low maintenance, and modern appearance.</p><h2>Key Factors to Consider</h2><p><strong>Climate Considerations:</strong> Different window systems perform better in different climates. For hot climates, look for windows with thermal breaks and low-E glass coatings.</p><p><strong>Style and Design:</strong> Aluminium windows come in various styles including sliding, casement, awning, and fixed panels. Choose based on your home''s architectural style.</p><h3>Energy Efficiency</h3><p>Modern aluminium windows with double glazing can significantly reduce energy costs. Look for windows with good U-values and SHGC ratings.</p><h3>Maintenance Requirements</h3><p>One of the biggest advantages of aluminium windows is their low maintenance. They don''t rot, warp, or require painting like wooden frames.</p>',
    'assets/img/blog/01.jpg',
    'Modern aluminium windows',
    'Windows',
    'Guide',
    'blue',
    'Windzon',
    'How to Choose the Right Aluminium Windows | Windzon',
    'Complete guide to selecting aluminium windows for your home. Learn about climate considerations, styles, energy efficiency, and maintenance.',
    'aluminium windows, window selection, energy efficient windows, home improvement',
    'published',
    '2025-03-14'
),
(
    MD5(RAND()),
    'sliding-vs-casement-doors',
    'Sliding vs Casement: Which Aluminium Door Suits Your Space?',
    'Compare sliding and casement aluminium doors to find the best fit for your home''s layout and ventilation needs.',
    '<p>When it comes to aluminium doors, two popular options dominate the market: sliding doors and casement doors. Each has its own advantages and ideal use cases.</p><h2>Sliding Doors</h2><p><strong>Advantages:</strong></p><ul><li>Space-saving design - no swing radius required</li><li>Large glass panels for maximum natural light</li><li>Smooth operation on tracks</li><li>Ideal for patios and balconies</li></ul><h2>Casement Doors</h2><p><strong>Advantages:</strong></p><ul><li>Better ventilation when fully opened</li><li>Tighter seal when closed</li><li>More traditional appearance</li><li>Easier to clean</li></ul><h3>Which Should You Choose?</h3><p>Consider your space constraints, ventilation needs, and aesthetic preferences. Sliding doors work best for limited spaces, while casement doors offer superior ventilation.</p>',
    'assets/img/blog/02.jpg',
    'Aluminium sliding door',
    'Doors',
    'Comparison',
    'indigo',
    'Windzon',
    'Sliding vs Casement Doors: Complete Comparison | Windzon',
    'Detailed comparison of sliding and casement aluminium doors. Find out which type is best for your home.',
    'sliding doors, casement doors, aluminium doors, door comparison',
    'published',
    '2025-03-12'
),
(
    MD5(RAND()),
    'energy-efficiency-aluminium-windows',
    'Energy Efficiency: How Aluminium Windows Reduce Your Bills',
    'Learn how modern aluminium windows with thermal breaks and double glazing can lower energy costs year-round.',
    '<p>Energy efficiency is a top priority for homeowners today. Modern aluminium windows can significantly reduce your heating and cooling costs.</p><h2>Thermal Break Technology</h2><p>Thermal breaks are insulating barriers placed between the inner and outer aluminium frames. This prevents heat transfer and dramatically improves energy efficiency.</p><h3>Double and Triple Glazing</h3><p>Multiple glass panes with air or gas-filled spaces between them provide excellent insulation. This keeps your home warmer in winter and cooler in summer.</p><h3>Low-E Coatings</h3><p>Low-emissivity coatings reflect heat back into your home during winter and keep it out during summer, without affecting natural light.</p><h2>Cost Savings</h2><p>While energy-efficient windows cost more upfront, they typically pay for themselves within 5-10 years through reduced energy bills.</p>',
    'assets/img/blog/03.jpg',
    'Energy efficient windows',
    'Windows',
    'Tips',
    'emerald',
    'Windzon',
    'Energy Efficient Aluminium Windows Save Money | Windzon',
    'Discover how modern aluminium windows with thermal breaks and double glazing reduce energy bills.',
    'energy efficient windows, thermal break, double glazing, reduce energy bills',
    'published',
    '2025-03-10'
),
(
    MD5(RAND()),
    'maintenance-tips-aluminium-windows-doors',
    'Maintenance Tips for Aluminium Windows & Doors',
    'Keep your aluminium systems in top condition with these simple maintenance practices for longevity.',
    '<p>Aluminium windows and doors are known for their low maintenance requirements, but regular care ensures they last for decades.</p><h2>Regular Cleaning</h2><p>Clean frames with mild soap and water every few months. Avoid abrasive cleaners that can scratch the finish.</p><h3>Track Maintenance</h3><p>For sliding windows and doors:</p><ul><li>Vacuum tracks regularly to remove dirt and debris</li><li>Wipe tracks with a damp cloth</li><li>Apply silicone spray to rollers annually</li></ul><h3>Hardware Checks</h3><p>Inspect and tighten screws, hinges, and locks annually. Lubricate moving parts with appropriate lubricants.</p><h2>Glass Care</h2><p>Clean glass with standard glass cleaner. Check seals around glass panels for any deterioration.</p><h3>Professional Inspection</h3><p>Have a professional inspect your windows and doors every 2-3 years to catch potential issues early.</p>',
    'assets/img/blog/01.jpg',
    'Window maintenance',
    'Maintenance',
    'Guide',
    'amber',
    'Windzon',
    'Aluminium Window & Door Maintenance Guide | Windzon',
    'Simple maintenance tips to keep your aluminium windows and doors in perfect condition for years.',
    'window maintenance, door maintenance, aluminium care, home maintenance',
    'published',
    '2025-03-08'
),
(
    MD5(RAND()),
    'commercial-aluminium-solutions',
    'Commercial Aluminium Solutions for Offices',
    'How aluminium windows and doors enhance commercial buildings with durability and modern aesthetics.',
    '<p>Commercial buildings have unique requirements for windows and doors. Aluminium systems offer the perfect combination of durability, aesthetics, and functionality.</p><h2>Benefits for Commercial Spaces</h2><p><strong>Durability:</strong> Aluminium frames withstand heavy use and harsh weather conditions without deteriorating.</p><p><strong>Security:</strong> Strong frames and multi-point locking systems provide excellent security for commercial properties.</p><h3>Design Flexibility</h3><p>Aluminium can be powder-coated in any color and fabricated into large panels for impressive entrances and curtain walls.</p><h3>Energy Efficiency</h3><p>Reduce operating costs with thermally broken frames and high-performance glazing that meets commercial building codes.</p><h2>Popular Commercial Applications</h2><ul><li>Office buildings</li><li>Retail storefronts</li><li>Hotels and restaurants</li><li>Educational facilities</li><li>Healthcare centers</li></ul>',
    'assets/img/blog/02.jpg',
    'Commercial building facade',
    'Projects',
    'Article',
    'violet',
    'Windzon',
    'Commercial Aluminium Windows & Doors | Windzon',
    'Discover how aluminium systems enhance commercial buildings with durability, security, and modern design.',
    'commercial windows, commercial doors, office buildings, aluminium systems',
    'published',
    '2025-03-05'
),
(
    MD5(RAND()),
    'color-options-aluminium-finishes',
    'Color Options: Customizing Your Aluminium Finishes',
    'Explore powder coating and finish options to match your aluminium windows and doors to your design vision.',
    '<p>One of the greatest advantages of aluminium windows and doors is the vast array of color and finish options available through powder coating.</p><h2>Powder Coating Process</h2><p>Powder coating creates a durable, uniform finish that resists chipping, scratching, and fading. It''s more environmentally friendly than traditional painting.</p><h3>Popular Color Choices</h3><p><strong>Classic Colors:</strong></p><ul><li>White - timeless and versatile</li><li>Black - modern and sophisticated</li><li>Grey - contemporary and neutral</li></ul><p><strong>Bold Colors:</strong></p><ul><li>Bronze - warm and elegant</li><li>Charcoal - dramatic and stylish</li><li>Custom colors - match any design scheme</li></ul><h2>Finish Types</h2><p><strong>Matte:</strong> Modern, non-reflective finish</p><p><strong>Gloss:</strong> Shiny, easy-to-clean surface</p><p><strong>Textured:</strong> Adds depth and hides fingerprints</p><h3>Wood-Look Finishes</h3><p>Get the appearance of wood with the durability of aluminium through wood-grain powder coating.</p>',
    'assets/img/blog/03.jpg',
    'Colored aluminium frames',
    'Windows',
    'Guide',
    'pink',
    'Windzon',
    'Aluminium Window Color Options & Finishes | Windzon',
    'Complete guide to powder coating colors and finishes for aluminium windows and doors.',
    'powder coating, aluminium colors, window finishes, custom colors',
    'published',
    '2025-03-02'
);

-- Link posts to categories
INSERT INTO `mc_blog_post_categories` (`post_id`, `category_id`)
SELECT p.id, c.id
FROM `mc_blog_posts` p
CROSS JOIN `mc_blog_categories` c
WHERE 
    (p.slug = 'choosing-right-aluminium-windows' AND c.slug = 'windows')
    OR (p.slug = 'sliding-vs-casement-doors' AND c.slug = 'doors')
    OR (p.slug = 'energy-efficiency-aluminium-windows' AND c.slug = 'windows')
    OR (p.slug = 'maintenance-tips-aluminium-windows-doors' AND c.slug = 'maintenance')
    OR (p.slug = 'commercial-aluminium-solutions' AND c.slug = 'projects')
    OR (p.slug = 'color-options-aluminium-finishes' AND c.slug = 'windows');
