let select = document.querySelector('.select'),
selectedValue = document.getElementById('selected-value'),
optionsViewButton1 = document.getElementById('options-view-button1'),
inputsOptions = document.querySelectorAll('.option .form-input-radio')

inputsOptions.forEach(input => {
    input.addEventListener('click', event => {
        selectedValue.textContent = input.dataset.label

        const inMouseOrTouch = event.pointerType == 'mouse' || event.pointerType == 'touch'
        inMouseOrTouch && optionsViewButton1.click()
    })
})

window.addEventListener('keydown', e => {
    if(!select.classList.contains('open')) return

    if(e.key == 'Escape' || e.key == ' ') {
        optionsViewButton1.click()
    }
})

optionsViewButton1.addEventListener('input', () => {
    select.classList.toggle('open')

    if(!select.classList.contains('open')) return

    const input = document.querySelector('.option .form-input-radio:checked') || document.querySelector('.option .form-input-radio')

    input.focus()
})
