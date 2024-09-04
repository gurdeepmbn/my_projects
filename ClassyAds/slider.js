<script>
		var featuredAds = document.querySelector(".featured-ads");
		console.log('featuredAds');
		var slides = document.querySelectorAll(".grid-col-3");
		console.log(slides);
		var preBtn = document.querySelector(".pre-btn");
		console.log(preBtn);

		preBtn.addEventListener('click', preSlide);

		var nxtBtn = document.querySelector(".nxt-btn");
		console.log(nxtBtn);
		nxtBtn.addEventListener('click', nxtSlide);
		var slideIndex = 0;
		slides[slideIndex].classList.add('active');

		function preSlide()
		{	
				slides[slideIndex].classList.remove('active');
				slideIndex = (slideIndex === 0) ? slides.length - 1 : slideIndex - 1;
				console.log(slideIndex);
				slides[slideIndex].classList.add('active');
			/*	slides.style.display = 'block';*/
				/*featuredAds.style.transform = `translateX(-${slideIndex*5}%)`;*/
/*				featuredAds.style.overflow = 'visible';
*/			/*alert('pre');*/
		}
		function nxtSlide()
		{	
				slides[slideIndex].classList.remove('active');
				slideIndex = (slideIndex === slides.length - 1) ? 0 : slideIndex + 1;
				console.log(slideIndex);
				slides[slideIndex].classList.add('active');
				/*slides.style.display = 'block';*/
				/*featuredAds.style.transform = `translateX(-${slideIndex*5}%)`;*/
/*				featuredAds.style.overflow = 'visible';
*/			/*alert('pre');*/
		}
	</script>