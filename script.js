// Initialize Icons
lucide.createIcons();

// Smooth Scroll (Lenis)
const lenis = new Lenis();
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// Header background on scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 50) {
        header.style.padding = '12px 0';
        header.style.background = 'rgba(10, 10, 10, 0.95)';
    } else {
        header.style.padding = '20px 0';
        header.style.background = 'rgba(10, 10, 10, 0.8)';
    }
});

console.log('Project <?= $fullDomain ?> initialized');
// Переинициализация иконок после добавления нового HTML
lucide.createIcons();

// Нативный Intersection Observer для анимации появления секций
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
// Переинициализация иконок
lucide.createIcons();

// Эффект следования света за мышью в карточках
const cards = document.querySelectorAll('.feature-card');
cards.forEach(card => {
    card.addEventListener('mousemove', e => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        card.style.setProperty('--x', `${x}px`);
        card.style.setProperty('--y', `${y}px`);
    });
});

// Добавляем Observer для новых элементов, если он еще не активен
const observeElements = () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
};
observeElements();
// Нативный параллакс для картинок в кейсах
window.addEventListener('scroll', () => {
    const images = document.querySelectorAll('.case-item__image img');
    images.forEach(img => {
        const speed = 0.05;
        const rect = img.parentElement.getBoundingClientRect();
        const offset = window.innerHeight - rect.top;
        if (offset > 0 && rect.bottom > 0) {
            img.style.transform = `translateY(${offset * speed}px) scale(1.1)`;
        }
    });
});

// Обновляем иконки
lucide.createIcons();