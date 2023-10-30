//JavaScript for Toggle Menu
var navlinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}
function hideMenu() {
    navLinks.style.right = "-200px";
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

    course.addEventListener("mouseover", function () {
        this.style.transform = "translateY(-15px)";
    });

    course.addEventListener("mouseout", function () {
        this.style.transform = "";
    });
}

function toggleCourseClass(element) {
    element.classList.toggle("change-color");
}

//Form
$(document).ready(function () {
    $("#searchForm").submit(function (event) {
        event.preventDefault();

        var duration = $("#durationInput").val();
        var price = $("#priceInput").val();

        $.ajax({
            url: "search.php",
            method: "POST",
            data: { duration: duration, price: price },
            success: function (response) {
                $("#searchResults").html(response);
            },
            error: function () {
                $("#searchResults").html("Error occurred.");
            },
        });
    });
});

//Login Form
$(document).ready(function () {
    const loginForm = "#loginForm";
    const loginBtn = "#loginBtn";
    const cancelBtn = "#cancelBtn";

    function submitloginForm() {
        alert("Form submitted successfull!");
    }
});
