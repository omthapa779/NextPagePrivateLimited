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
