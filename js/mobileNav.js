document.addEventListener("DOMContentLoaded", () => {

    var mobileIcon = document.getElementById("mobileIcon")
    var mobileMenu = document.getElementById("mobileMenu")

    mobileIcon.addEventListener("click", function(){
        mobileMenu.style.display = "flex";
    });

});