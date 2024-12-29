<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Corano - Jewelry Shop eCommerce Bootstrap 5 Template</title>
        <link rel="stylesheet" href="css-signin.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="icon" href="sh.ico" type="image/x-icon">
        <link rel="stylesheet" href="css1.css">
        <link rel="stylesheet" href="assets/Css/cssweb.css">
          <link rel="stylesheet" href="assets/Css/fontawesome.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
       
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

       
    </head>
    <body>
    <?php include 'header.php'; ?>
<?php 
     if($_SERVER["REQUEST_METHOD"]=="POST") {
        $email=htmlspecialchars($_POST['email']);
        $password=htmlspecialchars($_POST['password']);
       
     }else{
        echo "Please Send Form";
     }
 ?>
   <div class="div div-style bg-color-gray">
        <a href="index.php"><i class="fa fa-home a-color i-space"></i></a><span class="color-gold"><?php echo $email ?></span>
    </div>
    <div class="div-img3"><img src="ax4.png"></div>
    <div class="div-img3"><img src="ax5.png"></div>
    <?php include 'footer.php'; ?>
    </body>
    <script src="script.js"></script>
</html>