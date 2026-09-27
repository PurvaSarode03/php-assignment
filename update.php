<?php
include 'db.php';
session_start();

if(isset($_GET['name'])){
    $name=$_GET['name'];

    $sql=$con->prepare('select * from products where product_name=?');
    $sql->bind_param('s',$name);
    $sql->execute();

    $result=$sql->get_result();
    $product=$result->fetch_assoc();
    
}



if($_SERVER['REQUEST_METHOD']==="POST"){
    $name=$_POST['name'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $quan=$_POST['quantity'];
    $brand=$_POST['brand'];
    $description=$_POST['description'];


    $sql=$con->prepare('update products set category=?,price=?,quantity=?,brand=?,description=? where product_name=?');
    $sql->bind_param('ssssss' ,$category,$price,$quan,$brand,$description,$name);
    if($sql->execute()){
        header('location:home.php');
        exit();
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
            <center><h1>Update product details</h1></center>


<div
    class="container col-5 shadow "
>
   <form action="" method="POST">

   <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input
        type="text"
        class="form-control"
        name="name"
        id=""
        aria-describedby="helpId"
        placeholder=""
        value="<?php echo $product['product_name'] ?>"
    />
   
   </div>
   <div class="mb-3">
    <label for="" class="form-label">Category</label>
    <input
        type="text"
        class="form-control"
        name="category"
        id=""
        value="<?php  echo $product['category']?>"
        aria-describedby="helpId"
        placeholder=""
    />
    
   </div>
   <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input
        type="text"
        class="form-control"
        name="price"
        value="<?php echo $product['price']?>"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
   
   </div>
   <div class="mb-3">
    <label for="" class="form-label">Quantity</label>
    <input
        type="text"
        class="form-control"
        name="quantity"
        value="<?php  echo $product['quantity']?>"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
   
   </div>
   <div class="mb-3">
    <label for="" class="form-label">Brand</label>
    <input
        type="text"
        class="form-control"
        name="brand"
        value="<?php  echo $product['brand']?>"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
   
   </div>
   <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input
        type="text"
        class="form-control"
        name="description"
        id=""
        value="<?php echo $product['description']?>"
        aria-describedby="helpId"
        placeholder=""
    />
    
   </div>
   <button
    type="submit"
    class="btn btn-primary"
   >
    Update
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
