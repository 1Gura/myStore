//Слайдер
$(document).ready(() => {
    $('.slider').slick(
        {
            arrows:true,
            dots: true,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnFocus: false,
            pauseOnHover: true,
        }
    );
    $('.catalog').slick(
        {
            arrows:true,
            dots: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: false,
            autoplaySpeed: 1,
            pauseOnFocus: false,
            pauseOnHover: true,
            variableWidth: true,
            centerMode: true
        }
    );
})
//Слайдер

const btnTable = document.querySelector('.table__btn');
const btnMenu = document.querySelector(".header_btn-menu");
const dropDownMenuBtn = document.querySelector(".drop-down-menu__btn");

const showHideTable = () => {
    const tableSize = document.querySelector('.table-size');
    tableSize.classList.toggle('show-hide');
}

if(btnTable) {
    btnTable.addEventListener('click', showHideTable);
}

const showMenu = () => {
    const dropDownMenu = document.querySelector('.drop-down-menu');
    const background = document.querySelector('.background');
    if(document.body.style.overflow === 'hidden') {
        document.body.style.overflow = '';
    } else {
        document.body.style.overflow = 'hidden'
    }
    debugger
    if(dropDownMenu.style.display === 'none') {
        dropDownMenu.style.display = 'none';
        background.style.display = 'none';
    } else {
        dropDownMenu.style.display = 'block';
        background.style.display = 'block';
    }
}

if(btnMenu) {
    btnMenu.addEventListener('mouseover', ()=>{
        if(btnMenu.classList.contains('btn-checked')) {
            btnMenu.classList.remove('btn-checked');
        } else {
            btnMenu.classList.add('btn-checked');
        }
    })
    btnMenu.addEventListener('mouseout', ()=>{
        if(btnMenu.classList.contains('btn-checked')) {
            btnMenu.classList.remove('btn-checked');
        } else {
            btnMenu.classList.add('btn-checked');
        }
    })

    btnMenu.addEventListener('click', showMenu)
}

if(dropDownMenuBtn) {
    dropDownMenuBtn.addEventListener('click', () => {
        const dropDownMenu = document.querySelector('.drop-down-menu');
        const background = document.querySelector('.background');
            dropDownMenu.style.display = 'none';
            background.style.display = 'none';
    })
}








