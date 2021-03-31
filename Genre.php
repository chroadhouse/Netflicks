<?php include ('include/header.php')?>
<?php include ('include/GenreFunction.php')?>


	<br> </br>
	<!--
  <a id="nav" class="home" href="#home">Genre</a>
  <a id="nav" href="Comedy">Horror</a> 
  <a id="nav" href="Comedy">Comedy</a> 
  <a id="nav" href="Romance">Romance</a>
  <a id="nav" href="Action">Action</a>
  <a id="nav" href="Adventure">Adventure</a>
  <a id="nav" href="Fantasy">Fantasy</a>
  <a id="nav" href="Animations">Animations</a>
  <a id="nav" href="Thriller">Thriller</a>
  <a id="nav" href="Drama">Drama</a>
  <a id="nav" href="Family">Family</a>
  <a id="nav" href="History">History</a>
  <a id="nav" href="War">War</a>
  <a id="nav" href="Western">Western</a>
  <a id="nav" href="Music">Musical</a>
  <a id="nav" href="Science">Science Fiction</a>
  <a id="nav" href="Crime">Crime</a>
  <a id="nav" href="Mystery">Mystery</a>
  <a id="nav" href="Foreign">Foreign</a>
  <a id="nav" href="Documentary">Documentary</a>
  <a id="nav" href="TV">Tv Movies</a>
--><?php
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	?>
	<div class ="genreNav">
	<form method="POST">
		<input type="submit" name="Action" value="Action">
		<input type="submit" name="Comedy" value="Comedy">
		<input type="submit" name="Romance" value="Romance">
		<input type="submit" name="Adventure" value="Adventure">
		<input type="submit" name="Fantasy" value="Fantasy">
		<input type="submit" name="Horror" value="Horror">
		<input type="submit" name="Animations" value="Animations">
		<input type="submit" name="Thriller" value="Thriller">
		<input type="submit" name="Drama" value="Drama">
		<input type="submit" name="Family" value="Family">
		<input type="submit" name="History" value="History">
		<input type="submit" name="War" value="War">
		<input type="submit" name="Western" value="Western">
		<input type="submit" name="Musical" value="Musical">
		<input type="submit" name="Science_Fiction" value="Science Fiction">
		<input type="submit" name="Crime" value="Crime">
		<input type="submit" name="Mystery" value="Mystery">
		<input type="submit" name="Foreign" value="Foreign">
		<input type="submit" name="Documentary" value="Documentary">
		<input type="submit" name="TV_Movies" value="TV Movies">
	</form>
	</div>

 <br> </br>

<div>
	<div class = container2>
		<?php echo "<header2 > Title </header2>" ?><!-- Written with php -->
	</div>

	<div class="slideshow-container"> <!-- Carousel containing images for the recommended movies -->

    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="" style = "width:100%" width="253" height="395"> <!-- width="253" height="395" figure image proportions -->
        <div><header4>Title</header4></div>
        <div><p>Overview</p></div>
    </div>
    

    <div class="mySlides fade">
        <div class="numbertext"> style="b"</div>3
         <img src="https://upload.wikimedia.org/wikipedia/en/0/05/Jack_Reacher_Never_Go_Back_poster.jpg" style = "width:100%" width="253" height="395"> 
        <div><header4>Title</header4></div>
        <div><p>Overview</p></div>       
        </div>
    
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="" style = "width:100%" width="253" height="395">
        <div><header4>Title</header4></div>
        <div><p>Overview</p></div>    
    </div>


    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src ="" style = "width:100%" width="253" height="395">
        <div><header4>Title</header4></div>
        <div><p>Overview</p></div>
    </div>
    
    <a class="prev" onclick="plusSlidesTopRated(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopRated(1)">&#10095;</a>
    <script type="text/javascript" src="js/slideShow.js"></script>
</div>

	<button>Refresh</button>
</div>


<?php include ('include/footer.php') ?>
</body>
</html>



