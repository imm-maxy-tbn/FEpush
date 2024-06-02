document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".verification-code input");
    inputs.forEach((input, index) => {
        input.addEventListener("input", () => {
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && index > 0 && !input.value) {
                inputs[index - 1].focus();
            }
        });
    });

    inputs[0].focus();

    // Countdown Timer
    let timeLeft = 60;
    const countdownElement = document.getElementById("countdown");

    const countdownInterval = setInterval(() => {
        if (timeLeft <= 0) {
            clearInterval(countdownInterval);
            countdownElement.textContent = "0:00";
        } else {
            timeLeft--;
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            countdownElement.textContent = `${minutes}:${
                seconds < 10 ? "0" : ""
            }${seconds}`;
        }
    }, 1000);
});

// Call the updateCountdown function every second
let countdownInterval = setInterval(updateCountdown, 1000);

// Function to check if all verification code inputs are filled
function checkVerificationCode() {
    let inputs = document.querySelectorAll(".verification-code input");
    let filled = true;
    inputs.forEach((input) => {
        if (input.value === "") {
            filled = false;
        }
    });
    return filled;
}

// Function to handle the resend button click
document.querySelector(".btn-resend").addEventListener("click", function () {
    // Implement here the logic to resend the verification code
    // For now, let's just reset the countdown timer to 1 minute
    countdownTime = 60;
    updateCountdown();
});

// Function to update the countdown display
function updateCountdown() {
    // Your existing countdown logic
}

// Function to handle the input change event
document.querySelectorAll(".verification-code input").forEach((input) => {
    input.addEventListener("input", function () {
        if (checkVerificationCode()) {
            alert("Verifikasi berhasil!");
            // Implement here the redirection to the new page
            window.location.href = "imm4";
        }
    });
});

document.querySelector(".btn-resend").addEventListener("click", function () {
    // Implement here the logic to resend the verification code
    // For now, let's just show a notification
    alert("Kode OTP berhasil dikirim ke email Anda!");
});

document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".verification-code input");
    inputs.forEach((input, index) => {
        input.addEventListener("input", () => {
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && index > 0 && !input.value) {
                inputs[index - 1].focus();
            }
        });
    });

    inputs[0].focus();
});
