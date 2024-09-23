<?php 
include 'config.php';
   
   
   	
   if(isset($_POST['submit'])){
   	$studentId = trim($_POST['studentID']);
   	$bdate = trim($_POST['borrowDate']);
   	$due = trim($_POST['dueDate']);
   	$bookId = trim($_POST['bookId']);
   
   	
   
   	$sql = "INSERT INTO borrow (studentId, bookId, borrowDate, returnDate) values('$studentId','$bookId', '$bdate', '$due')";
   	$query = mysqli_query($conn, $sql);
   
   	if($query){
   
   		echo "
   			<script type = 'text/javascript'>
            
                  alert ('Success');
                  document.write ('');
             
         </script>    ";
   			header("Location: borrowedbooks.php");
   
   
   	}
   	else {
   		echo "
   		<script>
   		alert('Unsuccessful');
   		</script>
   	";
   	}
   
   }
   	
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>BookList</title>
    
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
              <a type="button" class="btn btn-primary nav-link active" href="borrowedbooks.php">Borrowed Book List</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
   <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 30px">
      <div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
         <p class="page-header" style="text-align: center">LEND BOOK</p>
         <div class="container">
            <form class="form-horizontal" role="form" action="#" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="Book ID" class="col-sm-2 control-label">Book ID</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="bookId" id="bookId" value="<?php ?>">
                  </div>
               </div>
               <div class="form-group">
                  <label for="Student ID" class="col-sm-2 control-label">Student ID</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="studentID" value="<?php ?>">
                  </div>
               </div>
               <div class="form-group">
                  <label for="Borrow Date" class="col-sm-2 control-label">BORROW DATE</label>
                  <div class="col-sm-10">
                     <input type="date" class="form-control" name="borrowDate" id="brand">
                  </div>
               </div>
               <div class="form-group">
                  <label for="Password" class="col-sm-2 control-label">RETURN DATE</label>
                  <div class="col-sm-10" id="show_product">
                     <input type='date' class='form-control' name='dueDate'>
                  </div>
               </div>
               <div class="form-group ">
                  <div class="col-sm-offset-2 col-sm-10 ">
                     <button type="submit" class="btn btn-info col-lg-4 " name="submit">
                     Submit
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>