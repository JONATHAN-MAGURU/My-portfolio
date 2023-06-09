<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main">
        <header class="header">
            <div class="IconContainer">
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
            <h1 style="text-align: center;">WELCOME TO CONTACTS PAGE...</h1>
        </div>
        <div class="contactContainer">
            <div class="nav">
                <p>CURRENT LOCATION</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.9317567275475!2d33.99540073769577!3d-11.421860728474412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d3039d0f8ae75%3A0xf0f00e912b55adf2!2sMzuzu%20University!5e1!3m2!1sen!2smw!4v1685396809643!5m2!1sen!2smw" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contactContainer">
            <form action="mysite.php" method="post"> 
                <p style="text-align: center;">CONTACT</p>
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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.9317567275475!2d33.99540073769577!3d-11.421860728474412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d3039d0f8ae75%3A0xf0f00e912b55adf2!2sMzuzu%20University!5e1!3m2!1sen!2smw!4v1685396809643!5m2!1sen!2smw"
                width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        </div>
        <div class="footerbox">
            <i style="font-size: 280%;" class="fa fa-envelope fa2"></i>
            <p style="color: white;">EMAIL</p>
            <br>
            <P style="font-size: 100%;color: white;">jonathanmaguru@gmail.com</P>
        </div>
    </footer>
</body>

</html>