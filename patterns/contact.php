<?php
/**
 * Title: HYLA Native Contact Form
 * Slug: hyla/native-contact
 * Categories: featured
 */
?>

<!-- wp:group {"align":"full","className":"hyla-contact-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hyla-contact-section">
    <div class="wp-block-group hyla-contact-container">
        
        <div class="wp-block-columns are-vertically-aligned-center hyla-contact-grid">
            
            <div class="wp-block-column" style="flex-basis:40%">
                <p class="hyla-eyebrow">Contact</p>
                <h2 class="hyla-hero-title">Vraag een gratis demo aan</h2>
                <p class="hyla-contact-intro">Ontdek de kracht van HYLA in uw eigen woning. Vul het formulier in en wij nemen binnen 24 uur contact met u op.</p>
            </div>

            <div class="wp-block-column" style="flex-basis:60%">
                <div class="hyla-form-card">
                    <?php if (isset($_GET['contact_success'])) : ?>
                        <div class="hyla-success-message">
                            Bedankt! Uw aanvraag is verzonden. Wij nemen snel contact met u op.
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                        <input type="hidden" name="action" value="hyla_contact">
                        <input type="hidden" name="hyla_form_submitted" value="1">
                        
                        <input type="text" name="hyla_name" placeholder="Uw Naam" required>
                        <input type="email" name="hyla_email" placeholder="E-mailadres" required>
                        <input type="tel" name="hyla_phone" placeholder="Telefoonnummer">
                        <textarea name="hyla_message" rows="4" placeholder="Uw bericht of voorkeur voor datum..."></textarea>
                        
                        <button type="submit" class="wp-element-button" style="background: #FF7A18; color: #fff; width: 100%; border: none; padding: 1.2rem; border-radius: 100px; font-weight: 700; cursor: pointer;">
                            Demo Aanvragen
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /wp:group -->