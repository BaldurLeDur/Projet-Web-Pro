<div class="price">
  <div class="price-img-container">
    <?php
      switch ($pricesToDisplay)
      {
        case 1:
          echo '<img src="asset/light_room_white.svg " alt="Light Room">';
          break;
        case 2:
          echo '<img src="asset/dark_room_white.svg" alt="Dark Room">';
          break;
        case 3:
          echo '<img src="asset/battle_room_white.svg" alt="Battle Room">';
          break;
        case 4:
          echo '<img src="asset/creative_room_white.svg" alt="Creative Room">';
          break;
      }
    ?>
  </div>
  <p>De 10h à 18h : <span class="price-cost">...</span>€ <span class="price-smol-text">/<span><span class="price-smol-text price-red-text">personne</span></p>
  <p>De 18h à 21h : <span class="price-cost">...</span>€ <span class="price-smol-text">/<span><span class="price-smol-text price-red-text">personne</span></p>
</div>
