<?php

include_once('../../../config/defaults.php');

$normalHoursQuota 				= "-";
$normalExtensionHoursQuota 		= 0;
$peakHoursQuota 	  			= "-";
$peakExtensionHoursQuota 	  	= 0;
$boardroomHoursQuota 	  		= "-";
$boardroomExtensionHoursQuota 	= 0;
$offHoursQuota 	  				= "-";
$offHoursExtensionQuota 	  	= 0;

if(!empty($_POST['quota']['rows'])) {
	$userQuota 			 = current($_POST['quota']['rows']);

	if(($_POST['quota']['rows'][1])) {
		$extendedHours 	 			= $_POST['quota']['rows'][1];
		$normalExtensionHoursQuota 		= round($extendedHours['normalHours'], 2);
		$peakExtensionHoursQuota 		= round($extendedHours['peakHours'], 2);
		$boardroomExtensionHoursQuota 	= round($extendedHours['boardroomHours'], 2);
		$offHoursExtensionQuota 		= round($extendedHours['unStaffedHours'], 2);
	}

	$normalHoursQuota 	 = round($userQuota['normalHours'], 2);
	$peakHoursQuota 	 = round($userQuota['peakHours'], 2);
	$boardroomHoursQuota = round($userQuota['boardroomHours'], 2);
	$offHoursQuota 		 = round($userQuota['unStaffedHours'], 2);
}

?>

<div class="col-md-4">
	<section class="card mb-4">
		<header class="card-header">
			<h2 class="card-title">Normal Hours</h2>
		</header>
		<div class="card-body">
<?php
			if($normalExtensionHoursQuota > 0) {
				$total = $normalExtensionHoursQuota + $normalHoursQuota;
?>
				<?php echo "$normalHoursQuota + $normalExtensionHoursQuota = $total"; ?>
<?php
			} else {
?>
				<?php echo $normalHoursQuota; ?>
<?php
			}
?>
		</div>
	</section>
</div>
<div class="col-md-4">
	<section class="card mb-4">
		<header class="card-header">
			<h2 class="card-title">Boardroom Hours</h2>
		</header>
		<div class="card-body">
<?php
			if($boardroomExtensionHoursQuota > 0) {
				$total = $boardroomExtensionHoursQuota + $boardroomHoursQuota;
?>
				<?php echo "$boardroomHoursQuota + $boardroomExtensionHoursQuota = $total"; ?>
<?php
			} else {
?>
				<?php echo $boardroomHoursQuota; ?>
<?php
			}
?>
		</div>
	</section>
</div>
<div class="col-md-4">
	<section class="card mb-4">
		<header class="card-header">
			<h2 class="card-title">Un-Staffed Hours</h2>
		</header>
		<div class="card-body">
<?php
			if($offHoursExtensionQuota > 0) {
				$total = $offHoursExtensionQuota + $offHoursQuota;
?>
				<?php echo "$offHoursQuota + $offHoursExtensionQuota = $total"; ?>
<?php
			} else {
?>
				<?php echo $offHoursQuota; ?>
<?php
			}
?>
		</div>
	</section>
</div>