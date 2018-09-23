<?php

include_once('../../../config/defaults.php');

$officeHoursQuota = "-";
$offHoursQuota 	  = "-";
if(!empty($_POST['quota']['rows'])) {
	$userQuota 			= current($_POST['quota']['rows']);
	$officeHoursQuota 	= $userQuota['staffedHours'];
	$offHoursQuota 		= $userQuota['unStaffedHours'];
}

?>

<div class="col-md-6">
	<section class="card mb-4">
		<header class="card-header">
			<h2 class="card-title">Staffed Hours</h2>
		</header>
		<div class="card-body">
			<?php echo round($officeHoursQuota, 2); ?>
		</div>
	</section>
</div>
<div class="col-md-6">
	<section class="card mb-4">
		<header class="card-header">
			<h2 class="card-title">Un-Staffed Hours</h2>
		</header>
		<div class="card-body">
			<?php echo round($offHoursQuota, 2); ?>
		</div>
	</section>
</div>