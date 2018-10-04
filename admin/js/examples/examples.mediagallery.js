(function($) {

	/*
	Thumbnail: Select
	*/
	$(document).on('change', '.mg-option input[type=checkbox]', function( ev ) {
		var wrapper = $(this).parents('.thumbnail');
		if($(this).is(':checked')) {
			wrapper.addClass('thumbnail-selected');
		} else {
			wrapper.removeClass('thumbnail-selected');
		}
	});

	$('.mg-option input[type=checkbox]:checked').trigger('change');

	/*
	Toolbar: Select All
	*/
	$(document).on('click', '#mgSelectAll', function( ev ) {
		ev.preventDefault();
		var $this = $(this),
			$label = $this.find('> span');
			$checks = $('.mg-option input[type=checkbox]');

		if($this.attr('data-all-selected')) {
			$this.removeAttr('data-all-selected');
			$checks.prop('checked', false).trigger('change');
			$label.html($label.data('all-text'));
		} else {
			$this.attr('data-all-selected', 'true');
			$checks.prop('checked', true).trigger('change');
			$label.html($label.data('none-text'));
		}
	});

	/*
	Image Preview: Lightbox
	*/
	$('.thumb-preview > a[href]').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
	});

	$(document).on('click.lightbox', '.thumb-preview .mg-zoom', function( ev ) {
		ev.preventDefault();
		$(this).closest('.thumb-preview').find('a.thumb-image').triggerHandler('click');
	});

	/*
	Thumnail: Dropdown Options
	*/
	$('.thumbnail .mg-toggle').parent()
		.on('show.bs.dropdown', function( ev ) {
			$(this).closest('.mg-thumb-options').css('overflow', 'visible');
		})
		.on('hidden.bs.dropdown', function( ev ) {
			$(this).closest('.mg-thumb-options').css('overflow', '');
		});

	$(document).on('mouseenter', '.thumbnail', function() {
		var toggle = $(this).find('.mg-toggle');
		if ( toggle.parent().hasClass('open') ) {
			toggle.dropdown('toggle');
		}
	});

}(jQuery));