const configCargas2 = {
    type: 'carousel',
    perView: 1,
    autoplay: 30000,
    gap: 0,
    focusAt: 0,
    peek: {
        before: 500,
        after: 500,
    },
    breakpoints: {
        1440: {
            perView: 1,
            peek: {
                before: 0,
                after: 500,
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

const configCargas = {
    type: 'carousel',
    perView: 3,
    autoplay: 3000,
    gap: 14,
    focusAt: 0,
    peek: {
        before: 0,
        after: -20,
    },
    breakpoints: {
        1440: {
            perView: 3,
            peek: {
                before: 0,
                after: 0,
            },
        },
        950: {
            perView: 1,
            peek: {
                before: 210,
                after: 210,
            },
        },
        768: {
            perView: 1,
            peek: {
                before: 180,
                after: 180,
            },
        },
        640: {
            perView: 1,
            peek: {
                before: 130,
                after: 130,
            },
        },
        540: {
            perView: 1,
            peek: {
                before: 100,
                after: 100,
            },
        },
        476: {
            perView: 1,
            peek: {
                before: 75,
                after: 75,
            },
        },
        425: {
            perView: 1,
            peek: {
                before: 71,
                after: 71,
            },
        },
        400: {
            perView: 1,
            peek: {
                before: 55,
                after: 55,
            },
        },
        380: {
            perView: 1,
            peek: {
                before: 48,
                after: 48,
            },
        },
        360: {
            perView: 1,
            peek: {
                before: 37,
                after: 37,
            },
        },
        340: {
            perView: 1,
            peek: {
                before: 27,
                after: 27,
            },
        },
    }
}

new Glide('.glide-cargas', configCargas).mount()

const configCargas3 = {
    type: 'carousel',
    perView: 3,
    autoplay: 3000,
    gap: 0,
    focusAt: 0,
    peek: {
        before: 0,
        after: -20,
    },
    breakpoints: {
        950: {
            perView: 1,
            peek: {
                before: 250,
                after: 250,
            },
        },
        820: {
            perView: 1,
            peek: {
                before: 200,
                after: 200,
            },
        },
        768: {
            perView: 1,
            peek: {
                before: 190,
                after: 190,
            },
        },
        690: {
            perView: 1,
            peek: {
                before: 150,
                after: 150,
            },
        },
        600: {
            perView: 1,
            peek: {
                before: 110,
                after: 110,
            },
        },
        516: {
            perView: 1,
            peek: {
                before: 75,
                after: 75,
            },
        },
        440: {
            perView: 1,
            peek: {
                before: 60,
                after: 60,
            },
        },
        400: {
            perView: 1,
            peek: {
                before: 55,
                after: 55,
            },
        },
        380: {
            perView: 1,
            peek: {
                before: 0,
                after: 0,
            },
        },
    }
}

new Glide('.glide-clients', configCargas3).mount()