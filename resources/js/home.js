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
