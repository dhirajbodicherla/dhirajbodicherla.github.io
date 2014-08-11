(function  () {
	$(document).ready(function(){
		var header = $('.masthead');
		$(this).scroll(function(e) {
			var blurRadius = $(this).scrollTop() * 0.05;

			header.css({
                "-webkit-filter": "blur("+blurRadius+"px)",
                "filter": "blur("+blurRadius+"px)"
            });

		})
	});
})();