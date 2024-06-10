/** theta**/
/* (function(id) {
    var js, hjs = document.getElementsByTagName('script')[0];
    if (document.getElementById(id)) return;
    js = document.createElement('script');
    js.id = id;
    js.src = "https://theta-carousel.com/Scripts/boot.js";
    hjs.parentNode.insertBefore(js, hjs);
}('theta-carousel-config'));
// configurateur */
$('.swiper-wrapper').theta_carousel( {
    selectedIndex: 1,
    distance: 37,
    designedForWidth: 1077,
    designedForHeight: 1077,
    distanceInFallbackMode: 550,
    scaleY: 0,
    path: {
        settings: {
            shiftY: 97,
            shiftZ: -127,
            rotationAngleZY: 19,
            a: 433,
            b: 135,
            endless: true
        },
        type: 'ellipse'
    },
    perspective: 956,
    sensitivity: 0.2,
    fadeAway: true,
    fadeAwayBezierPoints: {
        p1: {
            x: 0,
            y: 100
        },
        p2: {
            x: 41,
            y: 67
        },
        p3: {
            x: 45,
            y: 67
        },
        p4: {
            x: 100,
            y: 33
        }
    },
    rotation: true,
    rotationBezierPoints: {
        p1: {
            x: 0,
            y: 0
        },
        p2: {
            x: 50,
            y: 0
        },
        p3: {
            x: 50,
            y: 0
        },
        p4: {
            x: 100,
            y: 0
        }
    },
    sizeAdjustment: true,
    sizeAdjustmentNumberOfConfigurableElements: 4,
    sizeAdjustmentBezierPoints: {
        p1: {
            x: 0,
            y: 100
        },
        p2: {
            x: 1,
            y: 61
        },
        p3: {
            x: 5,
            y: 72
        },
        p4: {
            x: 100,
            y: 72
        }
    }
}).on('motionEnd change', function() {
    changeMetadata()
})
;

$('#btn-prev').click(function(){
    $('.swiper-wrapper').theta_carousel('moveBack');
})

$('#btn-next').click(function(){
    $('.swiper-wrapper').theta_carousel('moveForward');
})
const changeMetadata = (item) => {

    //const index = item.realIndex;

    const $currentSLide = $('.theta-current-item');
    console.log($currentSLide)
    $('#bottles-collection-title').text($currentSLide.data("title"))
    $('#bottles-collection-category').text($currentSLide.data("category"))
}

changeMetadata()
/* swiperjs
const changeMetadata = (item) => {

    const index = item.realIndex;

    const $currentSLide = $('.swiper-slide-active');
    console.log($currentSLide)
    $('#bottles-collection-title').text($currentSLide.data("title"))
    $('#bottles-collection-category').text($currentSLide.data("category"))
}

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop:true,
    initialSlide: 1,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 350,
        modifier: 1,
        slideShadows: true,
    },
    autoplay:{

        delay:3000,
        disableOnInteraction:true,
    },
    on: {
        init: function (item) {
            changeMetadata(item)
            item.slidePrev();
        },
    },

});

$('#btn-prev').click(function(){
    swiper.slidePrev();
})

$('#btn-next').click(function(){
    swiper.slideNext();
})
swiper.on('slideChangeTransitionEnd', function (item) {
    changeMetadata(item)
});
*/