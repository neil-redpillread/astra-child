document.addEventListener("DOMContentLoaded", function () {

    const leftEl = document.querySelector('.service-detail-left');
    const rightEl = document.querySelector('.service-detail-right');

    const observerOptions = {
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Element enters view → play animation
                entry.target.classList.add('slide-in');
            } else {
                // Element leaves view → reset animation
                entry.target.classList.remove('slide-in');
            }
        });
    }, observerOptions);

    if (leftEl) observer.observe(leftEl);
    if (rightEl) observer.observe(rightEl);

    // POPUP LOGIC
const modal = document.getElementById('audit-modal');
const openBtn = document.querySelector('.cta-start-now');
const closeBtn = document.querySelector('.audit-close');

if (openBtn) {
    openBtn.addEventListener('click', function (e) {
        e.preventDefault();
        modal.style.display = 'flex';
    });
}

if (closeBtn) {
    closeBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });
}

window.addEventListener('click', function (e) {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

});

