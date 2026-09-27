<?php

include 'db.php';
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST['pname'];
    $category=$_POST['c'];
    $price=$_POST['price'];
    $quantity=$_POST['q'];
    $brand=$_POST['b'];
    $description=$_POST['d'];

    $sql=$con->prepare('insert into products (product_name,category,price,quantity,brand,description) values (?,?,?,?,?,?)');
    $sql->bind_param('ssssss',$name,$category,$price,$quantity,$brand,$description);
    if($sql->execute()){
        header('location:home.php');

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
            <center><h1>Insert product</h1></center>

        <div
            class="container"
        >
        <form action="" method="POST">
             <div class="mb-3">
                <label for="" class="form-label">Product name</label>
                <input
                    type="text"
                    class="form-control"
                    name="pname"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
             </div>
             <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <input
                    type="text"
                    class="form-control"
                    name="c"
                    id=""
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
                    name="q"
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
                    name="b"
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
                    name="d"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
             </div>
             <button
                type="submit"
                class="btn btn-primary"
             >
                Add product
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
