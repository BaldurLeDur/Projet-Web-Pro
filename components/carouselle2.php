<?php $querryCarousel2= "SELECT * FROM carouselle2";
  $preCarousel2 = $mysqlConnection->prepare($querryCarousel2);
  $preCarousel2->execute();
  $dataCarousel2 = $preCarousel2->fetchAll(PDO::FETCH_ASSOC);
   ?>

  <div class="carousel carousel-slider center carouselle2">
    <div class="carousel-fixed-item center">
    </div>
    <?php foreach ($dataCarousel2 as $carousel2){ ?>
      <div class="carousel-item" href="#one!">
        <img class="carousel2_title" src="<?php echo $carousel2['title'] ?>.png" alt="">
        <p class="carousel2_content"><?php echo $carousel2['content'] ?></p>
    </div>
    <?php } ?>
  </div>