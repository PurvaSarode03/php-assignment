<?php
include 'db.php';
session_start();



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
           <nav
            class="navbar navbar-expand-sm navbar-dark bg-black"
           >
            <div class="container">
                <a class="navbar-brand" href="#">Home</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            
                        </li>
                        
                       
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <a
                            name=""
                            id=""
                         class="btn btn-outline-success my-2 my-sm-0"
                            href="csv.php"
                            role="button"
                            >Generate CSV</a
                        >
                        
                    </form>
                </div>
            </div>
           </nav>
           
        </header>
        <main>


        
        <center><h1>DASHBOARD</h1></center>
        <h2>
    Welcome, <?php echo $_SESSION['name']; ?>
</h2>



        
<div
    class="container"
>
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">category</th>
                       <th scope="col">price</th>
                       <th scope="col">quantity</th>
                       <th scope="col">brand</th>
                       <th scope="col">description</th>
                       <th scope="col">update</th>
                       <th scope="col">delete</th>
                      

                </tr>
            </thead>
            <?php  
            $result=$con->query('select * from products');
          
            ?>
            <tbody>
                <?php  while($row=$result->fetch_assoc()){?>
                <tr class="">
                    <td scope="row"><?php  echo $row['product_id']?></td>
                    <td><?php  echo $row['product_name']?></td>
                  <td><?php  echo $row['category']?></td>
                <td><?php  echo $row['price']?></td>
                <td><?php  echo $row['quantity']?></td>
                <td><?php  echo $row['brand']?></td>
                <td><?php  echo $row['description']?></td>
                 <td><a
                        name=""
                        id=""
                        class="btn btn-success"
                         href="update.php?name=<?php echo $row['product_name'] ?>"
                        role="button"
                        
                        >Update</a
                       >
                       </td>
                       <td><a
                        name=""
                        id=""
                        class="btn btn-danger"
                        href="delete.php?id=<?php echo $row['product_id']?>"
                        role="button"
                      
                        >Delete</a
                       >
                       </td>

                </tr>
                
            </tbody>
           <?php } ?>
        </table>
    </div>
    
</div>
<center>
<a
    name=""
    id=""
    class="btn btn-primary"
    href="insert.php"
    role="button"
    >Insert</a
>


        
        
        
        </center>
        <br>
        <br>
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
