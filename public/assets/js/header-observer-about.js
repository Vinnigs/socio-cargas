const header = document.querySelector('header')
const sectionOne = document.querySelector('.header-trigger')

const sectionOneOptions = {
    rootMargin: '10px 0px 0px 0px'
}

const sectionOneObserver = new IntersectionObserver(function(entries, sectionOneObserver) {
    entries.forEach(entry => {
        if(!entry.isIntersecting) {
            header.classList.add('header-scrolled')
        } else {
            header.classList.remove('header-scrolled')
        }
    })
}, sectionOneOptions)

sectionOneObserver.observe(sectionOne)