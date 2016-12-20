(function($){
	$(document).ready(function() {
		$('.view.view-projects.view-display-id-page .scroller_wrapper').prepend('<a class="browse prev" />');
		$('.view.view-projects.view-display-id-page .scroller_wrapper').append('<a class="browse next" />');
		$('.view.view-projects.view-display-id-page .scroller').each(function() {
			$(this).scrollable({
				items: 'items'
			});
		});
		$('body.blog_section #content article .field.field-name-field-pictures').find('.field-item:gt(0)').remove();
		$('.view:not(.view-pictures.view-display-id-block_1) .views-field.views-field-field-pictures .field-content, .field.field-name-field-pictures .field-items').cycle();
		window.setTimeout(function() {
			$('.skype_pnh_container').html('');
			$('.skype_pnh_print_container').removeClass('skype_pnh_print_container');
			$('.view.view-projects.view-display-id-page .scroller').each(function() {
				$(this).find('.views-row').equalHeights();
			});
			$('.panel_top article, .panel_2col article').equalHeights();
			if (!$('body').hasClass('page-portrait')) {
				$('.panel_bottom').equalHeights();
			}
			$('#footer .block').equalHeights();
			var h = $('.region.region-content').height();
			var pr = $('#panel_right .pane-content, #sidebar-second .section');
			if (pr.size()) {
				var ph = pr.height();
				if (ph < h) {
					if ($('body').hasClass('blog_section')) {
						pr.height(h);
					} else {
						pr.height(h - 41);
					}
				} else if (ph > h) {
					var hh = $('.panel_bottom').height();
					$('.panel_bottom').height(hh + ph - h + 41);
				}
			}
		}, 1000); 
	});
})(jQuery);

/**
 * Equal Heights Plugin
 * Equalize the heights of elements. Great for columns or any elements
 * that need to be the same size (floats, etc).
 * 
 * Version 1.0
 * Updated 12/109/2008
 *
 * Copyright (c) 2008 Rob Glazebrook (cssnewbie.com) 
 *
 * Usage: $(object).equalHeights([minHeight], [maxHeight]);
 * 
 * Example 1: $(".cols").equalHeights(); Sets all columns to the same height.
 * Example 2: $(".cols").equalHeights(400); Sets all cols to at least 400px tall.
 * Example 3: $(".cols").equalHeights(100,300); Cols are at least 100 but no more
 * than 300 pixels tall. Elements with too much content will gain a scrollbar.
 * 
 */

(function($) {
	$.fn.equalHeights = function(minHeight, maxHeight) {
		tallest = (minHeight) ? minHeight : 0;
		this.each(function() {
			if($(this).height() > tallest) {
				tallest = $(this).height();
			}
		});
		if((maxHeight) && tallest > maxHeight) tallest = maxHeight;
		return this.each(function() {
			$(this).height(tallest);
		});
	}
})(jQuery);