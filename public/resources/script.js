// let valueDisplays = document.querySelectorAll(".num");
// let interval = 5000;

// // console.log(valueDisplays);

// valueDisplays.forEach((valueDisplays) => {
//     let startValue = 0;
//     let endValue = parseInt(valueDisplays.getAttribute("data-val"));
//     let duration = Math.floor(interval / endValue);
//     let counter = setInterval(function () {
//         startValue += 1;
//         valueDisplays.textContent = startValue;
//         if (startValue == endValue) {
//             clearInterval(counter);
//         }
//     }, duration);
// });

let valueDisplays = document.querySelectorAll(".num");
let interval = 5000;
let hasAnimated = false; // Flag untuk mencegah animasi berjalan lebih dari sekali

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    );
}

function animateCounters() {
    if (hasAnimated) return; // Cegah animasi berjalan lagi
    const section = document.querySelector("[data-aos]"); // Pastikan elemen dengan AOS

    if (isInViewport(section)) {
        hasAnimated = true; // Tandai bahwa animasi sudah berjalan

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function () {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    }
}

// Jalankan fungsi animateCounters ketika scroll
window.addEventListener("scroll", animateCounters);
