document.addEventListener("DOMContentLoaded", () => {

    var mobileIcon = document.getElementById("mobileIcon")
    var mobileMenu = document.getElementById("mobileMenu")

    mobileIcon.addEventListener("click", function(){
        if (window.getComputedStyle(mobileMenu).display == "none"){
            mobileMenu.style.display = "flex";
            document.body.style.overflow = 'hidden';
            requestAnimationFrame(() => {
                mobileMenu.style.transform = "translateY(0)"; // Slide down
            });
        }
        else{
            mobileMenu.style.transform = "translateY(-100%)";
            setTimeout(() => {
                mobileMenu.style.display = "none";
            }, 650);
        }
    });
});