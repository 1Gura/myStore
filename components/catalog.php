<div class="store__catalog container wow fadeInDown">
    <h1>Каталог товаров</h1>
    <div class="catalog">
        <?php
        $result = getAllCatalog();
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="slider__item">
                <img src="../clothes/<?= $row['img_path'] ?>" alt="">
                <p><?= $row['title'] ?></p>
                <p>Цена:  <?= $row['price'] ?> руб.</p>
            </div>
        <?php } ?>
    </div>
</div>