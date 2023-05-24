<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIMPLE CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      .main-container{
        width: 100%;
        height: 100vh;
      }
    </style>
</head>
<body>
    <div class="main-container d-flex justify-content-center align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <h1>LOGIN</h1>
            <label for="" class="mt-5">Username:</label>
            <input type="text" name="" id="user" class="form-control" placeholder="Enter Username" style="border: 1px solid black; width: 50%">
            <label for="" class="mt-5">Password:</label>
            <input type="password" name="" id="pass" class="form-control" placeholder="Enter Password" style="border: 1px solid black; width: 50%">
            <button type="submit" id="btn-login" class="btn btn-success mt-5">LOGIN</button>
        </div>
    </div>



<script>
    $("#btn-login").click(function (e) { 
        e.preventDefault();
        
        var user = $("#user").val();
        var pass = $("#pass").val();

        if(user != "admin" || pass != "admin123"){
            Swal.fire({
                icon: 'error',
                title: 'Wrong Username or Password!',
                showConfirmButton: false,
                timer: 1500
            })
        }else{
            Swal.fire({
                icon: 'success',
                title: 'Welcome!',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = "index";
            })
        }
    });
</script>

</body>
</html>