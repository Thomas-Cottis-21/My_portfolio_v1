<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/About_page.css">
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c8c944ac43.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        
        
    </head>
    <body>
    <?php

$mySkills = array("HTML", "CSS", "JavaScript", "PHP / MySQL");

$myHobbies = array("Welding", "Woodworking", "Designing and creating modern furniture", "Creating aestheticaly pleasing things", "Building computers", "Playing videogames", "Travelling");

function newList($array){
    echo "<ul>";
    foreach ($array as $listItem){
        echo "<li>";
    
        echo $listItem;
    
        echo "</li>";
    };
    echo "</ul>";
}

?>
        
            <header>
                <div class="container">
                    <div class="heading_top">
                        <nav>
                            <a href="/index.php"><button class="index">Landing Page</button></a>
                            <a href="/content/Home.php"><button class="home">Home</button></a>
                            <a href="/content/About.php"><button class="about">About</button></a>
                            <a href="/content/Contact.php"><button class="contact">Contact</button></a>
                        </nav>
                    </div>
                </div>
            </header> 
            <h2 class="grid-header">Soft Skills</h2>
                <div class="grid">
                    <div class="tooltip">
                            <div><i class="fas fa-laptop-code"></i><h3>Decided</h3></div>
                        <span class="tooltiptext">When it came time to finally choose a careerpath, I first went with my gut and went into something
                            technical like being a mechanic, but I quickly found out that programming was the route that I always really wanted, but never knew how to 
                        harness until now. I am decided because I know that this is the life for me and I am finally making it happen.</span>
                    </div>
                    <div class="tooltip">
                            <div><i class="fas fa-search-dollar"></i><h3>Business Oriented</h3></div>
                        <span class="tooltiptext">Being business oriented has grasped me since my first job at a local car wash to now. It didn't matter
                            what the job was as long as I knew that I'm able to make money only because I'm helping the business make money. Knowing this has 
                            greatly improved my perspective of how we can work together to make more money together.
                        </span>
                    </div> 
                    <div class="tooltip"> 
                            <div><i class="fas fa-calculator"></i><h3>Problem-Solver</h3></div>
                        <span class="tooltiptext">Another word for "Engineer" is "Problem-Solver". Anybody who has ever created anything finds out really early on that problems are part of the process.
                            From welding up a new project to 3D printing a new prototype, being a problem solver has given me success in almost everything that I put my mind to.
                        </span>
                    </div>
                    <div class="tooltip">
                            <div><i class="fas fa-paint-brush"></i><h3>Creative</h3></div>
                            <span class="tooltiptext">Being creative has taken a new meaning for me because of the many talents that I have. I love thinking of new furniture
                                designs that I can fabricate, original designs to built with the 3D printer and updated software that I can write. Creativeness is something that I was definintely
                                born with. Finding new ideas that are born right inside my own mind is a passion of mine that I will never lose.
                            </span>
                    </div>
                    <div class="tooltip">
                            <div><i class="fas fa-crosshairs"></i><h3>Focused and driven</h3></div>
                            <span class="tooltiptext">I really became a focused person when I went on my mission to Lima, Peru. There I worked with my companions to spread the gospel everyday to the people there.
                                This is so because in order to be successful in the field, it takes weeks of hard work tightly collaborated in every case. If focus is lost, the case is as well. When I returned
                                I could easily get to work on multiple projects of completely different styles at the same time and be successful in all.
                            </span>
                    </div>
                    <div class="tooltip">
                            <div><i class="fas fa-glasses"></i><h3>Quick-learner</h3></div>
                            <span class="tooltiptext">I'm a quick learner because of my past expiriences. Along with being focused on my objectives, picking things up rapidly is 
                                who I am. I became fluent in Spanish in just 6 months. I became sufficient in welding in just over 3 weeks. There are many other skills and hobbies that I have developed 
                                like sowing, web design, rock climbing, snowboarding and engineering that I have grown because of my focus, creativity and problem-solving character.
                            </span>
                    </div>
                </div>

                <h2 class="grid-header">Hard Skills</h2>
                <div class="hard-skills-section">
                    <p class="hard-skills-p">Although I have valuable soft skills, my hard skills are just as important. </p>
                    <?php 

                    echo "\n";

                    newList($mySkills);
                    
                    ?>

                </div>

            <table data-aos="fade-up" data-aos-once="true">
                <caption>Where did I develop character?</caption>
                <tr>
                    <th>Experiences</th>
                    <th>Character Attributes</th>
                </tr>
                <tr>
                    <td>Understanding the supply chain<br>Understanding how just one employee can
                        make the entire company more successful</td>
                    <td>Business Oriented</td>
                </tr>
                <tr>
                    <td>Mission in Peru<br>College<br>Working two jobs</td>
                    <td>Focused</td>
                </tr>
                <tr>
                    <td>Learning Spanish<br>Ability to learn on my own<br>Learning by experiencing immersion</td>
                    <td>Quick-Learner</td>
                </tr>
                <tr>
                    <td>Mission in Peru<br>Building Computers<br>3D Printing<br>Welding<br>Meeting complex<br>
                    challenges in Web Development.</td>
                    <td>Problem-Solver</td>
                </tr>
                <tr>
                    <td>Designing and building modern furniture<br>Paining<br>Aesthetic/Interior Design<br>
                    3D Design.</td>
                    <td>Creative</td>
                </tr>
                <tr>
                    <td>Research and experience in many different career fields that helpd me to know that
                        web development was for me.</td>
                    <td>Decided on Web Development.</td>
                </tr>
            </table>

            
        

            <div class="mainprojects" data-aos="fade-up" data-aos-once="true">
                <h2 id="projects" class="jobs">Projects</h2>
                <i id="expand" class="fas fa-compress-arrows-alt"></i>
                <h4 class="headprojects">Wagstaff Cerakote</h4>
                <hr>
                <p id="iframedesc0" class="paraprojects">Wagstaff Cerakote is one of my recent projects. My brother in law is starting a caraktoe business where he paints firearms while also making the outer coating much stronger and resistant to damage. He needed a web site in order to help place orders through email and to vastly improve his web presence. I used a bootstrap template for quick and simple development. However, I am heavily modifying it to his needs as well as adding new php in order to send confirmations as well as take requests through email.</p>
                <iframe id="iframe0" src="https://joshcerakote.netlify.app/" style="width: 75vw; height: 85vh; border: none; margin: auto; border-radius: 10px;" title="Wagstaff Cerakote"></iframe> 

                <h4 class="headprojects">Project Polygraph</h4>
                <hr>
                <p id="iframedesc1" class="paraprojects">My grandfather, Joseph Cottis is highly trained in lie detecting thanks to the F.B.I. He worked there for nearly 30 years!
                    Since he's retired from the Bureau, he has retained much of his training in the art of detecting lies and helping regular people free themselves from 
                    the lies of others, sadly, loved ones. He had reached out previosuly to a company to help him get out there to start helping people around Utah by creating a web site. 
                    The web site had served him well, but I knew that I could do much better than them and felt obligated to help him. Eager for any experience that I could get in web development 
                    I took to the task of building my Grandfather a new, trustworthy, aesthetic and modern web presence.
                </p>
                <iframe id="iframe1" src="https://www.nationaldme.net/" style="width: 75vw; height: 85vh; border: none; margin: auto; border-radius: 10px;" title="Project Polygraph"></iframe>
                <h4 class="headprojects">Shalora flute page</h4>
                <hr>
                <p id="iframedesc2" class="paraprojects">Shalora Horne is the wife of my best friend. They recently had a baby and now she is a stay at home mother, but still needs to work. I ended up creating them a website to launch them out to the world. This website is a template that was heavily modified by me in order to satisfy their needs. I used a template because they needed rapid, mobile and tablet friendly development. I think it looks and operates like a charm.</br>
                </p>
                <iframe id="iframe2" src="https://shaloraflute.netlify.app/" style="width: 75vw; height: 85vh; border: none; margin: auto; border-radius: 10px;" title="Shalora flute page"></iframe>
                <h4 class="headprojects">My Portfolio</h4>
                <hr>
                <p id="iframedesc3" class="paraprojects">You're currently exploring my portfolio, one place where all of my relevant achievments can be stored for people to see! My portfolio was built using straight up HTML, CSS and JavaScript.
                    No template or external wordpress was used. I made it like this partly so I could experiment with my capabilities, but also to display what I can do on my own. I am proud of it, but I can keep going.
                </p>
                <iframe id="iframe3" src="https://thomasandco.xyz/" style="width: 75vw; height: 85vh; border: none; margin: auto; border-radius: 10px;" title="Shalora flute page"></iframe> 
            </div>
            <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
            <script src="/Js/JavaScript_about.js"></script>
            <script src="/Js/JavaScript_DarkMode.js"></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
    </body>
</html>