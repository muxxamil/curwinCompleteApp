$(document).ready(function(){

	loadBlogList();

});

function loadBlogList() {
	$.ajax({
	    url: 'controllers/ajax/tpl/postsListing.tpl.php',
	    type: 'POST',
	    dataType: "html",
	    data: {
	    },
        success: function(data){
		    $('#postsContainer').html(data);
		}
	});
}

function deletePostButtonClick(ids) {
	$('#deleteBlogPost').attr('data-ids', ids);
}

function deleteSelectedPostsButtonClick() {
	console.log(ids);
}

function deleteBlogPost() {
	$.ajax({
	    url: 'controllers/ajax/deletePost.php',
	    type: 'POST',
	    dataType: "json",
	    data: {
	    	ids: $('#deleteBlogPost').attr('data-ids')
	    },
        success: function(data){
		    if(data && data.status == 200) {
		    	loadBlogList();
		    	new PNotify({
					title: 'Success!',
					text: 'Operation has been successfully performed.',
					type: 'success'
				});
		    } else {
		    	new PNotify({
					title: 'Error!',
					text: 'Unable to perform operation.',
					type: 'error'
				});
		    }
		}
	});
}