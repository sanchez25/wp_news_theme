window.addEventListener('load', function () {

    function toggleMenu(){
        document.querySelector('.menu_mobile').classList.toggle('show');
        document.querySelector('.tdc-header-wrap .overlay').classList.toggle('active');
    }

    let burgerBtn = document.querySelector('.burger img');
    let closeBtn = document.querySelector('.menu_mobile .close');
	let overlayBack = document.querySelector('.overlay');
                
	if (burgerBtn) {
		burgerBtn.addEventListener('click', toggleMenu);	
	}
	if (closeBtn) {
		closeBtn.addEventListener('click', toggleMenu);	
	}

	if (overlayBack) {
		overlayBack.addEventListener('click', function() {
			document.querySelector('.menu_mobile').classList.remove('show');
			this.classList.remove('active');
		})
	}
    
})








