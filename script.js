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
// Анимация счетчиков
const animateCounters = () => {
    const counters = document.querySelectorAll('.stat-card__value');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = +entry.target.getAttribute('data-target');
                const updateCounter = () => {
                    const count = +entry.target.innerText.replace(/[^0-9]/g, '');
                    const increment = target / 50;

                    if (count < target) {
                        entry.target.innerText = Math.ceil(count + increment) + (target === 24 ? '/7' : target === 2 ? ' мин' : '%');
                        setTimeout(updateCounter, 30);
                    } else {
                        entry.target.innerText = target + (target === 24 ? '/7' : target === 2 ? ' мин' : '%');
                    }
                };
                updateCounter();
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => counterObserver.observe(counter));
};

animateCounters();
lucide.createIcons();
// FAQ Accordion Logic
const faqItems = document.querySelectorAll('.faq__question');

faqItems.forEach(item => {
    item.addEventListener('click', () => {
        const isOpen = item.classList.contains('active');
        
        // Закрываем все открытые вопросы (опционально)
        faqItems.forEach(el => {
            el.classList.remove('active');
            el.nextElementSibling.style.maxHeight = null;
        });

        if (!isOpen) {
            item.classList.add('active');
            const answer = item.nextElementSibling;
            answer.style.maxHeight = answer.scrollHeight + "px";
        }
    });
});

lucide.createIcons();