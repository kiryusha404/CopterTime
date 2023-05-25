<img src="img/logo/logo.png" class="about">
<h1 class="about_text">Девиз компании: Время летать</h1>
<p class="about_text">Магазин CopterTime создавался энтузиастами и основывался 
на многолетнем опыте специалистов авиамоделизма. 
Наш магазин достаточно молод, мы работаем с 2018 года, 
но уже известен среди любителей и профессионалов как надежный 
поставщик оборудования для мультикоптеров. 
Наши специалисты всегда стараются быть в «тренде» современных
тенденций и новых технологий и программного обеспечения.</p>


<?php
    $push = 'select * from product where amount_product > 0 order by id_product desc limit 5';
    $res = mysqli_query($db, $push);
?>
<div class="new">
    <h1>Новинки</h1>
    <div class="itcss">
        <div class="itcss__wrapper">
            <div class="itcss__items">
                <?php 
                while($row = mysqli_fetch_array($res)){
                ?>
                <div class="itcss__item">
                    <a href="tovar?id=<?php echo $row['id_product']; ?>"><img src="<?php echo $row["img_product"]; ?>" alt="product" class="img_slider"> </a>
                    <p><?php echo $row['name_product']; ?></p>
                </div>
                <?php 
                    }
                ?>
            </div>
            <a class="itcss__control itcss__control_prev" href="#" role="button" data-slide="prev"></a>
            <a class="itcss__control itcss__control_next" href="#" role="button" data-slide="next"></a>
        </div>
    </div>
</div>

<script defer src="js/slider.js"></script>