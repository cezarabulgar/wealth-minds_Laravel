//JavaScript for Toggle Menu
  var navlinks = document.getElementById("navLinks");

  function showMenu(){
    navLinks.style.right ="0";
  }
  function hideMenu(){
    navLinks.style.right ="-200px";
  }

function changeBackgroundColor() {
  var colorInput = document.getElementById("colorInput");
  var color = colorInput.value;
  document.body.style.backgroundColor = color;
}

// Get all elements with class name "icon"
const courses = document.getElementsByClassName("course");

for (let i = 0; i < courses.length; i++) {
  const course = courses[i];

  course.addEventListener("mouseover", function() {
    this.style.transform = "translateY(-15px)";
  });

  course.addEventListener("mouseout", function() {
    this.style.transform = "";
  });
}

function toggleCourseClass(element) {
  element.classList.toggle("change-color");
}


//Display the cookie consent banner
function showCookieConsent() {
  document.getElementById('cookieConsent').style.display = 'block';
  }

// Dismiss the cookie consent banner
function dismissCookieConsent() {
  document.getElementById('cookieConsent').style.display = 'none';
  }

// Event for the page load event
  window.onload = function() {
   showCookieConsent();
  };



const carousel = document.getElementById("testimonialCarousel");
const cards = carousel.getElementsByClassName("card");
const indicators = carousel.getElementsByClassName("carousel-indicators")[0].getElementsByTagName("li");

let slideIndex = 0;

// // Function to show the current slide and update indicators
function showSlide() {
  for (let i = 0; i < cards.length; i++) {
    cards[i].classList.remove("active");
    indicators[i].classList.remove("active");
  }

  cards[slideIndex].classList.add("active");
  indicators[slideIndex].classList.add("active");
}

// // Function to move to the next slide
function nextSlide() {
  if (slideIndex === cards.length - 1) {
    slideIndex = 0;
  } else {
    slideIndex++;
  }
  showSlide();
}

// // Function to move to the previous slide
function prevSlide() {
  if (slideIndex === 0) {
    slideIndex = cards.length - 1;
  } else {
    slideIndex--;
  }
  showSlide();
}

// // Function to handle click on carousel indicators
function indicatorClick(index) {
  slideIndex = index;
  showSlide();
}

$(document).ready(function() {
  $('#searchForm').submit(function(event) {
    event.preventDefault();

    var duration = $('#durationInput').val();
    var price = $('#priceInput').val();

    $.ajax({
      url: 'search.php',
      method: 'POST',
      data: { duration: duration, price: price },
      success: function(response) {
        $('#searchResults').html(response);
      },
      error: function() {
        $('#searchResults').html('Error occurred.');
      }
    });
  });
});