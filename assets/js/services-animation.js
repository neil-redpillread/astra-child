document.addEventListener("DOMContentLoaded", function () {

    const leftEl = document.querySelector('.service-detail-left');
    const rightEl = document.querySelector('.service-detail-right');

    const observerOptions = {
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-in');
            }
        });
    }, observerOptions);

    if (leftEl) observer.observe(leftEl);
    if (rightEl) observer.observe(rightEl);

});
