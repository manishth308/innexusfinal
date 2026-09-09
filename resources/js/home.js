document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.hero-slide-left, .hero-slide-right, .slide-up').forEach(function (el) {
        observer.observe(el);
    });
});

(function () {
    const scrollBox = document.getElementById('wwd-scroll');
    const dots = document.querySelectorAll('#wwd-stepper .wwd-dot');
    const cards = document.querySelectorAll('.wwd-card');
    if (!scrollBox || !dots.length) return;

    function setActive(index) {
        dots.forEach((dot) => {
            const isActive = Number(dot.dataset.step) === index;
            dot.classList.toggle('bg-black', isActive);
            dot.classList.toggle('text-white', isActive);
            dot.classList.toggle('border-black', isActive);
            dot.classList.toggle('border-black/15', !isActive);
            dot.classList.toggle('text-black/40', !isActive);
        });
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    setActive(Number(entry.target.dataset.step));
                }
            });
        },
        { root: scrollBox, threshold: 0.6 }
    );

    cards.forEach((card) => observer.observe(card));
    setActive(0);
})();

(function () {
    const bg = document.getElementById('services-bg');
    const items = document.querySelectorAll('[data-image]');
    if (!bg || !items.length) return;

    items.forEach((item) => {
        item.addEventListener('mouseenter', function () {
            const image = this.getAttribute('data-image');
            bg.style.backgroundImage = `url('${image}')`;
        });

        item.addEventListener('mouseleave', function () {
            bg.style.backgroundImage = `url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=2000&q=80')`;
        });
    });
})();

(function () {
    const categories = document.querySelectorAll('.tech-category');
    const rightHeading = document.querySelector('#tech-right h3');
    const techGrid = document.getElementById('tech-grid');
    const data = window.techStackData;

    if (!categories.length || !rightHeading || !techGrid || !data) return;

    function setActive(index) {
        categories.forEach((cat, idx) => {
            const isActive = Number(cat.getAttribute('data-index')) === index;
            const indicator = cat.querySelector('.tech-indicator');
            const name = cat.querySelector('.tech-name');

            if (isActive) {
                indicator.classList.remove('opacity-0');
                indicator.classList.add('opacity-100');
                name.classList.remove('text-white', 'font-normal');
                name.classList.add('text-purple-400', 'font-medium');
            } else {
                indicator.classList.remove('opacity-100');
                indicator.classList.add('opacity-0');
                name.classList.remove('text-purple-400', 'font-medium');
                name.classList.add('text-white', 'font-normal');
            }
        });

        const selected = data[index];
        if (!selected) return;

        rightHeading.textContent = selected.name;

        techGrid.innerHTML = selected.technologies
            .map(
                (tech) => `
                    <div class="group tech-card">
                        <div class="tech-card-icon-frame">
                            <img src="${tech.image}" alt="${tech.name}" class="tech-card-icon">
                        </div>

                        <span class="text-xs text-gray-300 group-hover:text-purple-400 transition-colors">${tech.name}</span>
                    </div>
                `
            )
            .join('');
    }

    categories.forEach((cat) => {
        cat.addEventListener('click', function () {
            const index = Number(this.getAttribute('data-index'));
            setActive(index);
        });
    });

    setActive(0);
})();
