<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible"content="IE=edge">
     <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>Ecommerce Store By Vinod</title>

    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css link -->
    <link rel="stylesheet" href="style.css">



</head>
<body>

<div class="container-fluid bg-info p-0">
   <!-- First Child -->
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <img src="./images/logo.png" alt="logo" class="logo">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item text-light">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item text-light">
          <a class="nav-link active" aria-current="page" href="#">Products</a>
        </li>
        <li class="nav-item text-light">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item text-light">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"><sup>1</sup></i></a>
        </li>
        <li class="nav-item text-light">
          <a class="nav-link active" aria-current="page" href="#">Total Price: 100 /-</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

<!-- second child -->
<nav class="navbar navbar-expand-lg bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item text-light">
           <a class="nav-link active">Welcome Guest</a>
        </li>
        <li class="nav-item text-light">
           <a class="nav-link active">Logout</a>
        </li>
        
    </ul>
</nav>

<!-- Third Child -->

<div class="bg-light">
    <h3 class="text-center"> Hidden Store</h3>
    <p class="text-center">Communications Is At The Heart Of Our Store</p>    
</div>

<!-- Fourth Child -->

<div class="row">
    <div class="col-md-10">
        <!-- Products -->
     
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
            <img src="./images/logo1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add To Cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
            </div>
            </div>
            </div>
            <div class="col-md-4  mb-2">
            <div class="card">
            <img src="./images/logo2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add To Cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
            </div>
            </div>
            </div>
            <div class="col-md-4  mb-2">
            <div class="card">
            <img src="./images/logo5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add To Cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
            </div>
            </div>
            </div>
            <div class="col-md-4  mb-2">
            <div class="card">
            <img src="./images/logo6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add To Cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
            </div>
        </div>
    </div>

        <!-- Side nav bar -->

    <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center ">
            <li class="nav-item bg-info mb-1">
           <a href="#" class="bg-info "><h4></a>Delivery Brands</h4></a>
            </li>
            <li class="nav-item text-light">
           <a href="#" class="nav-link "></a>Brand1</a>
            </li>
            <li class="nav-item text-light">
           <a href="#" class="nav-link "></a>Brand2</a>
            </li>
            <li class="nav-item text-light">
           <a href="#" class="nav-link "></a>Brand3</a>
            </li>
            <li class="nav-item text-light">
           <a href="#" class="nav-link "></a>Brand4</a>
            </li>
            <li class="nav-item text-light mb-2">
           <a href="#" class="nav-link "></a>Brand5</a>
            </li>
            
        </ul>

        <ul class="navbar-nav me-auto text-center ">
            <li class="nav-item bg-info mb-2">
           <a href="#" class="bg-info "><h4></a>Delivery Brands</h4></a>
            </li>
            <li class="nav-item text-light text-light">
           <a href="#" class="nav-link "></a>Categories1</a>
            </li>
            <li class="nav-item text-light">
           <a href="#" class="nav-link "></a>Categories2</a>
            </li>
            <li class="nav-item text-light">
           <a href="#" class="nav-link "></a>Categories3</a>
            </li>
            <li class="nav-item text-light">
           <a href="#" class="nav-link "></a>Categories4</a>
            </li>
            <li class="nav-item text-light">
           <a href="#" class="nav-link "></a>Categories5</a>
            </li>           
        </ul>
      </div>
    </div>   
</div>







<!-- footer -->
<div class="text-center bg-info p-3">
    <p>All rights reserved Designed by Vinod @2022</p>
</div>

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>