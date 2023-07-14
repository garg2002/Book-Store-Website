<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
</div>
<hr>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="https://media.istockphoto.com/id/1271459097/vector/stack-of-different-books-in-cartoon-style-isolated-on-white-background-stylish-design.jpg?s=612x612&w=0&k=20&c=zFM0_FHWjAZiZo9OmRrgh9Ua93wk19dMunmx4jPFOyE=" alt="hhh">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Generally,we sold our old books to the SCRAP DEALER after the use.Then those books remains unusable for reading purpose.So we are providing a platform to those students who are pursuing education and using a lot of books.Here they can sell their used books using this platform not even sell they can also buy others books in a very minimal price.This platform facilitates that students can upload their old books and decide their price.  </p>         
         <a href="contact.php" class="btn">contact us</a>
         
      </div>

   </div>

</section>




<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>