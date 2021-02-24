const btnTable = document.querySelector('.table__btn');
const btnMenu = document.querySelector(".header_btn-menu");
const dropDownMenuBtn = document.querySelector(".drop-down-menu__btn");
const background = document.querySelector(".background");
const dropDownMenu = document.querySelector('.drop-down-menu');
const dropMenu = document.querySelector('#drop-menu-list');
const woman = document.querySelector("#woman");
const men = document.querySelector("#men");
const children = document.querySelector("#children");
const shoes = document.querySelector("#shoes");

const showHideTable = () => {
    const tableSize = document.querySelector('.table-size');
    tableSize.classList.toggle('show-hide');
}

if(btnTable) {
    btnTable.addEventListener('click', showHideTable);
}

const showMenu = () => {
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

if(background) {
    background.addEventListener('click', showMenu)
}

const showMainContent = (item) => {
    if(item.classList.contains('active-link') && document.querySelector('.drop-down-menu__main-content').style.width !== '50%')
        document.querySelector('.drop-down-menu__main-content').style.width = '50%';
}

const selectItem = (item) => {
    showMainContent(item);
    item.addEventListener('mouseover', (event) => {
        let itemMenu = {};
        switch (item.id) {
            case 'woman' :
                itemMenu = {
                    list: [
                        {
                            title: 'Одежда',
                            links : ['Блузки и рубашки', 'Брюки', 'Верхняя одежда', 'Водолазки',
                                'Джемперы и кардиганы', 'Все категории']
                        }
                    ],

                    img: 'wom'
                }
                break;
            case 'men' :
                itemMenu = {
                    list: [
                            {
                                title: 'Одежда',
                                links : ['Брюки', 'Верхняя одежда', 'Водолазки',
                                    'Джемперы и кардиганы', 'Джинсы', 'Все категории']
                            }
                          ],
                    img : 'men'
                }

                break;
            case 'children' :
                itemMenu = {
                    list: [
                        {
                            title: 'Для мальчиков',
                            links : ['Белье', 'Брюки и шорты', 'Рубашки',
                                'Верхняя одежда', 'Водолазки', 'Все категории']
                        },
                        {
                            title: 'Для девочек',
                            links : ['Белье', 'Блузки и рубашки', 'Брюки и шорты',
                                'Верхняя одежда', 'Водолазки', 'Все категории']
                        }
                    ],
                    img : 'children'
                }
                break;
            case 'shoes' :
                itemMenu = {
                    list: [
                        {
                            title: 'Мужская',
                            links : ['Ботинки полуботинки', 'Кеды и кросовки', 'Мокасины',
                                'Сапоги', 'Тапочки']
                        },
                        {
                            title: 'Женская',
                            links : ['Балетки и чешки', 'Босоножки и сандали', 'Кеды и кросовки',
                                'Сапоги', 'Тапочки']
                        }
                    ],
                    img : 'shoes'
                }
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
        dropDownMenuContent.innerHTML = `
                <ul class="drop-down-menu__list el-hover" id="content-list"></ul>
                <div class="drop-down-menu__container">
                    <img src="../img/${itemMenu.img}.jpg" alt="Картинка одежды">
                </div>
            `;
        const contentList = document.querySelector('#content-list');
        itemMenu.list.map((item)=> {
            contentList.insertAdjacentHTML(
                'beforeend',
                `<li className="drop-down-menu__item"><span class="drop-down-menu__title">${item.title}</span></li>`)
            item.links.map((element) => {
                contentList.insertAdjacentHTML(
                    'beforeend',
                    `<li className="drop-down-menu__item"><a href="#">${element}</a></li>`
                )
            })
        })
    })
}

const selectMenuItem = () => {
    if(woman) {
        selectItem(woman);
    }
    if(men) {
        selectItem(men);
    }
    if(children) {
        selectItem(children);
    }
    if(shoes) {
        selectItem(shoes);
    }
}

if(dropMenu) {
    dropMenu.addEventListener('mouseover', selectMenuItem);
}

// Маска ввода для email

const validation = () => {
    const form = document.querySelector('#personal-area-form');
    const email = document.querySelector('#email');
    const password = document.querySelector('#password');
    //const pattern = /^[^]+@[^]+\.[a-z]{2,3}$/;
    const pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

    if(email.value.match(pattern)) {
        email.classList.add('valid');
        email.classList.remove('invalid');
        // password.classList.add('valid');
        // password.classList.remove('invalid');
    } else {
        email.classList.remove('valid');
        email.classList.add('invalid');
        // password.classList.remove('valid');
        // password.classList.add('invalid');
    }
}









