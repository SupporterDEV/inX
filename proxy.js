document.getElementById("url-form").addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent the form from submitting
    var url = document.getElementById("url").value;
    
    // You can do additional validation or URL sanitization here if needed

    window.location.href = "proxy.php?url=" + encodeURIComponent(url);  // Redirect to the proxy page
});
