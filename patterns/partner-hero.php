<?php
/**
 * Title: Airy Partner Directory with Filter
 * Slug: hyla/partner-directory-filter
 * Categories: featured, text
 * Description: A grid layout of partners featuring category filtering, live search, and dynamic hover overlays.
 */

// Dynamically get the uploads directory URL
$upload_dir = wp_upload_dir();
$upload_base_url = trailingslashit($upload_dir['baseurl']) . '2026/05/';

$partners = [
    ['src' => $upload_base_url . 'crelan_logo.webp', 'alt' => 'Crelan', 'category' => 'finance', 'name' => 'Crelan'],
    ['src' => $upload_base_url . 'horta_logo.webp', 'alt' => 'Horta', 'category' => 'retail', 'name' => 'Horta'], 
    ['src' => $upload_base_url . 'logo_china_garden.webp', 'alt' => 'China Garden', 'category' => 'food', 'name' => 'China Garden'],
    ['src' => $upload_base_url . 'logo_colmar.webp', 'alt' => 'Colmar', 'category' => 'food', 'name' => 'Colmar'],
    ['src' => $upload_base_url . 'logo_gabriels.webp', 'alt' => 'Gabriels', 'category' => 'retail', 'name' => 'Gabriels'],
    ['src' => $upload_base_url . 'logo_keurslager.webp', 'alt' => 'Keurslager', 'category' => 'food', 'name' => 'Keurslager'],
    ['src' => $upload_base_url . 'MG_logo.webp', 'alt' => 'MG Group', 'category' => 'finance', 'name' => 'MG Group'],
    ['src' => $upload_base_url . 'logo-adv.webp', 'alt' => 'ADV', 'category' => 'other', 'name' => 'ADV Logistics'],
];

$categories = array_unique(array_column($partners, 'category'));
?>

<!-- wp:html -->
<section class="hyla-partner-grid-section">
    <div class="hyla-partner-inner-content">
        
        <div class="hyla-partner-header">
            <span class="hyla-eyebrow">OUR NETWORK</span>
            <h2 class="hyla-partner-title">Our Ecosystem of Trusted Collaborators</h2>
            <p class="hyla-partner-subtitle">Filter or search through our extensive network of certified partners across all sectors.</p>
        </div>

        <div class="hyla-filter-controls">
            <div class="hyla-search-wrapper">
                <input type="text" id="hyla-partner-search" placeholder="Search partners by name..." aria-label="Search partners" />
            </div>
            
            <div class="hyla-filter-tabs">
                <button class="hyla-filter-btn active" data-filter="all">All Sectors</button>
                <?php foreach ($categories as $cat) : ?>
                    <button class="hyla-filter-btn" data-filter="<?php echo esc_attr($cat); ?>">
                        <?php echo esc_html(ucfirst($cat)); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="hyla-grid-container">
            <?php foreach ($partners as $partner) : ?>
                <div class="hyla-grid-card" 
                     data-category="<?php echo esc_attr($partner['category']); ?>" 
                     data-name="<?php echo esc_attr(strtolower($partner['name'])); ?>">
                    
                    <div class="hyla-grid-card-inner">
                        <div class="hyla-grid-logo-box">
                            <img src="<?php echo esc_url($partner['src']); ?>" alt="<?php echo esc_attr($partner['alt']); ?>" loading="lazy" />
                        </div>
                        
                        <div class="hyla-grid-hover-overlay">
                            <h3 class="hyla-hover-name"><?php echo esc_html($partner['name']); ?></h3>
                            <span class="hyla-hover-tag"><?php echo esc_html(ucfirst($partner['category'])); ?></span>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<script>
(function() {
    function initHylaFilter() {
        // Target the parent element directly for event delegation
        const mainSection = document.querySelector('.hyla-partner-grid-section');
        if (!mainSection) return;

        const searchInput = mainSection.querySelector('#hyla-partner-search');
        const gridCards = mainSection.querySelectorAll('.hyla-grid-card');

        function processFilters() {
            if (!searchInput) return;
            
            const queryValue = searchInput.value.trim().toLowerCase();
            const activeTab = mainSection.querySelector('.hyla-filter-btn.active');
            if (!activeTab) return;
            
            const targetedCategory = activeTab.getAttribute('data-filter');

            gridCards.forEach(card => {
                const partnerName = card.getAttribute('data-name') || '';
                const partnerCat = card.getAttribute('data-category') || '';

                const isMatchQuery = partnerName.indexOf(queryValue) !== -1;
                const isMatchCategory = (targetedCategory === 'all' || partnerCat === targetedCategory);

                if (isMatchQuery && isMatchCategory) {
                    card.removeAttribute('style'); 
                } else {
                    card.style.setProperty('display', 'none', 'important');
                }
            });
        }

        // 1. EVENT DELEGATION FOR BUTTONS: Listen to the whole section
        mainSection.addEventListener('click', function(e) {
            // Check if what was clicked (or its parent) is a filter button
            const btn = e.target.closest('.hyla-filter-btn');
            if (!btn) return; 

            e.preventDefault();
            
            // Clear active classes safely from buttons inside this specific section
            mainSection.querySelectorAll('.hyla-filter-btn').forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            btn.classList.add('active');
            
            // Trigger filter update
            processFilters();
        });

        // 2. SEARCH INPUT LISTENER
        if (searchInput) {
            searchInput.removeEventListener('input', processFilters);
            searchInput.addEventListener('input', processFilters);
        }
    }

    // Force initialization across all loading states (ready, interactive, delayed)
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHylaFilter);
    } else {
        initHylaFilter();
    }
    
    // Safety fallback: if your theme uses deferred blocks or AJAX, run it one more time on window load
    window.addEventListener('load', initHylaFilter);
})();
</script>
<!-- /wp:html -->
