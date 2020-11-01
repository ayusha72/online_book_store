<?php
	session_start();
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "SELECT * FROM author ORDER BY Name";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Author not found ! Something wrong! check again";
		exit;
	}

	$title = "Authors";
	require "./template/header.php";
?>
	<h1 style="text-align: center";>List of Authors</h1><br>
	<ol>
	<?php 
		while($row = mysqli_fetch_assoc($result)){
			$count = 0; 
			$query = "SELECT book_author FROM books";
			$result2 = mysqli_query($conn, $query);
			if(!$result2){
				echo "Can't retrieve data " . mysqli_error($conn);
				exit;
			}
			while ($pubInBook = mysqli_fetch_assoc($result2)){
				if($pubInBook['book_author'] == $row['Name']){
					$count++;
				}
			}
	?>




 <div class="jumbotron" class="jumbotron text-white jumbotron-image shadow" style="background-image: url(https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);">
      <div class="container">
        <h3 style="color:white;">Name : <a href="bookperauthor.php?pubid=<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></a></h3>
        <p class="lead" style="color:white;">Address : </b><?php echo $row['Address']; ?></p>
        <p style="color:white;"> URL : <?php echo $row['Author_url']; ?></p>
      </div>
    </div>
	



	<?php } ?>
	</ol>
		
	
<?php
	mysqli_close($conn);
	require "./template/footer.php";
?>

