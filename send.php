<?php
if (isset($_POST["submit"])) {
 $name           = $_POST['name'];
 $email          = $_POST['email'];
 $product        = $_POST['product'];
 $yamama           = $_POST['yamama'];
 $quantity        = $_POST['quantity'];
 header("location:https://api.whatsapp.com/send?phone=yamama&text=Name:%20$name%20%0DEmail:%20$email%20%0DProduct:%20$product%20%0DQuantity:%20$quantity");


 } else {
	echo "
        <script>
           window.location=history.go(-1);
        </script>

	";

 }
?>