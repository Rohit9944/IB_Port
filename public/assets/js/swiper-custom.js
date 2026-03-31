var swiper = new Swiper(".team-swiper", {
    loop: true,

    autoplay: {
        delay: 4800,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// process sticky box
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();

    var sectionTop = $(".operation-sec").offset().top;
    var sectionHeight = $(".operation-sec").outerHeight();

    var stickyHeight = $(".sticky-box").outerHeight();

    var sectionBottom = sectionTop + sectionHeight - stickyHeight;

    if (scrollTop > sectionTop && scrollTop < sectionBottom) {
        $(".sticky-box").removeClass("stop").addClass("sticky");
    } else if (scrollTop > sectionBottom) {
        $(".sticky-box").removeClass("sticky").addClass("stop");
    } else {
        $(".sticky-box").removeClass("sticky stop");
    }
});
