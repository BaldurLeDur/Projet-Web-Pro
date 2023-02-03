<?php $querrynews= "SELECT * FROM news";
  $prenews = $mysqlConnection->prepare($querrynews);
  $prenews->execute();
  $datanews = $prenews->fetchAll(PDO::FETCH_ASSOC);
   ?>

<?php foreach ($datanews as $news){ ?>

    <div class="container center"></div>
        <div class="row row_img_news">
            <div class="col s1"></div>
            <div class="col s10">
                <div class="center images_news">
                    <img src="./asset/<?php echo $news['image'] ?>.png" alt="">
                </div>
            </div>
            <div class="col s1"></div>
        </div>

        <div class="row">
            <div class="col s1"></div>
            <div class="col s10">
                <div class="text_news">      
                    <div class="title_news"><p class="title1_news"><?php echo $news['title'] ?></p></div>   
                    <div class="content_news"><p><?php echo $news['content'] ?></p></div>
                </div>
            </div>
            <div class="col s1"></div>
        </div>
    </div>
    
<?php } ?>