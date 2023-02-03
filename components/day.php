<div class="day">
  <div class="day-title">
    <p><?php echo $date ?></p>
  </div>
  <div class="timestamps">
    <p>
      <p>10h20</p>
      <p>11h50</p>
      <p>13h20</p>
      <p>14h50</p>
      <p>16h20</p>
      <p>17h50</p>
      <p>19h20</p>
      <p>20h50</p>
      <p><?php if($fully_bookable === true){echo "22h20";} else{echo "-";} ?></p>
      <p><?php if($fully_bookable === true){echo "23h50";} else{echo "-";} ?></p>
    </p>
  </div>
</div>
