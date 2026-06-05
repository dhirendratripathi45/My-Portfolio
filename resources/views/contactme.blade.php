<section id="contact" class="contact-section">
    <div class="contact-wrapper">
        <h2 class="contact-title section-title-modern" data-reveal>Contact Me</h2>

        <div class="contact-grid">
            <!-- Contact Info Cards -->
            <div class="contact-cards" data-reveal-stagger>
                <div class="info-card glow-card">
                    <div class="card-icon-wrap">
                        <div class="card-icon">✉</div>
                    </div>
                    <h3><a href="https://mail.google.com" target="_blank">Email</a></h3>
                    <p>dktripathidhirendra76@gmail.com</p>
                </div>

                <div class="info-card glow-card">
                    <div class="card-icon-wrap">
                        <div class="card-icon">💬</div>
                    </div>
                    <h3><a href="https://wa.me/9779821168968" target="_blank">WhatsApp</a></h3>
                    <p>+977 9821168968</p>
                </div>

                <div class="info-card glow-card">
                    <div class="card-icon-wrap">
                        <div class="card-icon">👤</div>
                    </div>
                    <h3><a href="https://www.facebook.com/" target="_blank">Messenger</a></h3>
                    <p>dktripathidhirendra76@gmail.com</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper glow-card" data-reveal="right">
                <form class="contact-form" action="/contact" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Your Phone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="submit-button shimmer-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
