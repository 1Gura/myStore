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

const showHideTable = () => {
    const tableSize = document.querySelector('.table-size');
    tableSize.classList.toggle('show-hide');
}

btnTable.addEventListener('click', showHideTable);


