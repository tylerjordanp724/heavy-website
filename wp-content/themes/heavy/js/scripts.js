function header_scroll(){var e,t=0,i=$("header").outerHeight();$(window).scroll((function(){e=!0})),setInterval((function(){e&&(!function(){var e=$(this).scrollTop();if(Math.abs(t-e)<=5)return;e>t&&e>i?$("header").removeClass("nav-down").addClass("nav-up"):e+$(window).height()<$(document).height()&&$("header").removeClass("nav-up").addClass("nav-down");t=e}(),e=!1)}),250)}function careers(){var e=$(".career__title-list ul li");$first_nav_item=$(".career__title-list ul li:first"),$first_item=$(".career__desc-container:first"),max_height=0,$first_nav_item.addClass("active"),$first_nav_item.hasClass("active")&&(max_height+=$first_item.outerHeight(),$first_item.addClass("active"),$(".career__desc").css({height:max_height})),$(window).resize((function(){var e=$(".career__desc-container.active").outerHeight();$(".career__desc").css({height:e})})),e.click((function(){var e=$("#"+$(this).attr("data-title"));$curr_item_height=e.outerHeight(),$item_parent=$(".career__desc"),max_height=e.outerHeight(),$(".career__title-list ul li").removeClass("active"),$(".career__desc-container").removeClass("active"),e.addClass("active"),$(this).addClass("active"),$(".career__desc").css({height:max_height})}))}function case_study_caorusel(){$(".carousel .carousel__container").flickity()}function content_carousel(){$(".carousel--content, .post-block-carousel__inner").flickity({cellAlign:"center"})}function grid_sort(){var e=$(".grid-sort__wrapper").isotope({itemSelector:".grid-item",resize:!0,percentPosition:!0,masonry:{columnWidth:".grid-sizer"}});$(".btn--filter:first").addClass("active"),$(".btn--filter").on("click",(function(){var t=$(this).attr("data-filter");$(".btn--filter").removeClass("active"),$(this).addClass("active"),e.isotope({filter:t})}))}function gt_hover(){$(".left-col").hover((function(){$(this).toggleClass("active"),$(this).next().toggleClass("push-r")})),$(".right-col").hover((function(){$(this).toggleClass("active"),$(this).prev().toggleClass("push-l")}))}function modal_toggle(){var e=$(".btn--modal");$modal_close=$(".modal-window__close"),e.click((function(e){e.preventDefault();var t=$(this).attr("data-content");console.log(t),$("body").addClass("modal-open"),"video"===t?($(".modal-window-content--form").removeClass("active"),$(".modal-window-content--video").addClass("active")):"form"===t&&($(".modal-window-content--video").removeClass("active"),$(".modal-window-content--form").addClass("active"))})),$modal_close.click((function(){$("body").removeClass("modal-open")}))}$(document).ready((function(){header_scroll(),careers(),modal_toggle(),case_study_caorusel(),content_carousel(),grid_sort(),gt_hover()}));