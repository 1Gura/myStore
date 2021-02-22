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
/*Константы содержащие ссылки на дом элементы*/
const btnTable = document.querySelector('.table__btn');
const btnMenu = document.querySelector(".header_btn-menu");
const dropDownMenuBtn = document.querySelector(".drop-down-menu__btn");
const woman = document.querySelector("#woman");
const men = document.querySelector("#men");

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

    if(dropDownMenu.classList.contains('drop-active')) {
        dropDownMenu.classList.remove('drop-active');
        background.classList.remove('background-active');
    } else {
        dropDownMenu.classList.add('drop-active');
        background.classList.add('background-active');
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
    dropDownMenuBtn.addEventListener('click', showMenu)
}

if(woman) {
    woman.addEventListener('mouseover', (event) => {
        event.preventDefault();
        const dropDownMenuContent = document.querySelector('.drop-down-menu__main-content');
        dropDownMenuContent.innerHTML = '';

        dropDownMenuContent.innerHTML = `
                <ul class="drop-down-menu__list">
                    <li class="drop-down-menu__item"><a href="#">Блузки и рубашки</a></li>
                    <li class="drop-down-menu__item"><a href="#">Брюки</a></li>
                    <li class="drop-down-menu__item"><a href="#">Верхняя одежда</a></li>
                    <li class="drop-down-menu__item"><a href="#">Водолазки</a></li>
                    <li class="drop-down-menu__item"><a href="#">Джемперы и кардиганы</a></li>
                    <li class="drop-down-menu__item"><a href="#">Все категории</a></li>
                </ul>
                <div class="drop-down-menu__container">
                    <img src="../img/wom.jpg" alt="Картинка одежды">
                </div>
            `;
    })
}


if(men) {
    men.addEventListener('mouseover', (event) => {
        event.preventDefault();
        const dropDownMenuContent = document.querySelector('.drop-down-menu__main-content');
        dropDownMenuContent.innerHTML = '';

    })
}






