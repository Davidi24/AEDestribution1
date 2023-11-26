const formOpenBtn = document.querySelector("#form-open"),
    home = document.querySelector(".home"),
    formContainer = document.querySelector(".form_container"),
    formCloseBtn = document.querySelector(".form_close"),
    loginBtn = document.querySelector("#login"),
    pwShowHide = document.querySelectorAll(".pw_hide");
formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));
pwShowHide.forEach((icon) => {
    icon.addEventListener("click", () => {
        let getPwInput = icon.parentElement.querySelector("input");
        if (getPwInput.type === "password") {
            getPwInput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
            getPwInput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash");
        }
    });
});

var loginButton = document.getElementById("loginbutton");
loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    checkLogin();
});

function checkLogin() {
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();

    const loginData = {
        email: email,
        password: password,
    };

    fetch("/login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(loginData),
    })
        .then((response) => {
            if (response.ok) {
                return response.json();
            } else if (response.status === 401) {
                // Incorrect password
                return response.json();
            } else {
                // Handle other response status codes or errors
                throw new Error("An error occurred");
            }
        })
        .then((data) => {
            if (data.message != "Login successful") {
                var error = document.getElementById("error");
                error.innerHTML = data.message;
                console.log(data);
            } else {
                var routeUrl = "/index";
                window.location.href = routeUrl;
            }
        })
        .catch((error) => {
            console.error(error);
        });
}
