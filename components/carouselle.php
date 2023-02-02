<?php $querryCarousel= "SELECT * FROM carouselle";
  $preCarousel = $mysqlConnection->prepare($querryCarousel);
  $preCarousel->execute();
  $dataCarousel = $preCarousel->fetchAll(PDO::FETCH_ASSOC);
   ?>

  <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
    </div>
    <?php foreach ($dataCarousel as $carousel){ ?>
      <div class="row">
        <div class="col s12 m7">
          <div class="carousel-item" href="#<?php echo $carousel['ID']; ?>">
            <div class="card carousel_card">
              <div class="card-image">
                <img src="./<?php echo $carousel['image_background'] ?>.jpg" alt="">
                <span class="card-title text_carousel"><h2><?php echo $carousel['title'] ?></h2> <?php echo $carousel['content'] ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>