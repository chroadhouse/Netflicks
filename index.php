<?php include ('include/header.php')?>

<!--<br> </br>-->
<div class = floatContainer>
	<div class = container8>
		<header8> RECOMMENDED FOR YOU
 </header8>
</div>
</div>

<div class = floatContainer>
	<div class = container2>
		<header5> TOP TRENDING </header5> <!-- Headers for redirection to the top trending movies -->
	</div>
	<div class = container3>
		<header6> TOP RATED </header6>
	</div>
	<div class = container4>
		<header7> CHILDREN MOVIES </header7>
	</div>
</div>	

<!--original slideshow -->
<div class="slideshow-container"> <!-- Carousel containing images for the recommended movies -->

    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="https://images-na.ssl-images-amazon.com/images/I/A1i+4PNnr8L._RI_.jpg" style = "width:100%" width="253" height="395"> <!-- width="253" height="395" figure image proportions -->
        <div class="text"> Cellular </div>
    </div>
    

    <div class="mySlides fade">
        <div class="numbertext"> style="b"</div>3
         <img src="https://upload.wikimedia.org/wikipedia/en/0/05/Jack_Reacher_Never_Go_Back_poster.jpg" style = "width:100%" width="253" height="395"> 
        <div class="text"> Jack Reacher </div>
        </div>
    
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Black Panther </div>
    </div>


    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src ="https://publish.one37pm.net/wp-content/uploads/2020/05/spiderman-mobile.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Spiderman </div>
    </div>
    
    <a class="prev" onclick="plusSlidesTopRated(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopRated(1)">&#10095;</a>
</div>

<!--Top trending slideshow -->

<div class="slideshowTopTrending-container"> <!-- Carousel containing images for the recommended movies -->

    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
        <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2011/9/21/1316599625809/Infomania-Jurassic-Park-007.jpg?width=300&quality=45&auto=format&fit=max&dpr=2&s=d01ed497895a42b8b460d92bcc840369" style = "width:100%" width="253" height="395"> <!-- width="253" height="395" figure image proportions -->
        <div class="text"> Jurassic Park </div>
    </div>
    

    <div class="mySlides2 fade">
        <div class="numbertext2"> style="b"</div>3
         <img src="https://upload.wikimedia.org/wikipedia/en/e/e1/MissionImpossiblePoster.jpg" style = "width:100%" width="253" height="395">   
        <div class="text"> Mission Impossible </div>
        </div>


    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
        <img src="https://upload.wikimedia.org/wikipedia/en/c/c2/Back_to_the_Future_Part_II.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Back to the Future </div>
    </div>

    <div class="mySlides2 fade">
        <div class="numbertext2"> </div>
        <img src ="https://lumiere-a.akamaihd.net/v1/images/star-wars-the-rise-of-skywalker-theatrical-poster-1000_ebc74357.jpeg?region=0%2C0%2C891%2C1372" style = "width:100%" width="253" height="395">
        <div class="text"> Star Wars </div>
    </div>

    <a class="prev" onclick="plusSlidesTopTrending(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopTrending(1)">&#10095;</a>

      <!--<link rel="stylesheet" href="css/behaviour.css" type="text/css"> -->
</div>

<!--Childrens Movies slideshow -->

<div class="slideshowChildrensMovies-container"> <!-- Carousel containing images for the recommended movies -->

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <img src="https://images-na.ssl-images-amazon.com/images/I/91OJO5jFyqL._RI_.jpg" style = "width:100%" width="253" height="395"> <!-- width="253" height="395" figure image proportions -->
        <div class="text"> Shrek </div>
    </div>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
         <img src="https://upload.wikimedia.org/wikipedia/en/7/7f/Madagascar2poster.jpg" style = "width:100%" width="253" height="395"> 
        <div class="text"> Madagascar 2 </div>
        </div>


    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <img src="https://images-na.ssl-images-amazon.com/images/I/91D6ISx-RaL._AC_SL1500_.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Hotel Transylvania </div>
    </div>

    <div class="mySlides3 fade">
        <div class="numbertext3"> </div>
        <img src ="https://m.media-amazon.com/images/M/MV5BODJkZTZhMWItMDI3Yy00ZWZlLTk4NjQtOTI1ZjU5NjBjZTVjXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg" style = "width:100%" width="253" height="395">
        <div class="text"> Kung Fu Panda </div>
    </div>

    <a class="prev" onclick="plusSlidesChildMovies(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesChildMovies(1)">&#10095;</a>

    
</div>

<br>

<!--Code for the orginal slideShow-->
<script>

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
      
</script>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
</div>

<!--Code for top trending below -->

<script>
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
    </script>

    <div style="text-align:right">
    <span class="dot" onclick="currentSlide2(1)"></span>
    <span class="dot" onclick="currentSlide2(2)"></span>
    <span class="dot" onclick="currentSlide2(3)"></span>
    <span class="dot" onclick="currentSlide2(4)"></span>
    </div>

    <!--Code for the children's slideShow-->
    <script>
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
    </script>

    <div style="text-align:left">
    <span class="dot" onclick="currentSlide3(1)"></span>
    <span class="dot" onclick="currentSlide3(2)"></span>
    <span class="dot" onclick="currentSlide3(3)"></span>
    <span class="dot" onclick="currentSlide3(4)"></span>
    </div>

<?php include ('include/footer.php') ?>
</body>
</html>