<?php
/**
 * Title: Airy Partner Directory with Filter
 * Slug: hyla/partner-directory-filter
 * Categories: featured, text
 * Description: A grid layout of partners featuring category filtering, live search, and dynamic hover overlays.
 */

$upload_dir = wp_upload_dir();
$upload_base_url = trailingslashit($upload_dir['baseurl']) . '2026/05/';

$partners = [
    ['src' => $upload_base_url . 'crelan_logo.webp', 'alt' => 'Crelan', 'province' => 'oost-vlaanderen', 'region' => 'vlaanderen', 'name' => 'Crelan'],
    ['src' => $upload_base_url . 'horta_logo.webp', 'alt' => 'Horta', 'province' => 'antwerpen', 'region' => 'vlaanderen', 'name' => 'Horta'], 
    ['src' => $upload_base_url . 'logo_china_garden.webp', 'alt' => 'China Garden', 'province' => 'brussel', 'region' => 'brussel', 'name' => 'China Garden'],
    ['src' => $upload_base_url . 'logo_colmar.webp', 'alt' => 'Colmar', 'province' => 'vlaams-brabant', 'region' => 'vlaanderen', 'name' => 'Colmar'],
    ['src' => $upload_base_url . 'logo_gabriels.webp', 'alt' => 'Gabriels', 'province' => 'west-vlaanderen', 'region' => 'vlaanderen', 'name' => 'Gabriels'],
    ['src' => $upload_base_url . 'logo_keurslager.webp', 'alt' => 'Keurslager', 'province' => 'limburg', 'region' => 'vlaanderen', 'name' => 'Keurslager'],
    ['src' => $upload_base_url . 'MG_logo.webp', 'alt' => 'MG Group', 'province' => 'luik', 'region' => 'wallonie', 'name' => 'MG Group'],
    ['src' => $upload_base_url . 'logo-adv.webp', 'alt' => 'ADV', 'province' => 'henegouwen', 'region' => 'wallonie', 'name' => 'ADV Logistics'],
];

$provinces = array_unique(array_column($partners, 'province'));
$regions = array_unique(array_column($partners, 'region'));
?>

<!-- wp:html -->
<section class="hyla-partner-grid-section">
    <div class="hyla-partner-inner-content">
        
        <div class="hyla-partner-header">
            <span class="hyla-eyebrow">ONS NETWERK</span>
            <h2 class="hyla-partner-title">Ons ecosysteem van betrouwbare partners</h2>
            <p class="hyla-partner-subtitle">Filter of zoek door ons uitgebreide netwerk van gecertificeerde partners verspreid over alle provincies en gewesten.</p>
        </div>

        <div class="hyla-filter-controls">
            <div class="hyla-search-wrapper">
                <input type="text" id="hyla-partner-search" placeholder="Zoek partners op naam..." aria-label="Zoek partners" />
            </div>
            
            <div class="hyla-filter-tabs" data-filter-group="region">
                <span class="hyla-filter-label">Gewest:</span>
                <button class="hyla-filter-btn active" data-filter="all">Alle Gewesten</button>
                <?php foreach ($regions as $reg) : ?>
                    <button class="hyla-filter-btn" data-filter="<?php echo esc_attr($reg); ?>">
                        <?php echo esc_html(ucfirst($reg)); ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="hyla-filter-tabs" data-filter-group="province">
                <span class="hyla-filter-label">Provincie:</span>
                <button class="hyla-filter-btn active" data-filter="all">Alle Provincies</button>
                <?php foreach ($provinces as $prov) : ?>
                    <button class="hyla-filter-btn" data-filter="<?php echo esc_attr($prov); ?>">
                        <?php echo esc_html(ucfirst(str_replace('-', ' ', $prov))); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="hyla-grid-container">
            <?php foreach ($partners as $partner) : ?>
                <div class="hyla-grid-card" 
                     data-province="<?php echo esc_attr($partner['province']); ?>" 
                     data-region="<?php echo esc_attr($partner['region']); ?>" 
                     data-name="<?php echo esc_attr(strtolower($partner['name'])); ?>">
                    
                    <div class="hyla-grid-card-inner">
                        <div class="hyla-grid-logo-box">
                            <img src="<?php echo esc_url($partner['src']); ?>" alt="<?php echo esc_attr($partner['alt']); ?>" loading="lazy" />
                        </div>
                        
                        <div class="hyla-grid-hover-overlay">
                            <h3 class="hyla-hover-name"><?php echo esc_html($partner['name']); ?></h3>
                            <span class="hyla-hover-tag"><?php echo esc_html(ucfirst(str_replace('-', ' ', $partner['province']))); ?></span>
                            <span class="hyla-hover-subtag"><?php echo esc_html(ucfirst($partner['region'])); ?></span>
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
        const mainSection = document.querySelector('.hyla-partner-grid-section');
        if (!mainSection) return;

        const searchInput = mainSection.querySelector('#hyla-partner-search');
        const gridCards = mainSection.querySelectorAll('.hyla-grid-card');

        function processFilters() {
            if (!searchInput) return;
            
            const queryValue = searchInput.value.trim().toLowerCase();
            
            // Get active filter values from both groups
            const activeRegionTab = mainSection.querySelector('[data-filter-group="region"] .hyla-filter-btn.active');
            const activeProvinceTab = mainSection.querySelector('[data-filter-group="province"] .hyla-filter-btn.active');
            
            if (!activeRegionTab || !activeProvinceTab) return;
            
            const targetedRegion = activeRegionTab.getAttribute('data-filter');
            const targetedProvince = activeProvinceTab.getAttribute('data-filter');

            gridCards.forEach(card => {
                const partnerName = card.getAttribute('data-name') || '';
                const partnerProv = card.getAttribute('data-province') || '';
                const partnerReg = card.getAttribute('data-region') || '';

                const isMatchQuery = partnerName.indexOf(queryValue) !== -1;
                const isMatchRegion = (targetedRegion === 'all' || partnerReg === targetedRegion);
                const isMatchProvince = (targetedProvince === 'all' || partnerProv === targetedProvince);

                // Show only if it matches search query AND chosen region AND chosen province
                if (isMatchQuery && isMatchRegion && isMatchProvince) {
                    card.removeAttribute('style'); 
                } else {
                    card.style.setProperty('display', 'none', 'important');
                }
            });
        }

        // EVENT DELEGATION FOR BUTTONS: Scoped cleanly within individual filter groups
        mainSection.querySelectorAll('.hyla-filter-tabs').forEach(group => {
            group.addEventListener('click', function(e) {
                const btn = e.target.closest('.hyla-filter-btn');
                if (!btn) return; 

                e.preventDefault();
                
                // Clear active classes only within this specific group container
                group.querySelectorAll('.hyla-filter-btn').forEach(b => b.classList.remove('active'));
                
                // Add active class to clicked button
                btn.classList.add('active');
                
                // Trigger filter update
                processFilters();
            });
        });

        // SEARCH INPUT LISTENER
        if (searchInput) {
            searchInput.removeEventListener('input', processFilters);
            searchInput.addEventListener('input', processFilters);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHylaFilter);
    } else {
        initHylaFilter();
    }
    
    window.addEventListener('load', initHylaFilter);
})();
</script>
<!-- /wp:html -->