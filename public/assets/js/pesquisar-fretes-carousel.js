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

new Glide('.glide-pesquisar-fretes', configCargas).mount()