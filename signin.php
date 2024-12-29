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
        <div class="div div-style bg-color-gray">
            <a href="index.php"><i class="fa fa-home a-color"></i></a>
        </div>
        <div class="div-form">
        <div class="div-signin">
                <p><b>Sign In</b></p>
                <form action="process.php" method="post">
                    <input class="input" type="email" id="email" name="email" placeholder="Email or Username" required >
                    <input class="input" type="password" id="password" name="password" placeholder="Enter your Password" required>
                    <input class="checkbox" type="checkbox"><label>Remember Me</label><br>
                    <input class="button bg-color-gold" type="submit" value="Login">
                </form>
            </div>
</div>
        <?php include 'footer.php'; ?>
    </body>
    <script src="script.js"></script>
</html>