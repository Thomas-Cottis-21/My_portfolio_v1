<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="/css/Contact_style.css">
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c8c944ac43.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
        <class class="container">
            <header>
                <div class="heading_top"> 
                    <nav>
                        <a href="/index.php"><button class="index">Landing Page</button></a>
                        <a href="/content/Home.php"><button class="home">Home</button></a>
                        <a href="/content/About.php"><button class="about">About</button></a>
                        <a href="/content/Contact.php"><button class="contact">Contact</button></a>
                    </nav>
                </div>
            </header>
    
            <h1> Let's make this happen</h1>
            
            <form action="/php/thanks.php" method="get">

                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Johana Ramirez">
                

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required placeholder="@gmail.com">
                

                <label for="number">Phone Number:</label>
                <input type="text" name="number" id="number">
                
                <label for="comments">Say hi first!:</label>
                <textarea placeholder="5 bucks if you can fill the whole thing..." id="comments" name="comments" cols="70" rows="6"></textarea>

                <p>What's the best way to contact you?</p>
                <div>
                    <label for="phone">Call</label>
                    <input type="checkbox" id="contactphone" name="contact[]" value="Phone">

                    <label for="text">Text</label>
                    <input type="checkbox" id="contactext" name="contact[]" value="Text">
                    
                    <label for="email">Email</label>
                    <input type="checkbox" id="contactemail" name="contact[]" value="Email">

                    <label for="any"> Any</label>
                    <input type="checkbox" id="contactany" name="contact[]" value="Any">
                </div> 
                
                <button class="submit">Submit</button>
            
                
            </form>
            <h3>Or contact me directly</h3>
            <h2>
                Cellphone: <a class="link" href="tel:3853352336">(385)-335-2336</a></br>
                Email: <a class="link" href=mailto:thomas@thomasandco.xyz>thomas@thomasandco.xyz</a><br/>

            </h2>
        </section>
        <script src="/Js/JavaScript_contact.js"></script>
        <script src="/Js/JavaScript_DarkMode.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>