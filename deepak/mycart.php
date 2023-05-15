<?php include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
   <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto text-center border rounded bg-light my-5">
            <h3>MY CART</h3>
        </div>
        <div class="col-lg-8 m-auto">
        <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial no.</th>
      <th scope="col">Item_name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
       $total=0;
       if(isset($_SESSION['cart']))
       {
       foreach($_SESSION['cart'] as $key => $value)
       {
        $sr=$key+1;
        $total=$total+$value['Price'];
        echo" 
        <tr>
          <td>$sr</td>
          <td>$value[Item_name]</td>
          <td>$value[Price]</td>
          <td><input class='text-center'type='number' value='$value[Quantity]' min='1' max='10'</td>
          <td>
          <form action='mng.php'method='POST'>
          <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
          <input type='hidden'name='Item_name'value='$value[Item_name]'>
          </form>
          </td>
        </tr>

        ";
       }
      }
    ?>
    
  </tbody>
</table>
</div> 

<div class="col-lg-3">
  <div class="border bg-light rounded p-4">
    <h4>Total:</h4>
    <h5 class="text-right"><?php echo $total ?></h5>
    <?php 
    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
    {
    ?>
    <form action="purchase.php"method="POST">
     <div class="form-group">
    <label>Name</label>
    <input type="text"name="fname"placeholder="Name" class="form-control"required>
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="tel"name="phone_no"placeholder="Phone no." class="form-control"required>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text"name="address" placeholder="Address" class="form-control"required>
  </div>

    <div class="form-check">
  <input class="form-check-input" type="radio" name="pay_mode"value="COD" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Cash On Delivery
  </label>
</div>
       <button class="btn btn-info btn-block"name="purchase">order now</button>

    </form>
    <?php
    }
    ?>
  </div>
</div>

    </div>
   </div> 
</body>
</html>