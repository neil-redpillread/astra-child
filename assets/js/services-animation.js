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

const form = document.getElementById("audit-form");

if (form) {
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // show browser validation messages
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    const scriptURL = "https://script.google.com/macros/s/AKfycbzBNOm-JErnzFFUUHNOAyfmdc_d5w9H2W-GSpSc06BBmaonH2t9Irx6DvX06ujqUZOH/exec";
    const formData = new FormData(form);

    fetch(scriptURL, {
      method: "POST",
      body: formData,
      mode: "no-cors",
    });

    alert("Submitted ✅");
    form.reset();
  });
}

});

