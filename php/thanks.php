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
    <video autoplay muted loop id="beach">
        <source src="/beach-thanks-background.mp4" type="video/m4p">
    </video>
    <h1 id="thanks">Thanks for your interest!</h3>
    <div class="h3">
        <h3>I'll get back to you within 24 hours!</h3>
    </div>
    
    <div class="thanks-content">
        <p class="info">You're name, number, email address have been recorded as: </p>
        <p><?=$_GET["name"]; ?></p>
        <p><?=$_GET["email"]; ?></p>
        <p><?=$_GET["number"]; ?></p>
    </div>
    


    <script src="/Js/JavaScript_DarkMode.js" ></script>
    
</body>
</html>