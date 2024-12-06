document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');
    const observerOptions = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                const rect = entry.boundingClientRect;
                if (rect.bottom < 0) {
                    entry.target.classList.remove('visible');
                }
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));
});