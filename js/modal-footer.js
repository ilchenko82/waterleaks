(() => {
	const footerRefs = {
	  openModalBtn: document.querySelector("[footer-modal-open]"),
	  closeModalBtn: document.querySelector("[footer-modal-close]"),
	  footerModal: document.querySelector("[footer-modal]"),
	};
 
	footerRefs.openModalBtn.addEventListener("click", toggleModal);
	footerRefs.closeModalBtn.addEventListener("click", toggleModal);
 
	function toggleModal() {
		footerRefs.footerModal.classList.toggle("is-hidden");
	}
 })();