const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "LFA_Daly" && password === "password123") {
        alert("You have successfully logged in.");
        location.assign("dashboard.html");
    } else if (username === "LFA_Daly" && password !== "password123"){
        alert("Your password is incorrect.");
    } else if (username !== "LFA_Daly" && password === "password123"){
        alert("Your username is incorrect.");
    } else {
        alert("Please enter vald credentials")
    }
})