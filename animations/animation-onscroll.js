// Featured Projects
gsap.from('.transition2',
    {
        scrollTrigger:
        {
            trigger: '.transition2',
            start: 'top bottom'
        },
        y: 50,
        opacity: 0,
        duration: 2,
        stagger: .3
    }
);

// How Can I Help
const tl1 = gsap.timeline(
    { 
        scrollTrigger:
        {
            trigger: '.h3-transition',
            start: 'top bottom'
        },
        defaults:
        { duration: 2 }
    }
);
tl1
    .from('.h3-transition',
        {
            opacity: 0,
            ease: 'circ'
        }
    )
    .from('.card',
        {
            y: '50%', 
            opacity: 0,
            stagger: .3
        }, "-=1.5"
    )

// Tech I Use
const tl2 = gsap.timeline(
    { 
        scrollTrigger:
        {
            trigger: '.h5-transition-tiu',
            start: 'top bottom'
        },
        defaults:
        { duration: 2 }
    }
);
tl2
    .from('.h5-transition-tiu',
        {
            opacity: 0,
            ease: 'circ'
        }
    )
    .from('.p-transition-tiu',
        {
            opacity: 0,
            ease: 'circ',
            stagger: .3
        }, "-=1.5"
    )
    .from('.skill',
    {
        opacity: 0,
        ease: 'circ',
        stagger: .3
    }, "-=1.5"
)

// Contact Me
gsap.from('.form-container',
    {
        scrollTrigger:
        {
            trigger: '.form-container',
            start: 'top bottom'
        },
        y: 50,
        opacity: 0,
        duration: 2,
    }
);

// Footer
gsap.from('footer',
    {
        scrollTrigger:
        {
            trigger: 'footer',
            start: 'top bottom'
        },
        opacity: 0,
        duration: 2,
    }
);
