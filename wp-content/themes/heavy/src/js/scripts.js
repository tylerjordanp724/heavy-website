function headerScroll() {
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();
    
    $(window).scroll(function(){
        didScroll = true;
    });

    setInterval(function(){
        if(didScroll) {
            hasScrolled();
            didScroll = false;
        }
    },250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        if(Math.abs(lastScrollTop - st) <= delta) {
            return;
        }

        // If current position > last position AND scrolled past navbar...
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            // If did not scroll past the document (possible on mac)...
            if(st + $(window).height() < $(document).height()) { 
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        lastScrollTop = st;
    }
}

function case_study_caorusel() {
    $('.carousel .carousel__container').flickity({
        cellAlign: 'right'
    });
} 

function gridSort() {
    // var $gridItem = $('.grid-item');
    // var $gridItemIndex;
    var $grid = $('.grid-sort__wrapper').isotope({
        itemSelector: '.grid-item',
        resize: true,
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-sizer'
        }
    });

    // $gridItem.each(function(index){
    //     var index = $(this).index();
    //     var count = $(this).length;
    //     var gridSize;
    //     var gridSizeMod;


    //     if(index === 1 || index === 10) {
    //         gridSize = 'xl';
    //         $(this).addClass('grid-item--'+gridSize+'');

    //         if(index === 10) {
    //             index = 1;
    //         }
    //     }

    //     if(index === 2 || index === 6 || index === 8) {
    //         gridSize = 'md';
    //         $(this).addClass('grid-item--'+gridSize+'');

    //         if(index === 2 || index === 8) {
    //             gridSizeMod = '2';
    //             $(this).addClass('grid-item--'+gridSize+'-'+gridSizeMod+'');
    //         }

    //         if(index === 6) {
    //             gridSizeMod = '6';
    //             $(this).addClass('grid-item--'+gridSize+'-'+gridSizeMod+'');
    //         }
    //     }

    //     if(index === 3 || index === 5 || index === 9) {
    //         gridSize = 'sm';
    //         $(this).addClass('grid-item--'+gridSize+'');
    //     }

    //     if(index === 4 || index === 7) {
    //         gridSize = 'lg';
    //         $(this).addClass('grid-item--'+gridSize+'');
    //     }
    // });


    $('.btn--filter:first').addClass('active');

    // console.log($('.grid-item').length);

    $('.btn--filter').on('click', function() {
        var filterValue = $(this).attr('data-filter');
        $('.btn--filter').removeClass('active');
        $(this).addClass('active');

        $grid.isotope({
            filter: filterValue
        });
    });

    // $grid.on('arrangeComplete', function(filteredItems) {

    // });
    

    
}

$(document).ready(function() {
    headerScroll();
    case_study_caorusel();
    gridSort();
});