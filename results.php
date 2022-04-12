<?php
	// get the hours and hourly rate from text field
	$Side_a = $_POST['side_a'];
	$Side_b = $_POST['side_b'];
  $Height = $_POST['height'];
?>
<?php
	// calculate the volume
	$volume = (1/6) * $Side_a * $Side_b * $Height
?>
<?php
  $volume = number_format($volume, 3);
?>

<h3>Results:</h3>
The volume is <?php echo "$volume" ?> cm<sup>2</sup>.
</div>