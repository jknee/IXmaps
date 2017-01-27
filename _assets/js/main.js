(function($, window, document, undefined){

	$(function() {
		// Toggle open and close nav styles on click (mobile nav)
		$('#nav-toggle').click(function() {
			$('.nav > .nav-list').slideToggle();
			$(this).toggleClass('active');
			return false;
		});

		// Dropdown menus for desktop and mobile
		$('.has-dropdown > a').click(function() {
			var $this = $(this);
			var $parent = $this.parent();
			var $dropdown = $this.next('.nav-dropdown');
			if ( $dropdown.is(':visible') ) {
				$dropdown.slideUp(function() {
					$parent.removeClass('show-dropdown');
				});
			} else {
				$parent.addClass('show-dropdown');
				$dropdown.slideDown();
			}
			return false;
		});
	});

})(jQuery, window, document);

