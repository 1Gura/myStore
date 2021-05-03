<footer class="footer wow fadeInDown">
    <div class="container">
        <ul class="footer__main-list">
            <ul class="footer__list">
                <li class="footer__item-list"><a href="#">Новости</a></li>
                <li class="footer__item-list"><a href="#">Мода</a></li>
                <li class="footer__item-list"><a href="#">Искусство</a></li>
                <li class="footer__item-list"><a href="#">Стиль</a></li>
                <li class="footer__item-list"><a href="#">Новинки</a></li>
            </ul>
            <ul class="footer__list">
                <li class="footer__item-list"><a href="#">Помощь</a></li>
                <li class="footer__item-list"><a href="#">Офорить заказ</a></li>
                <li class="footer__item-list"><a href="#">Выбрать размер</a></li>
                <li class="footer__item-list"><a href="#"> Условия доставки</a></li>
                <li class="footer__item-list"><a href="#">Возврат</a></li>
                <li class="footer__item-list"><a href="#">Акции</a></li>
            </ul>
            <ul class="footer__list">
                <?php
                $result = getIconSocial();
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <li class="footer__item-list social-network">
                        <a href="<?= $row['link'] ?>" target="_blank"><img src="<?= $row['img_path'] ?>" alt=""></a>
                    </li>
                <?php } ?>
                <?php
                $result = getSocial();
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <li class="footer__item-list social-container">
                        <address class="footer__item-list item__flex">
                            <img src="<?= $row['img_path'] ?>" alt="">
                            <span>
                                <a href="<?= $row['link'] ?>"><?= $row['paragraph'] ?></a>
                            </span>
                        </address>
                    </li>
                <?php } ?>
            </ul>
        </ul>
        <div class="info__line"></div>
        <ul class="footer__info-store">
            <li class="footer__info-store-item">
                <a href="#">
                    <img src="../img/icon.png" alt="">
                </a>
            </li>
            <li class="footer__info-store-item"><a href="#">О магазине</a></li>
            <li class="footer__info-store-item"><a href="#">Доставка</a></li>
            <li class="footer__info-store-item"><a href="#">Оплата</a></li>
        </ul>
        <div class="info__line"></div>
        <div class="me">Сайт сделан Гура Ильёй Сергеевичем</div>
    </div>
</footer>
<?php
include $_SERVER['DOCUMENT_ROOT'] . './components/scripts.php';
?>
</body>
</html>