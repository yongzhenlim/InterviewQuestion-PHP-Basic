// Run verification when the Submit button is clicked
document.getElementById("submitBtn").addEventListener("click", function () {

    const username = document.getElementById("username").value.trim();
    const message = document.getElementById("message");

    // Check whether the username input is empty
    if (username === "") {
        message.textContent = "Please enter a username.";
        message.style.color = "red";
        return;
    }

    // Send the username to info.php using AJAX
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "info.php", true);
    xhr.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
    );

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {

            if (xhr.status === 200) {
                const response = xhr.responseText.trim();

                message.textContent = response;

                // Change message colour based on PHP response
                if (response === "Verified") {
                    message.style.color = "green";
                } else {
                    message.style.color = "red";
                }
            } else {
                message.textContent = "Error";
                message.style.color = "red";
            }
        }
    };

    xhr.send("username=" + encodeURIComponent(username));
});