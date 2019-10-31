$(document).ready(function () {

   $(".nav__top-menu li.active").each(function (i) {
       document.querySelector('body').style.setProperty('--tab-width-' + (i + 1), $(this).width() + "px");
   });

   $(".nav__top-menu").each(function (i) {
       var that = this;

       $(that).on("click", ".nav__top-menu li", function () {
           $(that).find(".nav__top-menu li").removeClass("active");
           $(this).addClass("active");
           var ml = $(".nav__top-menu")[0].children[$(this).attr("data-index")].offsetLeft;
           document.querySelector('body').style.setProperty('--tab-width-', $(this).width() + "px");
           document.querySelector('body').style.setProperty('--tab-ml-', ml + "px");
       });

       $(this).on("mouseover", ".nav__top-menu li", function () {
         console.log('ola');
           var ml = $("nav__top-menu")[0].children[$(this).attr("data-index")].offsetLeft;
           document.querySelector('body').style.setProperty('--tab-width-', $(this).width() + "px");
           document.querySelector('body').style.setProperty('--tab-ml-', ml + "px");
       });


       $(this).on("mouseleave", ".nav__top-menu li", function () {
           var ml = $(".nav__top-menu")[0].children;
           $(ml).each(function () {
               if ($(this).hasClass("active")) {
                   ml = $(".nav__top-menu")[0].children[$(this).attr("data-index")].offsetLeft;
                   document.querySelector('body').style.setProperty('--tab-width-', $(this).width() + "px");
                   document.querySelector('body').style.setProperty('--tab-ml-', ml + "px");
               }
           });
       });

   })
});
/*END TAB ANIMATION*/

// timeline
function isScrolledIntoView(el){
	var $el = $(el);
	return ($el.offset().top + $el.outerHeight(true) <= $(window).scrollTop() + $(window).height()) && ($el.offset().top + $el.outerHeight(true) > $(window).scrollTop());
}

function isScrolledOutOfView(el){
	var $el = $(el);
	return ($el.offset().top >= $(window).scrollTop() + $(window).height()) || ($el.offset().top < $(window).scrollTop())  ;
}

function elementAnimation(el, fx){
	var $el = $(el);

	var setElsPositions = function(){
		$el.each(function(){
			$this = $(this);
			if(isScrolledIntoView($this)){
            let element = $this;
				element.addClass(fx);
			}else if(isScrolledOutOfView($this)){
				$this.removeClass(fx);
			}
		});
	}

	$(window).on('load scroll', function(){
		setElsPositions();
	});

	//setElsPositions();
}
