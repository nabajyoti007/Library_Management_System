<?php 
  include 'config.php';
   
   if(isset($_POST['submit'])){
   
       $title = ($_POST['title']);
       $author = ($_POST['author']);
       $category = ($_POST['category']);
   $sql = "INSERT INTO books(bookTitle, author, categories)
                    values ('$title','$author','$category')";
   
       $query = mysqli_query($conn, $sql);
   
       if($query){
           echo "<script>alert('New Book has been added ');
                    location.href ='bookstable.php';
                    </script>";
       }
       else {
           echo "<script>alert('Book not added!');
                    </script>"; 
       }
   
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>AddBook</title> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand">Library Management System</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="bookstable.php">Booklist</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
<div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-left: 250px;margin-top: 20px">
   <div class="jumbotron login2 col-lg-10 col-md-11 col-sm-12 col-xs-12">
      <p class="page-header" style="text-align: center">ADD BOOK</p>
      <div class="container">
         <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addbook.php" method="post">
            <div class="form-group">
               <label for="Title" class="col-sm-2 control-label">BOOK TITLE</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" placeholder="Enter Title" id="password" required>
               </div>
            </div>
            <div class="form-group">
               <label for="Author" class="col-sm-2 control-label">AUTHOR</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="author" placeholder="Enter Author" id="password" required>
               </div>
            </div>
            <div class="form-group">
               <label for="Publisher" class="col-sm-2 control-label">CATEGORY</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="category" placeholder="Enter Category" id="password" required>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                  <button  name="submit" class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info">
                  ADD BOOK
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>