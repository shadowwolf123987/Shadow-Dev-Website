document.addEventListener("DOMContentLoaded", () => {

    var mobileIcon = document.getElementById("mobileIcon")
    var mobileMenu = document.getElementById("mobileMenu")
    var content = document.getElementById("content")

    mobileIcon.addEventListener("click", function(){
        if (window.getComputedStyle(mobileMenu).display == "none"){
            mobileMenu.style.display = "flex";
            content.style.display = "none";
            content.style.transform = "translateY(100%)";
            requestAnimationFrame(() => {
                mobileMenu.style.transform = "translateY(0)"; // Slide down
            });
        }
        else{
            content.style.display = ""
            document.body.style.overflow = "hidden"
            requestAnimationFrame(() => {
                content.style.transform = "translateY(0)"; // Slide Up
            });
            mobileMenu.style.transform = "translateY(-100%)";
            setTimeout(() => {
                mobileMenu.style.display = "none";
                document.body.style.overflow = "visible"
            }, 650);
        }
    });
});