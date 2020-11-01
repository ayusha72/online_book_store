<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>
    <style>

body {
  background-image: url('book.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
     .jumbotron-image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}

   </style>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>

  <body style="background-color:Marsala;">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Author's Attic</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
              <li><a href="author_list.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>&nbsp; Author</a></li>
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
              <!-- link to contacts.php -->
              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Feedback</a></li>
              <!-- link to shopping cart -->
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" class="jumbotron text-white jumbotron-image shadow" style="background-image: url(data:image/jpeg;base64,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);">
      <div class="container">
        <h1 style="color:white;">Welcome to Author's Attic</h1>
        <p class="lead" style="color:white;">The store is full of books inhabited by spirits that come out of the pages at night!!</p>
        <p  style="color:white;">Let's dive into this magical world! </p>
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">