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
            <div class="contact__title">Contact Us</div>
            <input type="text" placeholder="Name" class="contact__input" required>
            <input type="email" placeholder="Email" class="contact__input" required>
            <input type="tel" placeholder="Phone Number" class="contact__input" required>
            <input type="text" class="contact__message contact__input"  required>
            <button value="submit" class="contact__submit">Submit</button>
        </form>
        <div class="contact__info">
            <div class="contact__mail"><a href="mailto:hello.alwayssahi@gmail.com" class="contact__link">hello.alwayssahi@gmail.com</a></div>
            <div class="contact__phone"><a href="tel:+91 8857086790" class="contact__link">+91 8857086790</a></div>
            <div class="contact__social">
                <div class="contact_instagram">
                    <a href="" class="contact__link">
                        <img src="images/" alt="instagram" class="contact__instagram_image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="faq">
        <div class="faq__title">FAQ</div>
        <div class="faq__questions">
            <div class="faq__question">
                <span>asagag</span>
                <div class="faq__show">+</div>
            </div>
            <div class="faq__answer">aga</div>
        </div>
    </div>
</body>
</html>