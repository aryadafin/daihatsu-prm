// const $carousel = $('.main-carousel').flickity({
//     cellAlign: 'left',
//     contain: true,
//     prevNextButtons: false,
//     pageDots: false,
//     wrapAround: true,
//     autoPlay: 5000,
//     pauseAutoPlayOnHover: true
// });

// $('.button--previous').on('click', function () {
//     $carousel.flickity('previous', true);
// });

// $('.button--next').on('click', function () {
//     $carousel.flickity('next', true);
// });

// function splitHeroTitle() {
//     const titles = document.querySelectorAll('.hero-title');

//     titles.forEach(function (title) {
//         const text = title.textContent.trim();

//         if (!text) return;

//         const words = text.split(' ');

//         if (words.length <= 2) return;

//         const halfway = Math.ceil(words.length / 2);

//         const firstHalf = words.slice(0, halfway).join(' ');
//         const secondHalf = words.slice(halfway).join(' ');

//         title.innerHTML = firstHalf + '<br>' + secondHalf;
//     });
// }

// document.addEventListener('DOMContentLoaded', splitHeroTitle);