<div class="news container wow fadeInDown">
    <h1>Советы дня</h1>
    <?php
    $result = getNews();
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="news__block1">
            <p>
                <img src="<?= $row['img_path'] ?>" alt="">
                <span><?=$row['paragraph']?></span>
            </p>
        </div>
    <?php } ?>
</div>