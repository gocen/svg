<svg width="400" height="400" style='background-color:blue;'>
  <?php
  for ($i = 1; $i <= 20; $i++) {
    $randx = rand(0,400);
	$randy = rand(0,400);
	if($randx<$randy) $color="yellow"; else $color="red";
    echo "<circle cx=".$randx." cy=".$randy." r=4 stroke=green stroke-width=1 fill=".$color." />";
    $x[]=$randx;
    $y[]=$randy;
  }
  ?>
  <line x1="0" y1="0" x2="400" y2="400" style="stroke:rgb(0,0,0);stroke-width:2" />
</svg>
<?php
$j=1;
for ($i = 0; $i < 20; $i++) {
	echo "<br>X".$j++."=".$x[$i];
}
?>
