<?php
/**
 * Title: HYLA Contact Form
 * Slug: hyla/contact
 * Categories: featured
 */
?>

<!-- wp:group {"align":"full","className":"hyla-contact-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hyla-contact-section">
    <div class="wp-block-group hyla-contact-container">
        
        <div class="wp-block-columns are-vertically-aligned-center hyla-contact-grid">
            
            <div class="wp-block-column" style="flex-basis:40%">
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

                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" 
                        method="post" 
                        enctype="multipart/form-data"
                        class="hyla-contact-form">

                        <input type="hidden" name="action" value="hyla_contact">
                        <input type="hidden" name="hyla_form_submitted" value="1">

                        <div class="hyla-form-row">
                            <input type="text" 
                                name="hyla_first_name" 
                                placeholder="Voornaam" 
                                required>

                            <input type="text" 
                                name="hyla_last_name" 
                                placeholder="Achternaam" 
                                required>
                        </div>

                        <div class="hyla-form-row">
                            <input type="email" 
                                name="hyla_email" 
                                placeholder="E-mailadres" 
                                required>

                            <input type="tel" 
                                name="hyla_phone" 
                                placeholder="Telefoonnummer">
                        </div>

                        <input type="text" 
                            name="hyla_postal_code" 
                            placeholder="Postcode" 
                            required>

                        <select name="hyla_subject" required>
                            <option value="">Onderwerp van aanvraag</option>
                            <option value="multireiniger">Multireiniger</option>
                            <option value="stoomreiniger">Stoomreiniger</option>
                            <option value="accesoires">Accessoires</option>
                            <option value="service">Service</option>
                            <option value="vacature">Vacature</option>
                        </select>

                        <textarea name="hyla_message" 
                                rows="4" 
                                placeholder="Uw bericht of voorkeur voor datum..."></textarea>

                        <div class="hyla-upload-wrapper">
                            <label for="hyla_file" class="hyla-upload-label">
                                Bestand uploaden
                            </label>

                            <input type="file" 
                                id="hyla_file"
                                name="hyla_file"
                                accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                        </div>

                        <label class="hyla-checkbox">
                            <input type="checkbox" 
                                name="hyla_privacy" 
                                required>

                            <span>
                                Ik ga akkoord met het privacybeleid
                            </span>
                        </label>

                        <button type="submit" class="wp-element-button">
                            Aanvragen
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /wp:group -->