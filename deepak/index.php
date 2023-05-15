<?php include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
             <form action="mng.php"method="POST">
             <div class="card">
               <img src="corsel/gallery2.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">DISH 3</h5>
                  <p class="card-text">1$</p>
                  <button type="submit"name="Add_To_Cart"class="btn btn-info">Add To Cart</button>
                  <input type="hidden"name="Item_name"value="Room 1">
                  <input type="hidden"name="Price"value="1000">
                </div>
             </div>
            </form>
        </div>
        <div class="col-lg-3">
             <form action="mng.php"method="POST">
             <div class="card border-radius:10px">
               <img src="corsel/gallery3.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">DISH 4</h5>
                  <p class="card-text">1$</p>
                  <button type="submit"name="Add_To_Cart"class="btn btn-info">Add To Cart</button>
                  <input type="hidden"name="Item_name"value="Room 1">
                  <input type="hidden"name="Price"value="1500">
                </div>
             </div>
            </form>
        </div>
        <div class="col-lg-3">
             <form action="mng.php"method="POST">
             <div class="card">
               <img src="corsel/gallery4.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">DISH 1</h5>
                  <p class="card-text">1$</p>
                  <button type="submit"name="Add_To_Cart"class="btn btn-info">Add To Cart</button>
                  <input type="hidden"name="Item_name"value="Room 1">
                  <input type="hidden"name="Price"value="2000">
                </div>
             </div>
            </form>
        </div>
        <div class="col-lg-3">
             <form action="mng.php"method="POST">
             <div class="card">
               <img src="corsel/gallery6.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">DISH 2</h5>
                  <p class="card-text">1$</p>
                  <button type="submit"name="Add_To_Cart"class="btn btn-info">Add To Cart</button>
                  <input type="hidden"name="Item_name"value="Room 1">
                  <input type="hidden"name="Price"value="800">
                </div>
             </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>