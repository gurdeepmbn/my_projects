<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.testimonial-slider {
    position: relative;
    width: 400px;
    margin: 0 auto;
    overflow: hidden;
}

.testimonial {
    display: none;
}

.testimonial.active {
    display: block;
}

.controls {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
}

.controls button {
    padding: 5px 10px;
    margin: 0 5px;
}

.controls button:focus {
    outline: none;
}


	</style>
</head>
<body>
<div class="testimonial-slider">
    <div class="testimonial">
        <p>"Testimonial 1 text here."</p>
        <span class="author">- John Doe</span>
    </div>
    <div class="testimonial">
        <p>"Testimonial 2 text here."</p>
        <span class="author">- Jane Smith</span>
    </div>
    <div class="testimonial">
        <p>"Testimonial 3 text here."</p>
        <span class="author">- Alice Johnson</span>
    </div>
    <div class="controls">
        <button class="prev-btn">&lt;</button>
        <button class="next-btn">&gt;</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const testimonials = document.querySelectorAll('.testimonial');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        let currentIndex = 0;

        function showTestimonial(index) {
            testimonials.forEach(testimonial => {
                testimonial.classList.remove('active');
            });
            testimonials[index].classList.add('active');
        }

        function nextTestimonial() {
            currentIndex = (currentIndex + 1) % testimonials.length;
            showTestimonial(currentIndex);
        }

        function prevTestimonial() {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            showTestimonial(currentIndex);
        }

        nextBtn.addEventListener('click', nextTestimonial);
        prevBtn.addEventListener('click', prevTestimonial);

        showTestimonial(currentIndex);
    });
</script>

</script>

</body>
</html>