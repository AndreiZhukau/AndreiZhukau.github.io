$(function(){

	$('.menu__btn').on('click', function(){
			$('.menu__list').slideToggle();
	});
	$('.up').click(function() {
		$('body,html').animate({scrollTop:0},1000);
		return false;
	})
	$(function(){
		$('a[href*=#]').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
				&& location.hostname == this.hostname) {
						var $target = $(this.hash);
						$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
						if ($target.length) {
								var targetOffset = $target.offset().top;
								$('html,body').animate({scrollTop: targetOffset}, 1000);
								return false;
						}
				}
		});
});
});