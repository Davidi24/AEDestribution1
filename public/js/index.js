function fetchData() {
    fetch("/faturat") // Replace with the correct API endpoint
        .then((response) => response.json())
        .then((data) => {
            const tableBody = document.getElementById("tablebody");
            data.faturat.forEach((fatura) => {
                const row = tableBody.insertRow();
                row.insertCell(0).textContent = fatura.id;
                row.insertCell(1).textContent = fatura.column1;
                row.insertCell(2).textContent = fatura.column2;
                row.insertCell(3).textContent = fatura.column3;
                row.insertCell(4).textContent = fatura.column4;
                row.insertCell(5).textContent = fatura.column5;
                row.insertCell(6).textContent = fatura.column6;
                row.insertCell(7).textContent = fatura.column7;
                row.insertCell(8).textContent = fatura.column8;
                row.insertCell(9).textContent = fatura.column9;
                row.insertCell(10).textContent = fatura.column10;
                row.insertCell(11).textContent = fatura.column11;
                row.insertCell(12).textContent = fatura.column12;
                row.insertCell(13).textContent = fatura.column13;
                row.insertCell(14).textContent = fatura.column14;
                row.insertCell(15).textContent = fatura.column15;
                row.insertCell(16).textContent = fatura.creation_date;

                // Add more cells as needed
            });

            $(document).ready(function () {
                $("#example").DataTable({
                    //disable sorting on last column
                    columnDefs: [
                        {
                            orderable: false,
                            targets: 5,
                        },
                    ],
                    language: {
                        //customize pagination prev and next buttons: use arrows instead of words
                        paginate: {
                            previous:
                                '<span class="fa fa-chevron-left"></span>',
                            next: '<span class="fa fa-chevron-right"></span>',
                        },
                        //customize number of elements to be displayed
                        lengthMenu:
                            'Display <select class="form-control input-sm">' +
                            '<option value="5">5</option>' +
                            '<option value="20">20</option>' +
                            '<option value="30">30</option>' +
                            '<option value="40">40</option>' +
                            '<option value="50">50</option>' +
                            '<option value="-1">All</option>' +
                            "</select> results",
                    },
                });
            });
        })
        .catch((error) => console.error("Error:", error));
}

window.onload = fetchData;

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
