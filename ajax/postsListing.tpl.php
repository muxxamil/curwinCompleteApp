<?php

	include_once('../admin/config/defaults.php');
	include_once('../admin/config/api_caller.php');
	include_once('../admin/controllers/Posts.cls.php');

	$pageLimit 	= !empty($_POST['pageLimit']) ? $_POST['pageLimit'] : 8;
	$page 		= !empty($_POST['page']) ? $_POST['page'] : 1;

	$params = ["page" => $page, "pageLimit" => $pageLimit];

	if(!empty($_POST['title'])) {
		$params['title'] = $_POST['title'];
	}

	if(!empty($_POST['tagIds'])) {
		$params['tagIds'] = $_POST['tagIds'];
	}
	
	$post_list 	= Posts::get_posts($params);
	
	foreach ($post_list['body']->rows as $key => $value) {
		$postTags = array_map(function($element) {
		        return (!empty($element->Tag) && !empty($element->Tag->title)) ? $element->Tag->title : null ;
		    },
		    $value->TagsBlogPostsMappings
		);

		$imageDisplayed = false;
?>

<article class="post post-large mt-5">
<?php
	if(!empty($value->Attachments)) {
		$imageDisplayed = true;
?>
		<div class="post-image single">
			<img class="img-thumbnail" src="img/blog/<?php echo current($value->Attachments)->path; ?>" alt="">
		</div>
<?php
	}
?>
<?php
	if(!$imageDisplayed && !empty($value->videoUrl)) {
?>
	<div class="post-video">
		<iframe src="<?php echo $value->videoUrl; ?>" width="830" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
<?php
	}
?>	
	<div class="post-date">
		<span class="day"><?php echo date_format(date_create($value->createdAt), 'd'); ?></span>
		<span class="month"><?php echo date_format(date_create($value->createdAt), 'M'); ?></span>
	</div>

	<div class="post-content">

		<h2><a href="blog-post.php"><?php echo $value->title; ?></a></h2>
		<p><?php echo substr($value->preDetail, 0, 200); ?> [...]</p>

		<div class="post-meta">
			<span><i class="fas fa-user"></i> By <a><?php echo $value->AddedBy->name; ?></a> </span>
			<span><i class="fas fa-tag"></i> 
<?php
			$firstTag = true;
				foreach ($value->TagsBlogPostsMappings as $k => $v) {
?>
					<?php echo (!$firstTag) ? ", " : ""; ?><a><?php echo $v->Tag->title; ?></a>
<?php
				}
?>
				</span>
			<span><i class="fas fa-comments"></i> <a href="#"><?php echo count($value->Comments); ?> Comments</a></span>
			<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="blog-post.php" class="btn btn-xs btn-primary">Read more...</a></span>
		</div>

	</div>
</article>

<?php
	}
?>

<input type="hidden" name="pageNo" id="pageNo" value="<?php echo $page; ?>">
<ul class="pagination float-right mt-5">

<?php

	$pages = ceil($post_list['body']->count / $pageLimit); // calc pages

    $paging_info = array(); // start out array
    $paging_info['si']        = ($page * $pageLimit) - $pageLimit; // what row to start at
    $paging_info['pages']     = $pages;                   // add the pages
    $paging_info['curr_page'] = $page;               // Whats the current page
?>

<!-- If the current page is more than 1, show the First and Previous links -->
    <?php if($paging_info['curr_page'] > 1) { ?>
		<li class="page-item"><a class="page-link" onclick="return changePageNo(1)">First</a></li>
		<li class="page-item"><a class="page-link" onclick="return changePageNo(<?php echo ($paging_info['curr_page'] - 1); ?>)">Prev</a></li>
    <?php } ?>

    <?php
        //setup starting point

        //$max is equal to number of links shown
        $max = 7;
        if($paging_info['curr_page'] < $max)
            $sp = 1;
        elseif($paging_info['curr_page'] >= ($paging_info['pages'] - floor($max / 2)) )
            $sp = $paging_info['pages'] - $max + 1;
        elseif($paging_info['curr_page'] >= $max)
            $sp = $paging_info['curr_page']  - floor($max/2);
    ?>

    <!-- If the current page >= $max then show link to 1st page -->
    <?php if($paging_info['curr_page'] >= $max) { ?>
		<li class="page-item"><a class="page-link" onclick="return changePageNo(1)">1</a></li>..

    <?php } ?>

    <!-- Loop though max number of pages shown and show links either side equal to $max / 2 -->
    <?php for($i = $sp; $i <= ($sp + $max -1);$i++) { ?>

        <?php
            if($i > $paging_info['pages'])
                continue;
        ?>

        <?php if($paging_info['curr_page'] == $i) { ?>
        	<li class="page-item active"><a class="page-link"><?php echo $i; ?></a></li>
        <?php } else { ?>
        	<li class="page-item"><a class="page-link" onclick="return changePageNo(<?php echo $i; ?>)"><?php echo $i; ?></a></li>
        <?php } ?>

    <?php } ?>


    <!-- If the current page is less than say the last page minus $max pages divided by 2-->
    <?php if($paging_info['curr_page'] < ($paging_info['pages'] - floor($max / 2))) { ?>

        ..
    	<li class="page-item"><a class="page-link" onclick="return changePageNo(<?php echo $paging_info['pages']; ?>)"><?php echo $paging_info['pages']; ?></a></li>
    <?php } ?>

    <!-- Show last two pages if we're not near them -->
    <?php if($paging_info['curr_page'] < $paging_info['pages']) { ?>

        <li class="page-item"><a class="page-link" onclick="return changePageNo(<?php echo ($paging_info['curr_page'] + 1); ?>)">Next</a></li>

        <li class="page-item"><a class="page-link" onclick="return changePageNo(<?php echo $paging_info['pages']; ?>)">Last</a></li>

    <?php } ?>









































</ul>