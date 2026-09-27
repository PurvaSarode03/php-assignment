
<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
$name=$_POST['name'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);

$sql=$con->prepare('insert into users (fname,lname,username,email,phone,city ,gender,password) values (?,?,?,?,?,?,?,?)');
$sql->bind_param('ssssssss',$name,$lname,$username,$email,$phone,$city,$gender,$pass);
if($sql->execute()){
    header('location:login.php');
}

}
?>



<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <center><h1>Registration Form</h1></center>

        <div
            class="container w-50"
        >
           <form action="" method="POST" col-5>
          
           <div class="mb-3">
            <label for="" class="form-label">first Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
           
           </div>
           
<div class="mb-3">
    <label for="" class="form-label">last name</label>
    <input
        type="text"
        class="form-control"
        name="lname"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input
            type="text"
            class="form-control"
            name="username"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
    </div>
    
    
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input
            type="email"
            class="form-control"
            name="email"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
       <div class="mb-3">
        <label for="" class="form-label">Phone No</label>
        <input
            type="text"
            class="form-control"
            name="phone"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
       <div class="mb-3">
        <label for="" class="form-label">City</label>
        <input
            type="text"
            class="form-control"
            name="city"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
        <div class="mb-3">
            <label for="" class="form-label">Gender</label>
            <select
                class="form-select form-select-md"
                name="gender"
                id=""
            >
                <option selected>Select one</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="others">Other</option>
            </select>
        </div>
        
       </div>
       
       </div>
       
    </div>
    
</div>
<div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input
        type="password"
        class="form-control"
        name="pass"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
    
</div>

<button
    type="submit"
    class="btn btn-primary"
>
  Register
</button>



           </form>
        </div>


        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
