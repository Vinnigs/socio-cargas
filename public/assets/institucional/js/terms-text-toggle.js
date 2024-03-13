const politicsWrapper = document.querySelector('.politics-text')
const termsWrapper = document.querySelector('.politics-terms-text')
const politicsBtn = document.querySelector('#politics-btn')
const termsBtn = document.querySelector('#terms-btn')

politicsBtn.addEventListener('click', () => {
    politicsWrapper.classList.toggle('active-toggle'), politicsBtn.classList.toggle('selected-terms')
    termsWrapper.classList.remove('active-toggle'), termsBtn.classList.remove('selected-terms')
})

termsBtn.addEventListener('click', () => {
    politicsWrapper.classList.remove('active-toggle'), politicsBtn.classList.remove('selected-terms')
    termsWrapper.classList.add('active-toggle'), termsBtn.classList.add('selected-terms')
})