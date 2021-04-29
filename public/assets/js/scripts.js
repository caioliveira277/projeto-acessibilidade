const btnDark = document.querySelector('.btn-dark-switcher');
const btnDarkContainer = document.querySelector('.btn-dark');

btnDarkContainer.addEventListener('click', () => {
    btnDark.classList.toggle('move-dark');
    btnDark.classList.toggle('btn-dark-switcher');
    document.body.classList.toggle('dark')
})

function changeLetter(letter, action ){
    const styleLetter = window.getComputedStyle(letter);
    let currentFontSize = Math.floor(styleLetter.getPropertyValue('font-size').replace('px', ''));
    if(action === 'add'){
        currentFontSize++;
    } else {
        currentFontSize--;
    }

    letter.style.fontSize = `${currentFontSize}px`;
}

const allDocumentTexts = document.querySelectorAll('.change-font-size');
const btnAcrescentFont = document.querySelector('.acrescent-font');
const btnDecrescentFont = document.querySelector('.decrescent-font');

btnAcrescentFont.addEventListener('click', () => {
    allDocumentTexts.forEach(element => {
        changeLetter(element, 'add');
    })
})

btnDecrescentFont.addEventListener('click', () => {
    allDocumentTexts.forEach(element => {
        changeLetter(element);
    })
})
