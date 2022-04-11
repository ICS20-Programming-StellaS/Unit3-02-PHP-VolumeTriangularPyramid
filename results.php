<?php
	// get the hours and hourly rate from text field
	$Base = $_POST['base'];
	$Height = $_POST['height'];
  $Length = $_POST['length'];
?>
<?php
	// calculate the volume
	$volume = ($Base * $Height * $Length)/2
?>
<?php
  $volume = number_format($volume, 3);
?>

<h3>Results:</h3>
The volume is <?php echo "$volume" ?> cm<sup>2</sup>.
</div>