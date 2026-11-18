
document.addEventListener("DOMContentLoaded", function () {

    const contactForm = document.getElementById("contactForm");

    contactForm.addEventListener("submit", function (event) {

        event.preventDefault();

        // Get input values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        // Get error message elements
        const nameError = document.getElementById("nameError");
        const emailError = document.getElementById("emailError");
        const subjectError = document.getElementById("subjectError");
        const messageError = document.getElementById("messageError");
        const successMessage = document.getElementById("successMessage");

        // Clear previous errors
        nameError.textContent = "";
        emailError.textContent = "";
        subjectError.textContent = "";
        messageError.textContent = "";
        successMessage.textContent = "";

        let isValid = true;

        // Validate name
        if (name === "") {
            nameError.textContent = "Please enter your name.";
            isValid = false;
        }

        // Validate email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === "") {
            emailError.textContent = "Please enter your email.";
            isValid = false;
        } else if (!emailPattern.test(email)) {
            emailError.textContent = "Please enter a valid email address.";
            isValid = false;
        }

        // Validate subject
        if (subject === "") {
            subjectError.textContent = "Please enter a subject.";
            isValid = false;
        }

        // Validate message
        if (message === "") {
            messageError.textContent = "Please enter your message.";
            isValid = false;
        }

        // Show success message
        if (isValid) {
            successMessage.textContent =
                "Thank you! Your message has been submitted successfully.";

            contactForm.reset();
        }

    });

});
