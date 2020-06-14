var slideIndex = 1;

autoSlide();

function moveSlide(n) {
  showSlide((slideIndex += n));
}

function currentSlide(n) {
  showSlide((slideIndex = n));
}

function autoSlide() {
  //   var i;
  var slides = document.getElementsByClassName("slide");
  var circles = document.getElementsByClassName("circle");

  if (!slides) {
    return false;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < circles.length; i++) {
    circles[i].className = circles[i].className.replace(" active", "");
  }

  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  circles[slideIndex - 1].className += " active";
  setTimeout(autoSlide, 5000);
}

function showSlide(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  var circles = document.getElementsByClassName("circle");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < circles.length; i++) {
    circles[i].className = circles[i].className.replace(" active", "");
  }

  slides[slideIndex - 1].style.display = "block";
  circles[slideIndex - 1].className += " active";
}
