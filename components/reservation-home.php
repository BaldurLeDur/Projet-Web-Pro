<div class="reservation-home">
  <div class="reservation-home-title">
    <img src="asset/reservation.svg" alt="Reservation">
    <p>N'attendez plus, réservez</p>
  </div>
  <div class="reservation-home-prices">
    <p>Voir les tarifs pour</p>
    <p>(max 8 joueurs)</p>
  </div>
    <div class="reservation-home-settings">
      <button type="button" name="add-player"><i class="material-icons">add</i></button>
      <p class="reservation-player-amount">4</p>
      <button type="button" name="remove-player"><i class="material-icons">remove</i></button>
    </div>
  <div class="reservation-home-rooms">
    <?php
      $pricesToDisplay = 1;
      require('components/price.php');

      $pricesToDisplay = 2;
      require('components/price.php');

      $pricesToDisplay = 3;
      require('components/price.php');

      $pricesToDisplay = 4;
      require('components/price.php');
    ?>
  </div>
</div>
<div class="calendar-home">
  <div class="calendar-home-selector">
    <button type="button" name="prev-date"><i class="material-icons">keyboard_double_arrow_left</i></button>
    <p>Du 31 Janvier au 5 Février</p>
    <button type="button" name="next-date"><i class="material-icons">keyboard_double_arrow_right</i></button>
  </div>
</div>
<div class="calendar">
  <?php $date = 'Mardi 31 Jan.'; $fully_bookable = false; require('components/day.php') ?>
  <div class="vertical-separator"></div>
  <?php $date = 'Mercredi 01 Fév.'; $fully_bookable = false; require('components/day.php') ?>
  <div class="vertical-separator"></div>
  <?php $date = 'Jeudi 02 Fév.'; $fully_bookable = false; require('components/day.php') ?>
  <div class="vertical-separator"></div>
  <?php $date = 'Vendredi 03 Fév.'; $fully_bookable = true; require('components/day.php') ?>
  <div class="vertical-separator"></div>
  <?php $date = 'Samedi 04 Fév.'; $fully_bookable = true; require('components/day.php') ?>
  <div class="vertical-separator"></div>
  <?php $date = 'Dimanche 05 Fév.'; $fully_bookable = false; require('components/day.php') ?>
</div>
<div class="calendar-legend">
  <div></div>
  <p>Non disponible</p>
  <div></div>
  <p>Réservé</p>
</div>
