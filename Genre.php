<?php include ('include/header.php')?>
<?php include ('include/GenreFunction.php')?>




<?php
    //populateGenre('Action');
    $arrayOne = array();
    $arrayTwo = array();
    $arrayThree = array();
    $arrayFour = array();
    if(isset($_POST['genreButton'])){

      $genreTitle = "Action";
      populateGenre('Action');

    }

    if(isset($_POST['refresh']))
    {
      $genreTitle = $_POST['genreTitle'];
      populateGenre($_POST['currentGenre']);
    }
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
		<input type="submit" name="Crime" value="Crime" id = "crime">
		<input type="submit" name="Mystery" value="Mystery" id = "mystery">
		<input type="submit" name="Foreign" value="Foreign" id = "foreign">
		<input type="submit" name="Documentary" value="Documentary" id = "documentary">
		<input type="submit" name="TV_Movies" value="TV Movies" id = "TvMovies">
	</form>
	</div>

 <br> </br>
  <?php 
    $indexOne = rand (0 , sizeof($arrayMovies) );
    $indexTwo = rand (0 , sizeof($arrayMovies) );
    $indexThree = rand (0 , sizeof($arrayMovies) );
    $indexFour = rand (0 , sizeof($arrayMovies) );
    //test Arrays 
    $arrayOne = $arrayMovies[$indexOne];
    $arrayTwo = $arrayMovies[$indexTwo];
    $arrayThree = $arrayMovies[$indexThree];
    $arrayFour = $arrayMovies[$indexFour];
    //These can stay as they are for now 
  ?>
<div>
	<div class = genreTitle>
		<?php echo '<header2> '.$genreTitle.' </header2>' ?><!-- Written with php -->
	</div>

	<div class="slideshow-container-genrePage"> <!-- Carousel containing images for the recommended movies -->
    <!-- width="253" height="395" figure image proportions -->
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php
          //Get the first image from array one 
          //index order 0 -> Title. 1 -> Image Path 2 - > Over view
            $newhtmImgOne = file_get_html("https://www.google.com/search?q=".$arrayOne[1]."&tbm=isch");
            $resultImgSearchOne = $newhtmImgOne -> find('img',1) -> src;
            echo '<img src="'.$resultImgSearchOne.'" style = "width:100%" width="253" height="395">';
            echo "<div><header4 style='color:white'> " .$arrayOne[0]." <header4></div>";
            echo "<div><p style='color:white'> " .$arrayOne[2]." </p></div>";
        ?>
    </div>
    

    <div class="mySlides fade">
        <div class="numbertext"></div>3
        <?php
          $newhtmImgTwo = file_get_html("https://www.google.com/search?q=".$arrayTwo[1]."&tbm=isch");
          $resultImgSearchTwo = $newhtmImgTwo -> find('img',1) -> src;
          echo '<img src="'.$resultImgSearchTwo.'" style = "width:100%" width="253" height="395">'; 
          echo "<div><header4 style='color:white'> " .$arrayTwo[0]." <header4></div>";
          echo "<div><p style='color:white'> " .$arrayTwo[2]." </p></div>";
        ?>    
        </div>
    
    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php
          $newhtmImgThree = file_get_html("https://www.google.com/search?q=".$arrayThree[1]."&tbm=isch");
          $resultImgSearchThree = $newhtmImgThree -> find('img',1) -> src;
          echo '<img src="'.$resultImgSearchThree.'" style = "width:100%" width="253" height="395">'; 
          echo "<div><header4 style='color:white'> " .$arrayThree[0]." <header4></div>";
          echo "<div><p style='color:white'> " .$arrayThree[2]." </p></div>";
        ?>      
    </div>


    <div class="mySlides fade">
        <div class="numbertext"> </div>
        <?php
          $newhtmImgFour = file_get_html("https://www.google.com/search?q=".$arrayFour[1]."&tbm=isch");
          $resultImgSearchFour = $newhtmImgFour -> find('img',1) -> src;
          echo '<img src="'.$resultImgSearchFour.'" style = "width:100%" width="253" height="395">'; 
          echo "<div><header4 style='color:white'> " .$arrayFour[0]." <header4></div>";
          echo "<div><p style='color:white'> " .$arrayFour[2]." </p></div>";
        ?>    
    </div>
    
    <a class="prev" onclick="plusSlidesTopRated(-1)">&#10094;</a>
    <a class="next" onclick="plusSlidesTopRated(1)">&#10095;</a>
    <script type="text/javascript" src="js/slideShow.js"></script>
</div>

<br></br>

	
	<?php
		echo '<form method="POST">
			<input type="submit" name="refresh" value="Refresh" id="refresh2">
			<input type = "hidden" value = "'.$arrayOne[3].'" name = "currentGenre"/>
      <input type = "hidden" value = '.$genreTitle.' name = "genreTitle"/>
			</form>';
		
	?>

<br></br>

</div>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

<?php include ('include/footer.php') ?>
</body>
</html>



