let valueDisplays = document.querySelectorAll(".num");
let interval = 5000;

// console.log(valueDisplays);

valueDisplays.forEach((valueDisplays) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplays.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
        startValue += 1;
        valueDisplays.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});

// Swipper Carousel
var swiper = new Swiper(".centered-slide-carousel", {
    centeredSlides: true,
    paginationClickable: true,
    loop: true,
    spaceBetween: 30,
    slideToClickedSlide: true,
    pagination: {
        el: ".centered-slide-carousel .swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1920: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1028: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        990: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});
