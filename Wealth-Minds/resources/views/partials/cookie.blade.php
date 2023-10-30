<div id="cookieConsent" class="cookie-consent">
    <p id="cookieMessage">
        We use cookies to enhance your browsing experience and provide personalized content. By clicking "Accept," you consent to the use of cookies on this website. You can learn more about our cookie policy and how to manage your preferences in our Cookie Policy.
    </p>
    <button onclick="acceptCookies()">ACCEPT</button>
    <button onclick="rejectCookies()">REJECT</button>
</div>

<script>
    // Function to check if the consent cookie exists and has the value "Accepted"
    function hasAcceptedCookies() {
        return getCookie('consent') === 'Accepted';
    }

    // Function to get the value of a cookie
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    // Function to hide the cookie consent banner
    function hideCookieBanner() {
        document.getElementById('cookieConsent').style.display = 'none';
    }

    // Check if the user has already accepted cookies
    if (!hasAcceptedCookies()) {
        // Display the consent banner
        document.getElementById('cookieConsent').style.display = 'block';
    }

    function acceptCookies() {
        // Send an AJAX request to the acceptCookies controller action
        fetch("{{ route('accept-cookies') }}")
            .then((response) => response.json())
            .then((data) => {
                // Update the banner message with the accepted message from the response
                document.getElementById('cookieMessage').textContent = data.message;
                // Hide the cookie consent banner
                hideCookieBanner();
            });
    }

    function rejectCookies() {
        // Send an AJAX request to the rejectCookies controller action
        fetch("{{ route('reject-cookies') }}")
            .then((response) => response.json())
            .then((data) => {
                // Update the banner message with the rejected message from the response
                document.getElementById('cookieMessage').textContent = data.message;
                // Hide the cookie consent banner
                hideCookieBanner();
            });
    }
</script>
