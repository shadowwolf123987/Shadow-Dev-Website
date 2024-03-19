
document.addEventListener("DOMContentLoaded", () => { //Wait until page is loaded before executing JS

    const content = document.getElementById("content")
    const mobileMenu = document.getElementById("mobileMenu")
    const mobileIcon = document.getElementById("mobileIcon")
    const bars = mobileIcon.querySelectorAll('.bar')

    function OpenMenu() {

        // Button Animation
        bars[1].style.opacity = '0'; //Middle Bar Hidden
        bars[0].style.transform = 'translateY(8px) rotate(45deg)'; //Top Bar moved up and rotated
        bars[2].style.transform = 'translateY(-8px) rotate(-45deg)'; //Bottom Bar moved down and rotated

        setTimeout(() => {
            //Menu Animation
            mobileMenu.style.display = "flex"; //Menu Shown
            content.style.display = "none"; // Content Hidden
            content.style.transform = "translateY(100%)"; //Content Positioned Down

            requestAnimationFrame(() => {
                mobileMenu.style.transform = "translateY(0)"; // Menu Slide down
            });

        }, 150); //Delay until Button Animation Ends
    }

    function CloseMenu() {
            //Button Animation
            bars.forEach(bar => {
                bar.style.opacity = ''; //Reset Every Bars Opacity
                bar.style.transform = ''; //Reset Every Bars Transform Position
            });

        setTimeout(() => {
            //Menu Animation
            content.style.display = "" //Content Shown
            document.body.style.overflow = "hidden" //Scroll Disabled
            requestAnimationFrame(() => {
                content.style.transform = "translateY(0)"; // Content Slide Up
            });
            mobileMenu.style.transform = "translateY(-100%)"; //Menu Slide Up
            setTimeout(() => {
                mobileMenu.style.display = "none"; //Menu Hidden
                document.body.style.overflow = "visible" //Scroll Enabled
            }, 650); //Wait for animation to end
        },150);
    }

    mobileIcon.addEventListener("click", function(){
        // Opening Menu
        if (window.getComputedStyle(mobileMenu).display == "none"){
            OpenMenu();
        }
        // Closing Menu 
        else{
            CloseMenu();
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 767) { //If Screen Size more than 767px then close mobile menu
            CloseMenu();
        }
    });
});