// lenis

const lenis = new Lenis({
  autoRaf: true,
});


// parallax effect for the hero page and about page
gsap.registerPlugin(ScrollTrigger);

// Pin the hero section
ScrollTrigger.create({
    trigger: ".hero_section",
    start: "top top",
    end: "bottom top", // until it's fully out of view
    pin: true,
    pinSpacing: false, // important! removes white space
    scrub: true,
});

// Optional fade/slide in the about_us section
gsap.from(".about_us", {
    y: 0,
    duration: 1.5,
    scrollTrigger: {
        trigger: ".about_us",
        start: "top bottom",
        toggleActions: "play none none none",
    }
});

function FAQ() {
    const faqCards = document.querySelectorAll('.faq_card');

    faqCards.forEach(card => {
        const question = card.querySelector('.question');
        const answer = card.querySelector('.answer');

        question.addEventListener('click', () => {
            const isOpen = card.classList.contains('active');

            if (isOpen) {
                // Collapse
                gsap.to(card, {
                    height: '10vh',
                    duration: 0.6,
                    ease: "power2.inOut",
                    onComplete: () => {
                        card.classList.remove('active');
                        answer.style.display = 'none';
                    }
                });
            } else {
                // Expand (temporarily show answer to measure full height)
                answer.style.display = 'grid';

                requestAnimationFrame(() => {
                    const fullHeight = card.scrollHeight + "px";

                    gsap.to(card, {
                        height: fullHeight,
                        duration: 0.6,
                        ease: "power2.inOut",
                        onComplete: () => {
                            card.classList.add('active');
                        }
                    });
                });
            }
        });
    });
}


FAQ();