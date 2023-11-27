(home = document.querySelector(".home1")),
    (formContainer = document.querySelector(".form_container")),
    (formCloseBtn = document.querySelector(".form_close")),
    (loginBtn = document.querySelector("#login")),
    (pwShowHide = document.querySelectorAll(".pw_hide"));

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

//it check if it is logeed in for the first time if not it close the tab so you can not change
// the password any more
//.......................................................................................//

checkIfIsLogin();

function checkIfIsLogin() {
    fetch("/CheckIfFirtsLogin", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
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
            console.log(data);
            if (data.message == "0") {
                home.classList.add("show");
            }
        })
        .catch((error) => {
            console.error(error);
        });
}

document.getElementById("loginbutton").addEventListener("click", function (e) {
    e.preventDefault();
    const passwordInput = document.getElementById("password");
    const repeatPasswordInput = document.getElementById("repeat_password");
    const errorDiv = document.getElementById("error");
    const password1 = passwordInput.value;
    const password2 = repeatPasswordInput.value;

    if (password1 === password2) {
        const loginData = {
            password: password1,
        };

        fetch("/changePassword", {
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
                console.log(data);
                if (data.message == "Password changed successfully") {
                    formCloseBtn.click();
                }
            })
            .catch((error) => {
                console.error(error);
            });
    } else {
        errorDiv.textContent = "Passwords do not match.";
    }
});

//....................................................................................//

var sidebarCollapse = document.getElementById("sidebarCollapse");
var rightContainer = document.querySelector(".right_container");
sidebarCollapse.style.zIndex = 10001111;
sidebarCollapse.addEventListener('click', function () {
  rightContainer.classList.toggle("active");
});
