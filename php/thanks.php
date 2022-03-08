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
<body>
    <section class="flex">
        <div class="header">
            <h1 id="thanks" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">Thank you for your interest!</h1>
            <div class="h3">
                <h3 id="firstH3" data-aos="fade-left" data-aos-duration="2500" data-aos-once>I'll get back to you within 24 hours!</h3>
            </div>
        </div>
        
        <?php
        function contactMe(){
            $array = $_POST["contact"];
            $addToArray = " + ";
            return implode($array, $addToArray);
        };
        ?>
        
        <div class="thanks-content" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
            <h2 class="info">You're name, number, and email address have been recorded as: </h2>
            <hr id="line" data-aos="fade-left" data-aos-duration="3000" data-aos-once="true">
            <p><?=$_POST["name"]; ?></p>
            <p><?=$_POST["email"]; ?></p>
            <p><?=$_POST["number"]; ?></p>
            <div>
                <h2 class="info" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true">Your prefered method(s) of contact have been recorded as: </h2>
                <div class="method-of-contact-list" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="bottom-bottom">
                    <p><?=contactMe(); ?></p>
                </div>
            </div>
            
        </div>
    </section>
    <?php
        $to = "thomascottis@thomasandco.xyz";
        $subject ="New Client!";

        $message = $_POST["name"] . "\n" . $_POST["number"] . "\n" . $_POST["email"] . "\n" . $_POST["comments"];

        $message = wordwrap($message, 70);

        $headers = "From: thomascottis@thomasandco.xyz";

        mail($to, $subject, $message, $headers);

        $to = $_POST["email"];
        $subject = "Thank you!";

        $message = "Thank you " . $_POST["name"] . ", for having interest in me and my persuits. I will get back to you within 24 hours! I hope you have a wonderful rest of your day!";

        $headers2 = "From: thomascottis@thomasandco.xyz";

        mail($to, $subject, $message, $headers);
        
    ?>
    
    <script src="/Js/JavaScript_DarkMode.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>