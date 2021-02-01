gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);


let timeline = gsap.timeline({ defaults: { duration: 2 } });
timeline
    .from('.banner-content', { y: '-30%', opacity: 0 })
    .from('.stagger1', { opacity: 0, y: -50, stagger: .3, ease: "power4.inOut" }, "-=1.5");

gsap.from('.banner-img', { duration: 2, opacity: 0, ease: 'expo.in' });