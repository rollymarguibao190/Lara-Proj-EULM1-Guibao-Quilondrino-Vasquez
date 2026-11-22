
document.addEventListener("DOMContentLoaded", function () {

    const contactForm = document.getElementById("contactForm");

    contactForm.addEventListener("submit", function (event) {

        event.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        const nameError = document.getElementById("nameError");
        const emailError = document.getElementById("emailError");
        const subjectError = document.getElementById("subjectError");
        const messageError = document.getElementById("messageError");
        const successMessage = document.getElementById("successMessage");

        nameError.textContent = "";
        emailError.textContent = "";
        subjectError.textContent = "";
        messageError.textContent = "";
        successMessage.textContent = "";

        let isValid = true;
        if (name === "") {
            nameError.textContent = "Please enter your name.";
            isValid = false;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === "") {
            emailError.textContent = "Please enter your email.";
            isValid = false;
        } else if (!emailPattern.test(email)) {
            emailError.textContent = "Please enter a valid email address.";
            isValid = false;
        }

        if (subject === "") {
            subjectError.textContent = "Please enter a subject.";
            isValid = false;
        }

        if (message === "") {
            messageError.textContent = "Please enter your message.";
            isValid = false;
        }

        if (isValid) {
            successMessage.textContent =
                "Thank you! Your message has been submitted successfully.";

            contactForm.reset();
        }

    });

});
