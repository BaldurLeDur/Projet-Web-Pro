<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_article.css">
    <link rel="stylesheet" href="css/style_smol_experience.css">

    <!--Import Font Awesome-->
    <link href="css/fontawesome/fontawesome.min.css" rel="stylesheet">
    <link href="css/fontawesome/brands.min.css" rel="stylesheet">
    <link href="css/fontawesome/solid.min.css" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php
        switch ($_GET['room']) {
          case 'light':
            echo 'Light Room';
            $logo_order = array('dark', 'battle', 'creative');
            break;
          case 'dark':
            echo 'Dark Room';
            $logo_order = array('battle', 'creative', 'light');
            break;
          case 'battle':
            echo 'Battle Room';
            $logo_order = array('creative', 'light', 'dark');
            break;
        }
      ?>
    </title>
  </head>
  <body class="<?php echo $_GET['room'] ?>-bg">
    <?php require_once('config.php') ?>
    <?php require_once('components/navbar.php') ?>

    <div class="room-logos">
      <img src="asset/<?php echo $_GET['room'] ?>_room_<?php if($_GET['room']=='dark'){echo 'white';} else{echo 'black';} ?>.svg"
           alt="<?php echo $_GET['room'] ?> room" />
      <div class="side-logos">
        <img src="asset/<?php echo $logo_order[0] ?>_room_<?php if($_GET['room'] === 'dark'){echo "white";} else{echo "black";} ?>.svg"
             alt="<?php echo $logo_order[0] ?> room" />
        <img src="asset/<?php echo $logo_order[1] ?>_room_<?php if($_GET['room'] === 'dark'){echo "white";} else{echo "black";} ?>.svg"
             alt="<?php echo $logo_order[1] ?> room" />
        <img src="asset/<?php echo $logo_order[2] ?>_room_<?php if($_GET['room'] === 'dark'){echo "white";} else{echo "black";} ?>.svg"
             alt="<?php echo $logo_order[2] ?> room" />
      </div>
    </div>

    <?php require_once('components/about.php') ?>

    <?php
      $sql_query = "SELECT * FROM experience WHERE room = :target";
      $dataBinded = array(
        ":target" => $_GET['room']
      );
      $pre = $mysqlConnection -> prepare($sql_query);
      $pre -> execute($dataBinded);
      $list_exp = $pre -> fetchAll(PDO::FETCH_ASSOC);

      foreach ($list_exp as $exp_data)
      {
        require('components/experience.php');
      }
    ?>

    <?php require('components/carouselle.php') ?>
    <?php require('components/footer.php') ?>

  </body>
</html>
