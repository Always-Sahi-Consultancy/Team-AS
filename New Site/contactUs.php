<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/root.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/contactUs.css" rel="stylesheet">
    <link href="css/contactUs_mobile.css" rel="stylesheet">
    <link href="css/contactUs_tab.css" rel="stylesheet">
    <title>Always Sahi Academy | Contact Us</title>
</head>
<body>
    <?php 
        include './public/header.php'
    ?>
    <div class="contact">
        <form action="post" class="contact__form">
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="tel" placeholder="Phone Number" required>
            <input type="text" class="message" required>
            <input type="button" value="submit">
        </form>
        <div class="contact__info">
            <div class="contact__mail"><a href="mailto:hello.alwayssahi@gmail.com">hello.alwayssahi@gmail.com</a></div>
            <div class="contact_phone"><a href="tel:"></a></div>
            <div class="contact_social">
                <div class="contact_instagram">
                    <img src="images/" alt="instagram" class="contact__instagram_image">
                </div>
            </div>
        </div>
    </div>
</body>
</html>