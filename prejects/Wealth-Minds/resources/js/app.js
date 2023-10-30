/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap";
import { createApp } from "vue";

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from "./components/ExampleComponent.vue";
app.component("example-component", ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount("#app");

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

//Display the cookie consent banner
function showCookieConsent() {
    document.getElementById("cookieConsent").style.display = "block";
}

// // Dismiss the cookie consent banner
function dismissCookieConsent() {
    document.getElementById("cookieConsent").style.display = "none";
}

// // Event for the page load event
window.onload = function () {
    showCookieConsent();
};

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
