document.addEventListener('DOMContentLoaded',()=>{
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.querySelectorAll(".slide-item");

        for (i = 0; i < slides.length; i++) 
        {
        slides[i].style.opacity = "0";
        }

        slideIndex++;

        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.opacity = "1";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
})