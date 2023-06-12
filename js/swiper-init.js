
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
		slidesPerView: 1,
		breakpoints: {
			320: {
			  slidesPerView: 1,
			  spaceBetween: 20,
			},
			768: {
			  slidesPerView: 2,
			  spaceBetween: 30,
			},
			1100: {
			  slidesPerView: 3,
			  spaceBetween: 30,
			},
			
		 },
		 loop: true,
		 autoplay: {
			delay: 2000,
		 },



    });