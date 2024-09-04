<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <style>
    .testimonial-slider {
  background-color: #5072a7;
  /*padding: 2em 2em 3em;*/
}
.testimonial-title {
  color: #fff;
}
.testimonial-title h2 {
  padding-left: 0.2em;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  height: 100%;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #fff;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  top: 60%;
  transform: translateY(-50%);
}

@media (min-width: 576px) {
  .carousel-item {
    margin-right: 0;
    flex: 0 0 50%;
    display: block;
  }
  .carousel-inner {
    display: flex;
  }
}
@media (min-width: 768px) {
  .carousel-inner {
    padding: 1em;
  }
  .carousel-control-prev,
  .carousel-control-next {
    opacity: 1;
    position: absolute;
    left: 1em;
    top: 90%;
    transform: translateY(-50%);
  }
  .carousel-control-next {
    left: 5em;
  }
}

  </style>
</head>
<body>
<div class="testimonial-slider">
  <div id="carouselExampleControls" class="carousel carousel-dark">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="testimonial-title">
            <i class="bi bi-quote display-1"></i>
            <h2 class="fw-bold display-6">What our customers say</h2>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="col-md-8">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 1</h5>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-2-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-3-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-4-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 4</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-5-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 5</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-6-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 6</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<p class="mt-2 text-center">Get a step-by-step written explanation here: <a href="https://codingyaar.com/bootstrap-5-testimonial-slider" target="_blank">Bootstrap 5 Testimonial Carousel Slider</a> </p>

<p class="mt-2 text-center">Get a step-by-step video explanation here: <a href="https://youtu.be/caNQ-1RTef4" target="_blank">Bootstrap 5 Testimonial Carousel Slider</a> </p>
<script>
  var multipleCardCarousel = document.querySelector("#carouselExampleControls");

if (window.matchMedia("(min-width: 576px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 3) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}

  </script>
</body>
</html>