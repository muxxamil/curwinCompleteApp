$(document).ready(function(){

	loadBlogList();
	loadBlogLeftAside();

});

function loadBlogLeftAside() {
	$.ajax({
	    url: 'ajax/blog-left-aside.tpl.php',
	    type: 'POST',
	    dataType: "html",
	    data: {
	    },
        success: function(data){
		    $('#blog-left-aside').html(data);
		}
	});
}

function resetPagination() {
	$("#pageNo").val(1);
}

function applyFilterOnResult(key, value) {
	resetPagination();
	var data = {};
	data[key] = value;
	loadBlogList(data);
}

function loadBlogList(data = {}) {
	var page = $("#pageNo").val();
	if(!page || page <= 0) {
		resetPagination();
	}

	data.page = page;
	
	$.ajax({
	    url: 'ajax/postsListing.tpl.php',
	    type: 'POST',
	    dataType: "html",
	    data: data,
        success: function(data){
		    $('#postsContainer').html(data);
		}
	});
}

function changePageNo(page) {
	if(!page || page <= 0) {
		resetPagination();
	}
	$("#pageNo").val(page);

	loadBlogList();
}