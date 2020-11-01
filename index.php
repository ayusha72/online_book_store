<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
      <!-- Example row of columns -->
      
 <p class="lead text-center text-muted">Best Sellers</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
<br><br><br>
<p class="lead text-center text-muted">A note to all the book lovers !</p>
      <h4 style="text-align: center";><b>"When I have a little money, I buy books. And if any is left, I buy food and clothing." — Desiderius Erasmus — Those who share Erasmus's love of those curious bundles of paper bound together between hard or soft covers know exactly how he felt. These are the people who can spend hours browsing through a bookstore, completely oblivious not only to the passage of time but to everything else around them, the people for whom buying books is a necessity, not a luxury. A Passion for Books is a celebration of that love, a collection of sixty classic and contemporary essays, stories, lists, poems, quotations, and cartoons on the joys of reading, appreciating, and collecting books!!!</b></h4>
    <br> 
       
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>