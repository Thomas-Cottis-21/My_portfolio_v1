<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/thanks.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Thanks!</title>
</head>
<body style="overflow: visible";>
    <section class="flex">
        <div class="header">
            <h1 id="thanks" data-aos="fade-right" data-aos-duration="2000">Thank you for your interest!</h1>
            <div class="h3">
                <h3 id="firstH3" data-aos="fade-left" data-aos-duration="2500">I'll get back to you within 24 hours!</h3>
            </div>
        </div>
        
        
        <div class="thanks-content" data-aos="fade-left" data-aos-duration="2500">
            <p class="info">You're name, number, email address have been recorded as: </p>
            <hr id="line" data-aos="fade-left" data-aos-duration="3000">
            <p><?=$_GET["name"]; ?></p>
            <p><?=$_GET["email"]; ?></p>
            <p><?=$_GET["number"]; ?></p>
        </div>
    </section>

    <?php
        $to = "thomascottistest@gmail.com";
        $subject ="New Website Contact";

        $message = $_GET["name"] . "\n" . $_GET["number"] . "\n" . $_GET["email"] . "\n" . $_GET["comments"];

        $message = wordwrap($message, 70);

        mail($to, $subject, $message);
    ?>
    
    <script src="/Js/JavaScript_DarkMode.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>