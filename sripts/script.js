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
const dropDownMenu = document.querySelector('.drop-down-menu');
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

const showMainContent = (item) => {
    if(item.classList.contains('active-link') && document.querySelector('.drop-down-menu__main-content').style.width !== '50%')
        document.querySelector('.drop-down-menu__main-content').style.width = '50%';
}

const selectItem = (item) => {
    item.addEventListener('mouseover', (event) => {
        let links = [];
        let img = '';
        switch (item.id) {
            case 'woman' :
                links = ['Блузки и рубашки', 'Брюки', 'Верхняя одежда', 'Водолазки', 'Джемперы и кардиганы', 'Все категории'];
                img = 'wom';
                break;
            case 'men' :
                links = ['Брюки', 'Верхняя одежда', 'Водолазки', 'Джемперы и кардиганы', 'Джинсы', 'Все категории'];
                img = 'men';
                break;
        }

        event.preventDefault();
        const temp = document.querySelector('.active-link')
        if(temp) {
            document.querySelector('.active-link').classList.remove('active-link');
        }
        item.classList.add('active-link');
        const dropDownMenuContent = document.querySelector('.drop-down-menu__main-content');
        dropDownMenuContent.innerHTML = '';
        /* Правильный вывод, но не получилось избавиться от запятой
        ${links.map((item, index) => (
                        `<li class="drop-down-menu__item"><a href="#">${links[index]}</a></li>`
                   ))}*/
        dropDownMenuContent.innerHTML = `
                <ul class="drop-down-menu__list">
                    <li class="drop-down-menu__item"><a href="#">${links[0]}</a></li>
                    <li class="drop-down-menu__item"><a href="#">${links[1]}</a></li>
                    <li class="drop-down-menu__item"><a href="#">${links[2]}</a></li>
                    <li class="drop-down-menu__item"><a href="#">${links[3]}</a></li>
                    <li class="drop-down-menu__item"><a href="#">${links[4]}</a></li>
                    <li class="drop-down-menu__item"><a href="#">${links[5]}</a></li>
                </ul>
                <div class="drop-down-menu__container">
                    <img src="../img/${img}.jpg" alt="Картинка одежды">
                </div>
            `;
    })
}

const selectMenuItem = () => {
    if(woman) {
        showMainContent(woman);
        selectItem(woman);

    }
    if(men) {
        showMainContent(men);
        selectItem(men);
    }

}

if(dropDownMenu) {
    dropDownMenu.addEventListener('mouseover', selectMenuItem);
}











