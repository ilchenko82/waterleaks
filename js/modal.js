(() => {
	const refs = {
	  openModalBtn: document.querySelector("[data-modal-open]"),
	  openModalBtn2: document.querySelector("[footer-modal-open]"),
	  closeModalBtn: document.querySelector("[data-modal-close]"),
	  modal: document.querySelector("[data-modal]"),
	};

	refs.openModalBtn.addEventListener("click", toggleModal);
	refs.openModalBtn2.addEventListener("click", toggleModal);
	refs.closeModalBtn.addEventListener("click", toggleModal);

	function toggleModal() {
	  gtag_report_conversion();
	  refs.modal.classList.toggle("is-hidden");
	}

	// conv click
	var convs = document.querySelectorAll("[conv-click]");
	for(var i = 0; i < convs.length; i++) {
		convs[i].addEventListener("click", function() {
			gtag_report_conversion();
		});
	}

 })();
