<?php
session_start();
$con=mysqli_connect("localhost","root","","deepak");

if(mysqli_connect_error())
{
echo"<script>
    alert('cannot connect with database');
    window.location.href='mycart.php';
</script>";
 exit();
}
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    if(isset($_POST['purchase']))
    {
      $query1="INSERT INTO `order_manager`(`fname`, `phone_no`, `address`, `pay_mode`) VALUES ('$_POST[fname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
      if(mysqli_query($con,$query1))
      {
        $Order_id=mysqli_insert_id($con);
        $query2="INSERT INTO `user_order`(`Order_id`, `Item_name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
        $stmt=mysqli_prepare($con,$query2);
        if($stmt)
        {
         mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_name,$Price,$Quantity);
         foreach($_SESSION['cart'] as $key =>$values)
         {
            $Item_name=$values['Item_name'];
            $Price=$values['Price'];
            $Quantity=$values['Quantity'];
            mysqli_stmt_execute($stmt);
        
         }
         unset($_SESSION['cart']);
         echo"<script>
         alert('Room Booked');
           window.location.href='index.php';
        </script>";  


        }
        else
        {
            echo"<script>
        alert('SQL Query prepared Error');
          window.location.href='mycart.php';
       </script>";  
        }
      }
     else
     {
        echo"<script>
        alert('SQL ERROR');
        window.location.href='mycart.php';
    </script>"; 
     }
    }
 }
?>