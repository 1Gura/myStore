<div class="slider wow fadeInDown">
    <?php
    $result = getAllSlidePost();
    while ($row = mysqli_fetch_assoc($result)) {
        if (empty($row['id_clothes'])) {
            ?>
            <div class="slider__item">
                <h1><?= $row['name'] ?></h1>
                <img src="<?= $row['img_path'] ?>" alt="">
                <a href="#">
                    Перейти
                </a>
            </div>
        <?php }
    } ?>
</div>
