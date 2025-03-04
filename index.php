<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Page Layout</title>
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
            line-height: 1.8;
        }

        section {
            scroll-margin-top: 80px; /* Ensures section content is visible */
            padding: 50px 20px;
        }

        /* Navigation */
        nav {
            background: #222;
            padding: 15px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            font-size: small;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
            font-size: small;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: aqua;
        }

        /* Home Section */
        #me {
            text-align: center;
            padding-top: 100px;
        }

        #me .container {
            display: flex;
            justify-content: start;
            align-items: center;
            align-content: center;
            gap: 20px;
            max-width: 800px;
            margin: auto;
            text-align: left;
        }

        #me .image {
            max-width: 100%;
    height: auto;
    display: block;
            width: 150px;
            height: 250px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        .button {
            display: inline-block;
            background: aqua;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s;
            margin: 10px;
        }

        .button:hover {
            background: aquamarine;
        }

        /* About Section */
        #about {
            text-align: center;
        }

        #about .container {
            max-width: 800px;
            color: #ffffff;
            height: auto;
            margin: 0 auto;
            background-color: #000000;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
           text-align: left;
            gap: 30px;
        }

        #about .image {
            max-width: 100%;
    height: auto;
    display: block;
            width: 150px;
            height: 250px;
            border-radius: 50%;
        }

        /* Gallery Section */
        #gallery {
            text-align: center;
        }

        #gallery .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        #gallery .image {
            max-width: 100%;
    height: auto;
    display: block;
            width: 200px;
            transition: transform 0.2s;
        }

        #gallery .image:hover {
            transform: scale(1.05);
        }

        /* Contact Section */
        #contact {
            text-align: center;

        }

        #contact .con {
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        #contact form {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #contact input, textarea {
            width: 250px;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        #contact button {
            background: aqua;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #contact button:hover {
            background:aquamarine;
        }
        #contact .cont {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        #contact .cont a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        #contact .cont a:hover {
            color:aqua;
        }
        #contact .icons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 10px;
        }

        #contact .icons a {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        #contact .icons a:hover {
            color:aqua;
        }
        @media (min-width: 768px) {
    #me .container, #about .container {
        display: flex;
        flex-direction: row; /* Horizontal layout */
        align-items: center;
    }

    #me img, #about img {
        width: 200px; /* Adjust image size */
        height: auto;
    }
}

/* Large screens (Laptops & Desktops) */
@media (min-width: 1024px) {
    #me .container, #about .container {
        justify-content: flex-start; /* Aligns content to the left */
    }
}
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#me">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Home Section -->
    <section id="me">
        <div class="container">
            <img src="mimi.jpg" alt="Profile Picture" class="image">
            <div>
                <h2>Hey there, meet</h2>
                <h1>Doris Mueni</h1>
                <p>A problem-solver with a background in computer science, skilled in data management, customer relations, and creating efficient solutions.</p>
                <a href="CV.pdf" class="button">Download CV</a>
                <a href="#contact" class="button">Contact me</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <h1>About Me</h1>
        <div class="container">
            <img src="mimi.jpg" alt="Profile Picture" class="image">
            <p>
                   I am a passionate computer science graduate with 
                    a keen eye for problem-solving, data management, and customer-driven solutions. With
                     hands-on experience in research, customer service, and technology, I strive to bridge 
                     the gap between innovation and efficiency.
                    <br>
                    From data-driven insights to seamless user experiences, I’m 
                    committed to delivering solutions that make a difference. Whether it's optimizing 
                    processes, managing data, or leading teams, I approach every challenge with creativity,
                     precision, and a results-oriented mindset.
                    <br>
                    I'm eager to leverage my expertise in technology and operations to contribute to innovative
                    projects and drive meaningful results.
                    <br>
                    Let's connect and create something amazing!</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery">
        <h1>My Projects</h1>
        <div class="container">
            <div class="project">
                <a href="babydoris/RESTURANT.html">
                    <img src="DEES LOGO.png" alt="Restaurant Project" class="image">
                </a>
            </div>
            <div class="project">
                <a href="Tasks to do/to do.html">
                    <img src="td.jpg" alt="To-Do List" class="image">
                </a>
            </div>
            <div class="project">
                <a href="/fabric finds/Fabric Finds/Fabric Finds/edu2.php">
                    <img src="Logo.jpg" alt="Fabric Finds" class="image">
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h1>Contact Me</h1>
        <div class="con">
            <div class="cont">
                <a href="mailto:muenidoris22@gmail.com">muenidoris22@gmail.com</a>
                <a href="tel:+254706451121">0706451121</a>

                <div class="icons">
        <a href="https://www.instagram.com/baby_.doris"><i class="fa-brands fa-instagram fa-2x"></i></a>
        <a href="https://www.linkedin.com/in/doris-mueni-b88946307"><i class="fa-brands fa-linkedin fa-2x"></i></a>
        <a href="https://x.com/DorisMueni12?t=8QLxO-H_VRzL3wK5yfdmOg&s=09 "><i class="fa-brands fa-x-twitter fa-2x"></i></a>
                </div>
            </div>
            <form>
                <label for="name">Name</label>
                <input type="text" id="name" required>
                <label for="email">Email</label>
                <input type="email" id="email" required>
                <label for="message">Message</label>
                <textarea id="message" required></textarea>
                <button type="submit">Send Message</button>
            
                <?php include 'db.php';
                   
                
                
                
                ?>
            </form>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
