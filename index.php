<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main">
        <header class="header">
            <div  class="IconContainer">
                <a href="https://web.facebook.com/jonathann.maguru"><i class="fa fa-facebook"></i></a>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-whatsapp"></i>
                <i class="fa fa-telegram"></i>
            </div>
        </header>
        <ul style="list-style-type: none;" class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Skills.php">Skills</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
        <div class="contact">
            <h1>Hi there! I'm JONATHAN </h1>
        </div>
        <div class="box1">
            <div class="box3">
                <p>I'm a Mzuzu University intellectual studying ICT. <br>
                    I've been studying programming for two years and <br> I develop Websites.
                    I have knowledge in C, C++, <br> PYTHON, and JAVA</p>
            </div>
            <div class="box2">
                <a href="https://www.programiz.com/">
                    <img style="height: 100px;" src="c-programming.png" alt="C-programming icon"></a>
            </div>
            <div class="box2">
                <a href="https://www.programiz.com/">
                    <img style="height: 100px;" src="c++.png" alt="C++ icon"></a>
            </div>
            <div class="box2">
                <a href="https://www.programiz.com/">
                    <img style="height: 100px;" src="python.png" alt="PYTHON programming icon"></a>
            </div>
            <div class="box2">
                <a href="https://www.programiz.com/">
                    <img style="height: 100px;" src="java.png" alt="JAVA programming icon"></a>
            </div>
            <div class="box3">
                <p>I learn most of my ICT related skills at <br>
                    <a href="https://www.w3schools.com/">W3Schools.com</a> and <a
                        href="https://www.stackoverflow.com/">stackoverflow.com</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button onclick="document.location='Skills.php'"> <span style="color: white;">view
                            more</span></button>
                </p>
            </div>
        </div>
        <div class="box4">
            <img id="imageHover" style="border-radius: 100px 2px; box-shadow: 1px 1px 10px orange;"
                src="My Profile picture.jpg" alt="A profile picture for my Portifolio" width="350px" height="400px">
        </div>
        <div class="slideshow">
            <p class="header" style="text-align: center;"><a href="projects.php">FEATURED PROJECTS</a></p>
            <br>
            <div class="slideshow-container">
                <div class="slideshow-images">
                </div>
            </div>
        </div>
        <div class="contactContainer">
        <form action="mysite.php" method="post"> 
            <p class="IconContainer" style="text-align: right;"><a href="contact.html">CONTACT</a></p>
            <br>
            <label for="Name">Name</label> <br>
            <input type="text" name="Name" id="Name" required> <br>
            <label for="Email">Email</label> <br>
            <input type="email" name="Email" id="Email" required> <br>
            <label for="phoneNumber">Phone Number</label> <br>
            <input type="number" name="phoneNumber" id="phoneNumber" required> <br>
            <label for="Message">Write message</label> <br>
            <textarea name="Message" id="Message" cols="60" rows="5" required></textarea>
            <input type="submit" name="" id="" value="SUBMIT">
        </form>
        </div>
        </div>
    </div>
    <footer>
        <div class="footerbox">
            <i style="font-size: 280%;" class="fa fa-globe fa2"></i>
            <p style="color:white">SOCIAL MEDIA LINKS</p>
            <a href="https://web.facebook.com/jonathann.maguru"><i class="fa fa-facebook"></i></a>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-whatsapp"></i>
            <i class="fa fa-telegram"></i>
        </div>
        <div class="footerbox">
            <i style="font-size: 280%;" class="fa fa-phone fa2"></i>
                <p> PHONE NUMBER <br> 0991608070</P>
            <a style="font-size: x-small;" href="index.php"> <i class="fa fa-home"></i> Home</a>
            <a style="font-size: x-small;" href="Skills.php"><i class="fa fa-briefcase"></i>Skills</a>
            <a style="font-size: x-small;" href="projects.php"><i class="fa fa-tasks"></i>Projects</a>
            <a style="font-size: x-small;" href="contact.php"><i class="fa fa-id-card"></i>Contact</a>
        </div>
        <div class="footerbox">
                <p>LOCATION MAP</p>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.9317567275475!2d33.99540073769577!3d-11.421860728474412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d3039d0f8ae75%3A0xf0f00e912b55adf2!2sMzuzu%20University!5e1!3m2!1sen!2smw!4v1685396809643!5m2!1sen!2smw" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footerbox">
            <i style="font-size: 280%;" class="fa fa-envelope fa2"></i>
            <p style="color: white;">EMAIL</p>
            <br>
            <P style="font-size: 100%;color: white;">jonathanmaguru@gmail.com</P>
        </div>
    </footer>
    <script>
        var slideIndex = 0;

        function showSlides() {
            var slides = document.getElementsByClassName("slideshow-images")[0].getElementsByTagName("img");

            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = "block";

            setTimeout(showSlides, 2000);
        }

        function changeSlide(n) {
            slideIndex += n;
            showSlides();
        }

        var images = ["img1.jpg", "img2.jpg", "img4.png"];

        for (var i = 0; i < images.length; i++) {
            var img = document.createElement("img");
            img.src = images[i];
            document.getElementsByClassName("slideshow-images")[0].appendChild(img);
        }
        showSlides();
    </script>
</body>

</html>