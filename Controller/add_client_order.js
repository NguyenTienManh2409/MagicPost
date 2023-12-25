
    document.addEventListener("DOMContentLoaded", function () {
        // Intercept the form submission
        document.querySelector("form").addEventListener("submit", function (event) {
            // Prevent the default form submission
            event.preventDefault();

            var formData = new FormData(this);


            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure it: POST-request for the URL /your-api-file.php
            

            // This will be called after the response is received
            xhr.onload = function () {
                if (xhr.status == 200) {
                    // Handle success response from the API
                    console.log("Success:", JSON.parse(xhr.responseText));
                } else {
                    // Handle error response from the API
                    console.log("Error:", xhr.responseText);
                }
            };
            xhr.open("POST", "backend/api/oder/new_oder.php", true);
            
            // Set the content type to JSON
            xhr.setRequestHeader("Content-Type", "application/json; charset=utf-8");

            // Convert the data to JSON and send the request
            xhr.send(JSON.stringify(formData));
            console.log(JSON.stringify(formData));
        });
    });

