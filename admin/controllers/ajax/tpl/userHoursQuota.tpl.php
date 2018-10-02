<?php

include_once('../../../config/defaults.php');

$normalHoursQuota = "-";
$peakHoursQuota 	  = "-";
$boardroomHoursQuota 	  = "-";
$offHoursQuota 	  = "-";
if(!empty($_POST['quota']['rows'])) {
	$userQuota 			 = current($_POST['quota']['rows']);
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
			<?php echo $normalHoursQuota; ?>
		</div>
	</section>
</div>
<div class="col-md-4">
	<section class="card mb-4">
		<header class="card-header">
			<h2 class="card-title">Boardroom Hours</h2>
		</header>
		<div class="card-body">
			<?php echo $boardroomHoursQuota; ?>
		</div>
	</section>
</div>
<div class="col-md-4">
	<section class="card mb-4">
		<header class="card-header">
			<h2 class="card-title">Un-Staffed Hours</h2>
		</header>
		<div class="card-body">
			<?php echo $offHoursQuota; ?>
		</div>
	</section>
</div>