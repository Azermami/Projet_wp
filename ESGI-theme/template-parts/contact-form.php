<div class="contact-container">
    <div class="contact-header">
        <h1><?php echo get_theme_mod('contact_form_h1', 'Write us here'); ?></h1>
        <p><?php echo get_theme_mod('contact_form_p', 'Go! Don\'t be shy.'); ?></p>
    </div>

    <form class="contact-form">
        <div class="form-group">
            <input type="text" id="subject" name="subject" placeholder="Subject" required>
        </div>

        <div class="form-group half-width">
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-group half-width">
            <input type="tel" id="phone" name="phone" placeholder="Phone no.">
        </div>

        <div class="form-group">
            <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
