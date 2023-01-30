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
