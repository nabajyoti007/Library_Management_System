<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        /* Custom styles for the navbar brand */
        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: #00FF00; /* Replace #007bff with your desired color */
        }
    </style>
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid justify-content-center"> <!-- Center the container -->
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" height="40"> <!-- Replace path_to_your_logo.png with the actual path of your logo image -->
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn btn-primary nav-link active" href="register.php">Add New Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5 text-center"> <!-- Center the header -->
        <h4><strong>ADMIN DASHBOARD</strong></h4>
    </div>
    <div class="container-fluid d-flex justify-content-center mt-4"> <!-- Center the buttons -->
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="bookstable.php"><button class="btn btn-success col-12 button mb-2"><span class="glyphicon"></span> All Books</button></a>
            <a href="studentstable.php"><button class="btn btn-success col-12 button mb-2"><span class="glyphicon"></span> Students List</button></a>
            <a href="borrowedbooks.php"><button class="btn btn-success col-12 button mb-2"><span class="glyphicon"></span> Borrowed Books</button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
