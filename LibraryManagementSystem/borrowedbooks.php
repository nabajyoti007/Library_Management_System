<?php
  include 'config.php';
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>BorrowedBookList</title>
    
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
              <a type="button" class="btn btn-primary nav-link active" href="lendbook.php">Lend Book</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>






<div class="container">
   <div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">
      <span class="glyphicon glyphicon-book"></span>
      <strong>Currently Issued books to students</strong>
   </div>
</div>
<div class="container">
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>S.No</th>
               <th>Book Id</th>
               <th>Book Name</th>
               <th>Issue Date</th>
               <th>Student ID</th>
               <th>Actions</th>
            </tr>
         </thead>
         <?php	
            $sql = "SELECT * FROM books NATURAL JOIN borrow;"; 	
            
            $query = mysqli_query($conn, $sql);
            $counter =1;
            	while($row = mysqli_fetch_array($query)){
            		
            		?>
         <tbody>
            <tr>
               <td><?php echo $counter++; ?></td>
               <td><?php echo $row['bookId'];?></td>
               <td><?php echo $row['bookTitle'];?></td>
               <td><?php echo $row['borrowDate']; ?></td>
               <td><?php echo $row['studentId']; ?></td>
               <td>
                  <a href="returned.php?bookId=<?php echo $row['bookId']?>"> <button class="btn btn-info" data-toggle="modal" >Return</button></a>
               </td>
            </tr>
         </tbody>
         <?php }
            ?>
      </table>
      <br>	         
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>