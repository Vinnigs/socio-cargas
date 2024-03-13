const config = {
    type: 'carousel',
    perView: 3,
    autoplay: 3000,
    gap: 56,
    peek: {
        before: 280,
        after: 230,
    },
    breakpoints: {
        1024: {
            perView: 3,
            peek: {
                before: 110,
                after: 120,
            },
        },
        932: {
            peek: {
                before: 70,
                after: 80,
            },
        },
        824: {
            peek: {
                before: 0,
                after: 0,
            },
        },
        768: {
            peek: {
                before: 240,
                after: 240,
            },
            perView: 1,
        },
        700: {
            peek: {
                before: 0,
                after: 0,
            },
        },
        660: {
            peek: {
                before: -100,
                after: -100,
            },
        },
        470: {
            peek: {
                before: -120,
                after: -120,
            },
        },
    }
}

new Glide('.glide', config).mount()

const config2 = {
    type: 'carousel',
    perView: 1,
    autoplay: 3000,
    gap: 56,
    focusAt: 1,
    peek: {
        before: 500,
        after: 500,
    },
    breakpoints: {
        1440: {
            perView: 1,
            peek: {
                before: 400,
                after: 400,
            },
        },
        1244: {
            perView: 1,
            peek: {
                before: 320,
                after: 320,
            },
        },
        1080: {
            perView: 1,
            peek: {
                before: 240,
                after: 240,
            },
        },
        860: {
            perView: 1,
            peek: {
                before: 180,
                after: 180,
            },
        },
        730: {
            perView: 1,
            peek: {
                before: 140,
                after: 140,
            },
        },
        660: {
            perView: 1,
            peek: {
                before: 100,
                after: 100,
            },
        },
        550: {
            perView: 1,
            peek: {
                before: 0,
                after: 0,
            },
        },
    }
}

new Glide('.glide1', config2).mount()

const config3 = {
    type: 'carousel',
    perView: 4,
    autoplay: 3000,
    gap: 32,
    focusAt: 1,
    peek: {
        before: 0,
        after: 0,
    },
    breakpoints: {
        1440: {
            perView: 4,
            peek: {
                before: 0,
                after: 0,
            },
        },
        1244: {
            perView: 2,
            peek: {
                before: 220,
                after: 220,
            },
        },
        1080: {
            perView: 2,
            peek: {
                before: 180,
                after: 180,
            },
        },
        860: {
            perView: 2,
            peek: {
                before: 130,
                after: 130,
            },
        },
        730: {
            perView: 2,
            peek: {
                before: 90,
                after: 90,
            },
        },
        660: {
            perView: 1,
            peek: {
                before: 160,
                after: 160,
            },
        },
        550: {
            perView: 1,
            peek: {
                before: 120,
                after: 120,
            },
        },
        465: {
            perView: 1,
            peek: {
                before: 0,
                after: 0,
            },
        },
    }
}

new Glide('.glide2', config3).mount()
