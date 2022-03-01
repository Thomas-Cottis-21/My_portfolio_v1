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
            <!--
            <form action="https://form-test.slccwebdev.com/form-success.php" method="get">

                <label for="name">Your name or Company:</label>
                <input type="text" name="name" id="name">
                

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                

                <label for="number">Phone Number:</label>
                <input type="text" name="number" id="number">
                
                <label for="comments">Say hi first!:</label>
                <textarea id="comments" name="comments" cols="50" rows="4" >
                </textarea>

                <p>May I contact you?</p>
                <div class="label-side">
                    <label for="yes">Of Course!</label>
                    <input type="radio" id="yes" name="contact-back" value="yes">
                </div>

                <div>
                    <label for="no">Nope</label>
                    <input type="radio" id="no" name="contact-back" value="no">
                </div>

                <p>If so, what is the most efficient way to get to you:</p>
                <div>
                    <label for="phone">Call</label>
                    <input type="checkbox" id="contactphone" name="contact-phone" value="Phone">

                    <label for="text">Text</label>
                    <input type="checkbox" id="contactext" name="contact-text" value="Text">
                    
                    <label for="email">Email</label>
                    <input type="checkbox" id="contactemail" name="contact-email" value="Email">

                    <label for="any"> Any</label>
                    <input type="checkbox" id="contactany" name="contact-any" value="Any">
                </div> 
                
                <button class="submit">Submit</button>
            
                
            </form>
            -->
            <h2>
                Cellphone: <a class="link" href="tel:3853352336">(385)-335-2336</a></br>
                Email: <a class="link" href="mailto:tomocottis21@gmail.com">tomcottis21@gmail.com</a><br/>

            </h2>
        </section>

        <h1 data-aos="fade-up">Find out what my friends and family say about me!</h1>

        <table data-aos="fade-up">
            <thead>
                
            </thead>
            <tbody id ="tbReferences">

            </tbody>
        </table>
        <script src="/Js/JavaScript_contact.js"></script>
        <script src="/Js/JavaScript_DarkMode.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>