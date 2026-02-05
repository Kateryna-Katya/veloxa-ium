/**
 * Project: Veloxa Ium - AI для обычных людей
 * Full JavaScript Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    console.log('🚀 Veloxa Ium Engine Started');

    // --- 1. ИНИЦИАЛИЗАЦИЯ ИКОНОК ---
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // --- 2. МОБИЛЬНОЕ МЕНЮ ---
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = () => {
        if (!burger || !mobileMenu) return;
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    burger?.addEventListener('click', toggleMenu);
    
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mobileMenu?.classList.contains('active')) toggleMenu();
        });
    });

    // --- 3. АККОРДЕОН (FAQ) ---
    const faqQuestions = document.querySelectorAll('.faq__question');
    faqQuestions.forEach(btn => {
        btn.addEventListener('click', () => {
            const answer = btn.nextElementSibling;
            const isOpen = btn.classList.contains('active');

            // Закрываем все остальные открытые вкладки
            faqQuestions.forEach(otherBtn => {
                if (otherBtn !== btn) {
                    otherBtn.classList.remove('active');
                    if (otherBtn.nextElementSibling) {
                        otherBtn.nextElementSibling.style.maxHeight = null;
                    }
                }
            });

            // Переключаем текущую
            if (!isOpen) {
                btn.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                btn.classList.remove('active');
                answer.style.maxHeight = null;
            }
        });
    });

    // --- 4. СЧЕТЧИКИ (СЕКЦИЯ ABOUT) ---
    const counters = document.querySelectorAll('.stat-card__value');
    const counterObserverOptions = { threshold: 0.6 };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.getAttribute('data-target'));
                let count = 0;
                const duration = 2000; // 2 секунды
                const increment = target / (duration / 30);

                const updateCount = () => {
                    count += increment;
                    if (count < target) {
                        // Форматирование вывода в зависимости от типа данных
                        let suffix = '%';
                        if (target === 24) suffix = '/7';
                        if (target === 2) suffix = ' мин';
                        
                        entry.target.innerText = Math.ceil(count) + suffix;
                        setTimeout(updateCount, 30);
                    } else {
                        let finalSuffix = '%';
                        if (target === 24) finalSuffix = '/7';
                        if (target === 2) finalSuffix = ' мин';
                        entry.target.innerText = target + finalSuffix;
                    }
                };
                updateCount();
                counterObserver.unobserve(entry.target);
            }
        });
    }, counterObserverOptions);

    counters.forEach(counter => counterObserver.observe(counter));

    // --- 5. ВАЛИДАЦИЯ ТЕЛЕФОНА (ТОЛЬКО ЦИФРЫ) ---
    const phoneInput = document.getElementById('phone');
    phoneInput?.addEventListener('input', (e) => {
        // Оставляем только цифры и первый плюс
        e.target.value = e.target.value.replace(/(?!^\+)[^\d]/g, '');
    });

    // --- 6. МАТЕМАТИЧЕСКАЯ КАПЧА И ФОРМА ---
    const captchaLabel = document.getElementById('captcha-label');
    const captchaInput = document.getElementById('captcha-input');
    const aiForm = document.getElementById('ai-form');
    const formStatus = document.getElementById('form-status');
    let captchaResult = 0;

    const initCaptcha = () => {
        if (!captchaLabel) return;
        const n1 = Math.floor(Math.random() * 10) + 1;
        const n2 = Math.floor(Math.random() * 10) + 1;
        captchaResult = n1 + n2;
        captchaLabel.innerText = `Сколько будет ${n1} + ${n2}?`;
    };
    initCaptcha();

    aiForm?.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (parseInt(captchaInput.value) !== captchaResult) {
            alert('Ошибка: Неверный ответ на защитный вопрос.');
            initCaptcha();
            captchaInput.value = '';
            return;
        }

        const btn = this.querySelector('button');
        if (btn) {
            btn.disabled = true;
            btn.innerText = 'Отправка...';
        }

        // Имитация AJAX-запроса
        setTimeout(() => {
            this.style.opacity = '0.5';
            this.style.pointerEvents = 'none';
            if (formStatus) {
                formStatus.innerText = 'Заявка успешно отправлена! Ожидайте звонка.';
                formStatus.classList.add('success');
                formStatus.style.display = 'block';
            }
            if (btn) btn.style.display = 'none';
        }, 1500);
    });

    // --- 7. COOKIE POPUP ---
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (cookiePopup && !localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 2500);
    }

    cookieAccept?.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup?.classList.remove('active');
    });

    // --- 8. АНИМАЦИЯ ПОЯВЛЕНИЯ (FADE-IN) ---
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                fadeObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.8s cubic-bezier(0.23, 1, 0.32, 1)';
        fadeObserver.observe(el);
    });

    // --- 9. ХОВЕР-ЭФФЕКТ КАРТОЧЕК (СВЕЧЕНИЕ) ---
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
});