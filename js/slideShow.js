
//SlideIndex is the numerical postion of the item in the slide, which is set to 0
//showSlides is a function that has to be called so that the user can see the slides
//the slides and dots are shown either side of the slideshow so that the user is able to scroll through 
var slideIndex = 0;
showSlides();
var slides, dots;

//This function will scroll through the slides when the user clicks on the arrow on the right of the slideshow, for the top rated section it will scroll through the images
function plusSlidesTopRated(position) {
    slideIndex += position;
    //if the slideIndex goes beyond the length reset to 1, vice versa
    if (slideIndex > slides.length) {slideIndex = 1}
    else if(slideIndex < 1){slideIndex = slides.length}
    //scroll through the slides in the for loop. displaying each image one at a time
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    //Scroll through each of the slides. The slide that its currently on will be highlighted as active.
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}
//Shows the current slide
function currentSlide(index) {
    //if the slideIndex goes beyond the length reset to 1, vice versa
    if (index > slides.length) {index = 1}
    else if(index < 1){index = slides.length}
    for (i = 0; i < slides.length; i++) {
        //scroll through the slides in the for loop. displaying each image one at a time
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        //Scroll through each of the slides. The slide that its currently on will be highlighted as active.
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";  
    dots[index-1].className += " active";
}

//shows the slide for the user to see
function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides"); //displays the slides from the HTML file by calling the class name
    dots = document.getElementsByClassName("dot"); //displays the dots so the user can see each of the slides one at a time
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    //increments the count for the slide so each time a new slide is shown
    slideIndex++;
    console.log(slideIndex);
    //if the user goes beyond the length of the slide then it should take the user back to the first slide
    if (slideIndex > slides.length) {slideIndex = 1} 
    //shows which of the slides is currently active on the dots.
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
  
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
