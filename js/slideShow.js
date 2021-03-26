alert('Connection to js is active');
var slideIndex = 0;
showSlides();
var slides, dots;

function plusSlidesTopRated(position) {
    slideIndex += position;
    if (slideIndex > slides.length) {slideIndex = 1}
    else if(slideIndex < 1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

function currentSlide(index) {
    if (index > slides.length) {index = 1}
    else if(index < 1){index = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";  
    dots[index-1].className += " active";
}

function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    console.log(slideIndex);
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    //dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
} 

    var slideIndexTopTrending = 0;
    showSlides02();
    var slidesTopTrending, dotsTopTrending;

    function plusSlidesTopTrending(position) {
    slideIndexTopTrending += position;
    if (slideIndexTopTrending > slidesTopTrending.length) {slideIndexTopTrending = 1}
    else if(slideIndexTopTrending < 1){slideIndexTopTrending = slidesTopTrending.length}
    for (i = 0; i < slidesTopTrending.length; i++) {
        slidesTopTrending[i].style.display = "none";  
        }
        for (i = 0; i < dotsTopTrending.length; i++) {
             dotsTopTrending[i].className = dotsTopTrending[i].className.replace(" active", "");
            
        }
        slidesTopTrending[slideIndexTopTrending-1].style.display = "block";  
        dotsTopTrending[slideIndexTopTrending-1].className += " active";
    }

function currentSlide2(index) {
    if (index > slidesTopTrending.length) {index = 1}
    else if(index < 1){index = slidesTopTrending.length}
    for (i = 0; i < slidesTopTrending.length; i++) {
        slidesTopTrending[i].style.display = "none";  
    }
    for (i = 0; i < dotsTopTrending.length; i++) {
        dotsTopTrending[i].className = dotsTopTrending[i].className.replace(" active", "");
    }
    slidesTopTrending[index-1].style.display = "block";  
    dotsTopTrending[index-1].className += " active";
}

function showSlides02() {
    var i;
    slidesTopTrending = document.getElementsByClassName("mySlides2");
    dotsTopTrending = document.getElementsByClassName("dot");
    for (i = 0; i < slidesTopTrending.length; i++) {
        slidesTopTrending[i].style.display = "none";  
    }
    slideIndexTopTrending++;
    if (slideIndexTopTrending> slidesTopTrending.length) {slideIndexTopTrending = 1}    
    for (i = 0; i < dots.length; i++) {
        dotsTopTrending[i].className = dotsTopTrending[i].className.replace(" active", "");
    }
    slidesTopTrending[slideIndexTopTrending-1].style.display = "block";  
    dotsTopTrending[slideIndexTopTrending-1].className += " active";
    setTimeout(showSlides02, 3000); // Change image every 3 seconds
} 


    var slideIndexChildrens = 0;
    showSlides03();
    var slidesChildren, dotsChildren;
    
function plusSlidesChildMovies(position) {
    slideIndexChildrens += position;
    if (slideIndexChildrens > slidesChildren.length) {slideIndexChildrens = 1}
    else if(slideIndexChildrens < 1){slideIndexChildrens = slidesChildren.length}
    for (i = 0; i < slidesChildren.length; i++) {
        slidesChildren[i].style.display = "none";  
    }
    for (i = 0; i < dotsChildren.length; i++) {
        dotsChildren[i].className = dotsChildren[i].className.replace(" active", "");
        
    }
    slidesChildren[slideIndexChildrens-1].style.display = "block";  
    dotsChildren[slideIndexChildrens-1].className += " active";
}
    
function currentSlide3(index) {
    if (index > slidesChildren.length) {index = 1}
    else if(index < 1){index = slidesChildren.length}
    for (i = 0; i < slidesChildren.length; i++) {
        slidesChildren[i].style.display = "none";  
    }
    for (i = 0; i < dotsChildren.length; i++) {
        dotsChildren[i].className = dotsChildren[i].className.replace(" active", "");
    }
    slidesChildren[index-1].style.display = "block";  
    dotsChildren[index-1].className += " active";
}
    
function showSlides03() {
    var i;
    slidesChildren = document.getElementsByClassName("mySlides3");
    dotsChildren = document.getElementsByClassName("dot");
    for (i = 0; i < slidesChildren.length; i++) {
        slidesChildren[i].style.display = "none";  
    }
    slideIndexChildrens++;
    if (slideIndexChildrens> slidesChildren.length) {slideIndexChildrens = 1}    
    for (i = 0; i < dots.length; i++) {
        dotsChildren[i].className = dotsChildren[i].className.replace(" active", "");
    }
    slidesChildren[slideIndexChildrens-1].style.display = "block";  
    dotsChildren[slideIndexChildrens-1].className += " active";
    setTimeout(showSlides03, 3000); // Change image every 3 seconds
}   
