
document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {

        var splashScreen = document.querySelector(".splash-screen");
        splashScreen.style.opacity = "0";
        setTimeout(function () {
            splashScreen.style.display = "none";


            window.location.href = "login_form.php";
        });
    }, 4000);
});