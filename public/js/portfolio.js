document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initNavDock();
    initTypingAnimation();
    initScrollReveal();
    initProgressBars();
    initActiveNav();
    initParallaxGlow();
});

const HERO_CODE_TEXT = `Bio {
    First_Name: Dhirendra;
    Last_Name: Tripathi;
    Profession: Full Stack Developer;
    Experience: Continuously learning and building innovative solutions;
}`;

function initNavDock() {
    const dock = document.getElementById('nav-dock');
    const expandBtn = document.getElementById('nav-expand');
    const navLinks = document.querySelectorAll('.nav-links');

    if (!dock || !expandBtn) return;

    function setOpen(open) {
        dock.classList.toggle('is-open', open);
        expandBtn.setAttribute('aria-expanded', String(open));
    }

    expandBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        setOpen(!dock.classList.contains('is-open'));
    });

    document.addEventListener('click', (e) => {
        if (!dock.contains(e.target)) {
            setOpen(false);
        }
    });

    navLinks.forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') setOpen(false);
    });
}

function initTheme() {
    const toggle = document.getElementById('theme-toggle');
    const saved = localStorage.getItem('portfolio-theme');
    const prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;
    const theme = saved || (prefersLight ? 'light' : 'dark');

    document.documentElement.setAttribute('data-theme', theme);

    if (!toggle) return;

    toggle.addEventListener('click', () => {
        const current = document.documentElement.getAttribute('data-theme');
        const next = current === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', next);
        localStorage.setItem('portfolio-theme', next);
    });
}

function initTypingAnimation() {
    const typedEl = document.getElementById('typed-text');
    const cursorEl = document.querySelector('.typing-cursor');
    if (!typedEl) return;

    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReduced) {
        typedEl.textContent = HERO_CODE_TEXT;
        if (cursorEl) cursorEl.classList.add('is-done');
        return;
    }

    let index = 0;
    const baseDelay = 35;

    function typeNext() {
        if (index < HERO_CODE_TEXT.length) {
            typedEl.textContent += HERO_CODE_TEXT.charAt(index);
            index++;
            const delay = HERO_CODE_TEXT.charAt(index - 1) === '\n' ? baseDelay * 3 : baseDelay + Math.random() * 25;
            setTimeout(typeNext, delay);
        } else if (cursorEl) {
            setTimeout(() => cursorEl.classList.add('is-done'), 1500);
        }
    }

    setTimeout(typeNext, 600);
}

function initScrollReveal() {
    const elements = document.querySelectorAll('[data-reveal], [data-reveal-stagger]');
    if (!elements.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    elements.forEach((el) => observer.observe(el));
}

function initProgressBars() {
    const fills = document.querySelectorAll('.progress-fill');
    if (!fills.length) return;

    const widthMap = {
        'p-90': '90%',
        'p-80': '80%',
        'p-75': '75%',
        'p-70': '70%',
        'p-60': '60%',
        'p-50': '50%',
    };

    fills.forEach((fill) => {
        const sizeClass = [...fill.classList].find((c) => c.startsWith('p-'));
        if (sizeClass && widthMap[sizeClass]) {
            fill.style.setProperty('--target-width', widthMap[sizeClass]);
        }
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-animated');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.3 }
    );

    fills.forEach((fill) => observer.observe(fill));
}

function initActiveNav() {
    const sections = document.querySelectorAll('section[id], main[id]');
    const navLinks = document.querySelectorAll('.nav-links:not(.nav-btn)');

    if (!sections.length || !navLinks.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach((link) => {
                        link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
                    });
                }
            });
        },
        { threshold: 0.35, rootMargin: '-80px 0px -50% 0px' }
    );

    sections.forEach((section) => observer.observe(section));
}

function initParallaxGlow() {
    const glow = document.querySelector('.hero-profile-glow');
    if (!glow || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    document.addEventListener('mousemove', (e) => {
        const x = (e.clientX / window.innerWidth - 0.5) * 30;
        const y = (e.clientY / window.innerHeight - 0.5) * 30;
        glow.style.transform = `translate(${x}px, ${y}px)`;
    });
}
