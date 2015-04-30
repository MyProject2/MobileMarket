CloudZoom.quickStart();
$(function() {

    $('#slider').Thumbelina({
        $bwdBut: $('#slider .left'), // Selector to left button.
        $fwdBut: $('#slider .right') // Selector to right button.
    });
    /*
     Carousel initialization
     */
    $('.jcarousel')
        .jcarousel({
            // Options go here
        });

    /*
     Prev control initialization
     */
    $('.jcarousel-control-prev')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            // Options go here
            target: '-=1'
        });

    /*
     Next control initialization
     */
    $('.jcarousel-control-next')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            // Options go here
            target: '+=1'
        });

    $('.jcarousel-item')
        .jcarousel({
            // Options go here
        });
    $('.jcarousel-item-prev')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            // Options go here
            target: '-=1'
        });
    $('.jcarousel-item-next')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            // Options go here
            target: '+=1'
        });
})

