
const changeMetadata = (item) => {

    const index = item.realIndex;

    const $currentSLide = $(item.slides[index]);
    $('#bottles-collection-title').text($currentSLide.data("title"))
    $('#bottles-collection-category').text($currentSLide.data("category"))
}

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop:true,
    initialSlide: 1,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 150,
        modifier: 2,
        slideShadows: false,
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
swiper.on('slideChange', function (item) {
    changeMetadata(item)
});