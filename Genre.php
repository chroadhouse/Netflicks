<?php include ('include/header.php')?>
<?php include ('include/GenreFunction.php')?>


	<br> </br>

--><?php
    //populateGenre('Action');
    $arrayOne = array();
    $arrayTwo = array();
    $arrayThree = array();
    $arrayFour = array();

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
  <?php 
      $indexOne = 0;
    $indexTwo = 1;
    $indexThree = 2;
    $indexFour = 3;
    //test Arrays 
    $arrayOne = $arrayMovies[$indexOne];
    $arrayTwo = $arrayMovies[$indexTwo];
    $arrayThree = $arrayMovies[$indexThree];
    $arrayFour = $arrayMovies[$indexFour];
    //These can stay as they are for now 
  ?>
<div>
	<div class = container2>
		<?php echo '<header2> '.$genreTitle.' </header2>' ?><!-- Written with php -->
	</div>

	<div class="slideshow-container"> <!-- Carousel containing images for the recommended movies -->
    <!-- width="253" height="395" figure image proportions -->
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php
          //Get the first image from array one 
          //index order 0 -> Title. 1 -> Image Path 2 - > Over view
            $newhtmImgOne = file_get_html("https://www.google.com/search?q=".$arrayOne[1]."&tbm=isch");
            $resultImgSearchOne = $newhtmImgOne -> find('img',1) -> src;
            echo '<img src="'.$resultImgSearchOne.'" style = "width:100%" width="253" height="395">'; 
            echo'<div><header4>'.$arrayOne[0].'</header4></div>';
            echo'<div><p>'.$arrayOne[2].'</p></div>' ;
        ?>
    </div>
    

    <div class="mySlides fade">
        <div class="numbertext"></div>3
        <?php
          $newhtmImgTwo = file_get_html("https://www.google.com/search?q=".$arrayTwo[1]."&tbm=isch");
          $resultImgSearchTwo = $newhtmImgTwo -> find('img',1) -> src;
          echo '<img src="'.$resultImgSearchTwo.'" style = "width:100%" width="253" height="395">'; 
          echo'<div><header4>'.$arrayTwo[0].'</header4></div>';
          echo'<div><p>'.$arrayTwo[2].'</p></div>' ; 
        ?>    
        </div>
    
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php
          $newhtmImgThree = file_get_html("https://www.google.com/search?q=".$arrayThree[1]."&tbm=isch");
          $resultImgSearchThree = $newhtmImgThree -> find('img',1) -> src;
          echo '<img src="'.$resultImgSearchThree.'" style = "width:100%" width="253" height="395">'; 
          echo'<div><header4>'.$arrayThree[0].'</header4></div>';
          echo'<div><p>'.$arrayThree[2].'</p></div>' ; 
        ?>      
    </div>


    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php
          $newhtmImgFour = file_get_html("https://www.google.com/search?q=".$arrayFour[1]."&tbm=isch");
          $resultImgSearchFour = $newhtmImgFour -> find('img',1) -> src;
          echo '<img src="'.$resultImgSearchFour.'" style = "width:100%" width="253" height="395">'; 
          echo'<div><header4>'.$arrayFour[0].'</header4></div>';
          echo'<div><p>'.$arrayFour[2].'</p></div>' ; 
        ?>    
    </div>
    
    <a class="prev" onclick="plusSlidesTopRated(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopRated(1)">&#10095;</a>
    <script type="text/javascript" src="js/slideShow.js"></script>
</div>

	<form method="POST"><input type="submit" name="refresh" value="Refresh"></form>
  <?php  
  /*
    if(isset($_POST['refresh'])){
      $indexFour = $indexFour+4;
      if($indexFour < sizeof($arrayMovies)){
       $indexOne = $indexOne +4;
       $indexTwo = $indexTwo +4;
       $indexThree = $indexThree +4;
      }else{
       $indexOne = 0;
       $indexTwo = 1;
       $indexThree = 2;
       $indexFour = 3;
      }
    }
    else{
      $indexOne = 0;
      $indexTwo = 1;
      $indexThree = 2;
      $indexFour = 3;
    }
    */
  ?>
</div>


<?php include ('include/footer.php') ?>
</body>
</html>



