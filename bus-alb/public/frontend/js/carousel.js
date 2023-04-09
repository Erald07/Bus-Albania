// const state = {};
// const carouselList = document.querySelector('.carousel__list');
// const carouselItems = document.querySelectorAll('.carousel__item');
// const elems = Array.from(carouselItems);

// carouselList.addEventListener('click', function (event) {
//     var newActive = event.target;
//     var isItem = newActive.closest('.carousel__item');

//     if (!isItem || newActive.classList.contains('carousel__item_active')) {
//     return;
//     };

//     update(newActive);
// });

// const update = function(newActive) {
//     const newActivePos = newActive.dataset.pos;

//     const current = elems.find((elem) => elem.dataset.pos == 0);
//     const prev = elems.find((elem) => elem.dataset.pos == -1);
//     const next = elems.find((elem) => elem.dataset.pos == 1);
//     const first = elems.find((elem) => elem.dataset.pos == -2);
//     const last = elems.find((elem) => elem.dataset.pos == 2);
    
//     current.classList.remove('carousel__item_active');
    
//     [current, prev, next, first, last].forEach(item => {
//         var itemPos = item.dataset.pos;

//         item.dataset.pos = getPos(itemPos, newActivePos)
//     });
// };

// const getPos = function (current, active) {
//     const diff = current - active;

//     if (Math.abs(current - active) > 2) {
//         return -current
//     }

//     return diff;
// }
const slider = document.querySelector(".items");
		const slides = document.querySelectorAll(".item");
		const button = document.querySelectorAll(".button");

		let current = 0;
		let prev = 4;
		let next = 1;

		for (let i = 0; i < button.length; i++) {
			button[i].addEventListener("click", () => i == 0 ? gotoPrev() : gotoNext());
		}

		const gotoPrev = () => current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);

		const gotoNext = () => current < 4 ? gotoNum(current + 1) : gotoNum(0);

		const gotoNum = number => {
			current = number;
			prev = current - 1;
			next = current + 1;

			for (let i = 0; i < slides.length; i++) {
				slides[i].classList.remove("active");
				slides[i].classList.remove("prev");
				slides[i].classList.remove("next");
			}

			if (next == 5) {
				next = 0;
			}

			if (prev == -1) {
				prev = 4;
			}

			slides[current].classList.add("active");
			slides[prev].classList.add("prev");
			slides[next].classList.add("next");
		}