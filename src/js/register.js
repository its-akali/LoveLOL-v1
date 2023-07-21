import { checkIfEmpty } from "./login.js";

// Redirect to login page
const loginButton = document.querySelector("#loginButton");

loginButton.addEventListener("click", () => {
    console.log("a");
    if (window.location.pathname !== "/login.php") {
        window.location.pathname = "/login.php";
    }
});

// Disable register option button, as we're already there
const registerButton = document.querySelector("#registerButton");

if (window.location.pathname == "/register.php") {
    registerButton.disabled = true;
}

// Adds a key up event listener in every input to check in real-time if the field is empty or not
document.querySelectorAll(".labelAndInput").forEach((div) => {
    div.addEventListener("keyup", (e) => {
        if (!checkIfEmpty(e.target, e.currentTarget.querySelector("span"))) {
            // Validación con la bdd
        }
    });
});

// Prevent default submit and check field values first
document.querySelector("form").addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("sent!");
});
