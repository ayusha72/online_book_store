<?php
	session_start();
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "SELECT * FROM publisher ORDER BY publisherid";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty publisher ! Something wrong! check again";
		exit;
	}

	$title = "List Of Publishers";
	require "./template/header.php";
?>
	<h1 style="text-align: center";>List of Publishers</h1><br>
	<ol>
	<?php 
		while($row = mysqli_fetch_assoc($result)){
			$count = 0; 
			$query = "SELECT publisherid FROM books";
			$result2 = mysqli_query($conn, $query);
			if(!$result2){
				echo "Can't retrieve data " . mysqli_error($conn);
				exit;
			}
			while ($pubInBook = mysqli_fetch_assoc($result2)){
				if($pubInBook['publisherid'] == $row['publisherid']){
					$count++;
				}
			}
	?>
		
 <div class="jumbotron" class="jumbotron text-white jumbotron-image shadow" style="background-image: url(https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);">
      <div class="container">
        <h3 style="color:white;">Name : <a href="bookPerPub.php?pubid=<?php echo $row['publisherid']; ?>"><?php echo $row['publisher_name']; ?></a></h3>
        <p class="lead" style="color:white;">Number of available books of this publication : </b><?php echo $count; ?></p>
         <p class="lead" style="color:white;">Publication House Address : </b><?php echo $row['publisher_address']; ?></p>
          <p class="lead" style="color:white;">URL : </b><?php echo $row['Publisher_URL']; ?></a></p>
   
      </div>
    </div>


	<?php } ?>
	</ol>
		 <li>
			<p><b><a href="books.php">List of all books</a></b></p>
		</li>
	
<?php
	mysqli_close($conn);
	require "./template/footer.php";
?>