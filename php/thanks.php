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
            <h1 id="thanks" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">Thank you for your interest!</h1>
            <div class="h3">
                <h3 id="firstH3" data-aos="fade-left" data-aos-duration="2500" data-aos-once>I'll get back to you within 24 hours!</h3>
            </div>
        </div>
        
        
        <div class="thanks-content" data-aos="fade-left" data-aos-duration="2500" data-aos-once="true">
            <p class="info">You're name, number, email address have been recorded as: </p>
            <hr id="line" data-aos="fade-left" data-aos-duration="3000" data-aos-once="true">
            <p><?=$_GET["name"]; ?></p>
            <p><?=$_GET["email"]; ?></p>
            <p><?=$_GET["number"]; ?></p>
        </div>
    </section>

    <?php
        $to = "thomascottis@thomasandco.xyz";
        $subject ="New Client!";

        $message = $_GET["name"] . "\n" . $_GET["number"] . "\n" . $_GET["email"] . "\n" . $_GET["comments"];

        $message = wordwrap($message, 70);

        $headers = "From: thomascottis@thomasandco.xyz";

        mail($to, $subject, $message, $headers);
    

    
        $to = $_GET["email"];
        $subject = "Thank you!";

        $message = "I'm excited and ready to finally work with you!";

        $headers = "From: thomascottis@thomasandco.xyz";

        mail($to, $subject, $message, $headers);
    ?>
    
    <script src="/Js/JavaScript_DarkMode.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>