const observer = new IntersectionObserver ((entries) => {
    entries.forEach((entry) => {
        if(entry.isIntersecting) {
            entry.target.classList.add('show')
        } 
    })
})

const hiddenElements = document.querySelectorAll('.hidden')
const hiddenElementsRight = document.querySelectorAll('.hidden-right')
const hiddenElementsBottom = document.querySelectorAll('.hidden-bottom')
hiddenElements.forEach((el) => observer.observe(el))
hiddenElementsRight.forEach((el) => observer.observe(el))
hiddenElementsBottom.forEach((el) => observer.observe(el))