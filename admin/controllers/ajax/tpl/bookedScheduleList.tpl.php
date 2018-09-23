<?php
	include_once('../../../config/defaults.php');
?>

<h3>Already Booked Slots</h3>

<ul>
<?php
	foreach ($_POST['bookedSlots'] as $key => $value) {
?>
	<li><?php echo date_format(date_create($value[from]), 'h:i:s A'); ?> - <?php echo date_format(date_create($value[to]), 'h:i:s A'); ?></li>
<?php
	}
?>
</ul>
<p class="text-danger">
    Note: Please try Different Slots...
</p>