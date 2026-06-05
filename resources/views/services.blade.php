<section id="services" class="lifestyle-section">
    <h2 class="lifestyle-title section-title-modern" data-reveal>Services</h2>

    <div class="cards-grid" data-reveal-stagger>
        <article class="service-card glow-card" onclick="openModal('modal1')">
            <div class="service-card-deco"></div>
            <div class="service-card-top">
                <span class="service-icon">🎨</span>
                <h3>Product Design</h3>
            </div>
            <p>Designing polished digital products that balance usability, aesthetics, and business goals for modern web and mobile experiences.</p>
            <button class="read-more-btn shimmer-btn" onclick="event.stopPropagation(); openModal('modal1')">Explore</button>
        </article>

        <article class="service-card glow-card" onclick="openModal('modal2')">
            <div class="service-card-deco"></div>
            <div class="service-card-top">
                <span class="service-icon">💻</span>
                <h3>Website Design/Development</h3>
            </div>
            <p>Building responsive, high-performance websites using modern web technologies that convert visitors into engaged customers.</p>
            <button class="read-more-btn shimmer-btn" onclick="event.stopPropagation(); openModal('modal2')">Explore</button>
        </article>

        <article class="service-card glow-card" onclick="openModal('modal3')">
            <div class="service-card-deco"></div>
            <div class="service-card-top">
                <span class="service-icon">📱</span>
                <h3>Mobile App Development</h3>
            </div>
            <p>Creating feature-rich Android and iOS applications with clean architecture, smooth interactions, and polished UI design.</p>
            <button class="read-more-btn shimmer-btn" onclick="event.stopPropagation(); openModal('modal3')">Explore</button>
        </article>
    </div>
</section>

<!-- Modals -->
<div class="modal-overlay" id="modal1">
    <div class="modal-content">
        <button class="modal-close" onclick="closeModal('modal1')">&times;</button>
        <h3>Product Design</h3>
        <p>From wireframes to prototypes, I craft digital products that feel intuitive and memorable. My process focuses on clarity, user flow, and brand consistency.</p>
        <p>Every interface is built to solve real user problems while highlighting the unique value of the product.</p>
    </div>
</div>

<div class="modal-overlay" id="modal2">
    <div class="modal-content">
        <button class="modal-close" onclick="closeModal('modal2')">&times;</button>
        <h3>Website Design/Development</h3>
        <p>I build modern websites using responsive layouts, fast loading assets, and accessible interactions. The goal is always a seamless experience on desktop and mobile.</p>
        <p>Whether it’s a landing page, portfolio, or business website, I design and develop interfaces that feel polished and performance-focused.</p>
    </div>
</div>

<div class="modal-overlay" id="modal3">
    <div class="modal-content">
        <button class="modal-close" onclick="closeModal('modal3')">&times;</button>
        <h3>Mobile App Development</h3>
        <p>I develop cross-platform mobile apps with attention to UI polish, smooth animations, and maintainable architecture. Every app is built to feel native and responsive.</p>
        <p>From feature planning to launch-ready builds, I deliver mobile experiences that connect users with your brand.</p>
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById(id).classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(id) {
        document.getElementById(id).classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    window.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal-overlay')) {
            e.target.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });

    window.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal-overlay.active').forEach(modal => {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        }
    });
</script>
