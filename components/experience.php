<div class="container center"></div>
    <div class="row row_img_exp">
        <div class="col s1"></div>
        <div class="col s10">
            <div class="center images_exp">
                <img class="image_exp" src="asset/<?php echo $exp_data['image'] ?>">
                <img class="picto1" src="asset/Icone_NB_joueurs.svg">
                <p class="text_picto1"><?php echo $exp_data['time'] ?></p>
                <img class="picto2" src="asset/Icone_temps_estimer.svg">
                <p class="text_picto2"><?php echo $exp_data['client'] ?></p>
                <img class="picto3" src="asset/like_exp.svg">
                <p class="text_picto3"><?php
                                          $disp_nb = $exp_data['likes'];
                                          $i = 0;
                                          while($disp_nb > 999)
                                          {
                                            $disp_nb /= 1000;
                                            $i += 1;
                                          }

                                          echo round($disp_nb, 2);
                                          switch($i)
                                          {
                                            case 1:
                                              echo " K";
                                              break;
                                            case 2:
                                              echo " M";
                                              break;
                                            case 3:
                                              echo " G";
                                              break;
                                            default:
                                              break;
                                          }
                                        ?></p>
            </div>
        </div>
        <div class="col s1"></div>
    </div>

    <div class="row">
        <div class="col s1"></div>
        <div class="col s10">
            <div class="text_exp">
                <div class="title_exp"><p class="title1_exp"><?php echo $exp_data['title'] ?>  |  <span class="title2_exp"><?php echo $exp_data['room'] ?> room</span></p></div>
                <div class="content_exp"><p><?php echo $exp_data['description'] ?></p></div>
                <a href=""><img class="bouton_reserver_exp" src="./asset/bouton_reserver_exp.png" alt=""></a>
                <a href="exp.php?room=<?php echo $exp_data['room'] ?>"><p class="link_exp">découvrez <?php echo $exp_data['room'] ?> room</p></a>
            </div>
        </div>
        <div class="col s1"></div>
    </div>
</div>
