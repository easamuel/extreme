import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Navigation Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                hamburgerIcon?.classList.add('hidden');
                closeIcon?.classList.remove('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'true');
            } else {
                mobileMenu.classList.add('hidden');
                hamburgerIcon?.classList.remove('hidden');
                closeIcon?.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            }
        });

        // Close mobile menu when clicking any nav link
        document.querySelectorAll('.mobile-nav-link').forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                hamburgerIcon?.classList.remove('hidden');
                closeIcon?.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // 2. Scroll Reveal Animations
    const revealEls = document.querySelectorAll('.reveal');
    if (revealEls.length) {
        if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            revealEls.forEach((el) => el.classList.add('is-visible'));
        } else {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
            );
            revealEls.forEach((el) => observer.observe(el));
        }
    }

    // 3. Interactive Featured Projects Tab Switcher
    const projectTabs = document.querySelectorAll('[data-project-tab]');
    const projectPanels = document.querySelectorAll('[data-project-panel]');

    if (projectTabs.length && projectPanels.length) {
        projectTabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const targetId = tab.getAttribute('data-project-tab');

                // Update active tab styles
                projectTabs.forEach((t) => {
                    const isCurrent = t === tab;
                    t.setAttribute('aria-selected', isCurrent ? 'true' : 'false');
                    const num = t.querySelector('.project-num');
                    const title = t.querySelector('.project-title');

                    if (isCurrent) {
                        num?.classList.add('text-[#d4a373]');
                        num?.classList.remove('text-gray-400');
                        title?.classList.add('text-[#0c1f3a]', 'font-semibold');
                        title?.classList.remove('text-gray-400');
                    } else {
                        num?.classList.remove('text-[#d4a373]');
                        num?.classList.add('text-gray-400');
                        title?.classList.remove('text-[#0c1f3a]', 'font-semibold');
                        title?.classList.add('text-gray-400');
                    }
                });

                // Show target panel with fade
                projectPanels.forEach((panel) => {
                    if (panel.getAttribute('data-project-panel') === targetId) {
                        panel.classList.remove('hidden');
                        panel.classList.add('block');
                    } else {
                        panel.classList.add('hidden');
                        panel.classList.remove('block');
                    }
                });
            });
        });
    }

    // 4. Interactive Testimonial Switcher (01, 02, 03 tabs)
    const testimonialTabs = document.querySelectorAll('[data-testimonial-tab]');
    const testimonialPanels = document.querySelectorAll('[data-testimonial-panel]');

    if (testimonialTabs.length && testimonialPanels.length) {
        testimonialTabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-testimonial-tab');

                testimonialTabs.forEach((t) => {
                    const active = t === tab;
                    if (active) {
                        t.classList.add('border-[#d4a373]', 'text-[#d4a373]', 'font-bold');
                        t.classList.remove('border-gray-200', 'text-gray-400');
                    } else {
                        t.classList.remove('border-[#d4a373]', 'text-[#d4a373]', 'font-bold');
                        t.classList.add('border-gray-200', 'text-gray-400');
                    }
                });

                testimonialPanels.forEach((panel) => {
                    if (panel.getAttribute('data-testimonial-panel') === target) {
                        panel.classList.remove('hidden');
                    } else {
                        panel.classList.add('hidden');
                    }
                });
            });
        });
    }

    // 5. Interactive FAQ Accordion
    const faqButtons = document.querySelectorAll('.faq-trigger');

    faqButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            const content = button.nextElementSibling;
            const iconPlus = button.querySelector('.icon-plus');
            const iconMinus = button.querySelector('.icon-minus');

            // Close other open accordions
            faqButtons.forEach((otherBtn) => {
                if (otherBtn !== button) {
                    otherBtn.setAttribute('aria-expanded', 'false');
                    const otherContent = otherBtn.nextElementSibling;
                    if (otherContent) {
                        otherContent.classList.remove('is-open');
                        otherContent.classList.add('hidden');
                    }
                    otherBtn.querySelector('.icon-plus')?.classList.remove('hidden');
                    otherBtn.querySelector('.icon-minus')?.classList.add('hidden');
                }
            });

            // Toggle clicked item
            if (isExpanded) {
                button.setAttribute('aria-expanded', 'false');
                content?.classList.remove('is-open');
                content?.classList.add('hidden');
                iconPlus?.classList.remove('hidden');
                iconMinus?.classList.add('hidden');
            } else {
                button.setAttribute('aria-expanded', 'true');
                content?.classList.remove('hidden');
                content?.classList.add('is-open');
                iconPlus?.classList.add('hidden');
                iconMinus?.classList.remove('hidden');
            }
        });
    });

    // 6. Interactive Multi-Step Project Estimator / Quote Form
    const quoteWizard = document.getElementById('quote-wizard');
    if (quoteWizard) {
        let currentStep = 1;
        const totalSteps = 3;

        const stepEls = quoteWizard.querySelectorAll('.wizard-step');
        const progressBar = quoteWizard.querySelector('.wizard-progress-bar');
        const stepCounter = quoteWizard.querySelector('.wizard-step-counter');
        const nextBtn = quoteWizard.querySelector('.wizard-next-btn');
        const prevBtn = quoteWizard.querySelector('.wizard-prev-btn');
        const submitBtn = quoteWizard.querySelector('.wizard-submit-btn');

        function updateWizard() {
            stepEls.forEach((el, index) => {
                if (index + 1 === currentStep) {
                    el.classList.remove('hidden');
                } else {
                    el.classList.add('hidden');
                }
            });

            const percent = Math.round((currentStep / totalSteps) * 100);
            if (progressBar) progressBar.style.width = `${percent}%`;
            if (stepCounter) stepCounter.textContent = `${currentStep} of ${totalSteps} (${percent}%)`;

            if (prevBtn) {
                if (currentStep === 1) {
                    prevBtn.classList.add('opacity-0', 'pointer-events-none');
                } else {
                    prevBtn.classList.remove('opacity-0', 'pointer-events-none');
                }
            }

            if (nextBtn && submitBtn) {
                if (currentStep === totalSteps) {
                    nextBtn.classList.add('hidden');
                    submitBtn.classList.remove('hidden');
                } else {
                    nextBtn.classList.remove('hidden');
                    submitBtn.classList.add('hidden');
                }
            }
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                // Check if step 1 inputs or radios are filled
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateWizard();
                }
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateWizard();
                }
            });
        }

        updateWizard();
    }
});
