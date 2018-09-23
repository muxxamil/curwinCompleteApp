<?php

	if(empty($_GET["id"])) {
		echo "No Data Found";die;
	}

	include_once('../admin/config/defaults.php');
	include_once('../admin/config/api_caller.php');
	include_once('../admin/controllers/Posts.cls.php');

	$params = ["id" => $_GET["id"]];
	
	$post_list 	= Posts::get_posts($params);

	if(empty($post_list['body']->rows)) {
		echo "No Data Found";die;
	}
	
	foreach ($post_list['body']->rows as $key => $value) {
		$postTags = array_map(function($element) {
		        return (!empty($element->Tag) && !empty($element->Tag->title)) ? $element->Tag->title : null ;
		    },
		    $value->TagsBlogPostsMappings
		);

?>

<article class="post post-large mt-5">
<?php
	if(!empty($value->Attachments)) {
?>
		<div class="post-image single">
			<img class="img-thumbnail" src="img/blog/<?php echo current($value->Attachments)->path; ?>" alt="">
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
		<p><?php echo $value->preDetail; ?></p>
	</div>
<?php
	if(!empty($value->videoUrl)) {
?>
	<div class="post-video">
		<iframe src="<?php echo $value->videoUrl; ?>" width="830" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
<?php
	}
?>

	<div class="post-content">

		<p><?php echo $value->postDetail; ?></p>

<?php
	if(!empty($value->Comments)) {
?>
		<div class="post-block post-comments clearfix">
			<h3 class="heading-primary"><i class="fas fa-comments"></i>Comments (<?php echo count($value->Comments); ?>)</h3>

			<ul class="comments">
<?php
				foreach ($value->Comments as $commentArrIndex => $parentCommentSingleObject) {
?>
					<li>
						<div class="comment">
							<div class="img-thumbnail d-none d-sm-block">
								<img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
							</div>
							<div class="comment-block">
								<div class="comment-arrow"></div>
								<span class="comment-by">
									<strong><?php echo $parentCommentSingleObject->AddedBy->name; ?></strong>
									<span class="float-right">
										<span> <a data-toggle="modal" onclick="addCommentModal(this)" data-againstType = "blog" data-againstId = "<?php echo $parentCommentSingleObject->id; ?>" data-target="#addCommentModal"><i class="fas fa-reply"></i> Reply</a></span>
									</span>
								</span>
								<p><?php echo $parentCommentSingleObject->comment; ?></p>
								<span class="date float-right"><?php echo date_format(date_create($parentCommentSingleObject->createdAt), 'F d, Y \a\\t g:i a'); ?></span>
							</div>
						</div>

<?php
	if(!empty($parentCommentSingleObject->CommentsAgainstComment))
	{
?>
						<ul class="comments reply">
<?php
							foreach ($parentCommentSingleObject->CommentsAgainstComment as $childCommentsArrIndex => $childCommentSingleObj) {
?>
								<li>
									<div class="comment">
										<div class="img-thumbnail d-none d-sm-block">
											<img class="avatar" alt="" src="img/avatars/avatar-3.jpg">
										</div>
										<div class="comment-block">
											<div class="comment-arrow"></div>
											<span class="comment-by">
												<strong><?php echo $childCommentSingleObj->AddedBy->name; ?></strong>
												<span class="float-right">
													<span> <a data-toggle="modal" onclick="addCommentModal(this)" data-againstType = "comment" data-againstId = "<?php echo $childCommentSingleObj->id; ?>" data-target="#addCommentModal"><i class="fas fa-reply"></i> Reply</a></span>
												</span>
											</span>
											<p><?php echo $childCommentSingleObj->comment; ?></p>
											<span class="date float-right"><?php echo date_format(date_create($childCommentSingleObj->createdAt), 'F d, Y \a\\t g:i a'); ?></span>
										</div>
									</div>
								</li>
<?php
							}
?>
						</ul>
<?php
	}
?>
					</li>
<?php
				}
?>
			</ul>

		</div>
<?php
		}
	}
?>
	</div>
</article>







































</ul>