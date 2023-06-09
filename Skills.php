<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "my_portifolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<?php
$sql = "SELECT * FROM skills";
$result = $conn->query($sql);
?>
    <div class="main">
        <header class="header">
            <div style="text-align: left;" class="IconContainer">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-whatsapp"></i>
                <i class="fa fa-telegram"></i>
            </div>
        </header>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Skills.php">Skills</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
        <div class="contact">
            <h1>SKILLS</h1>
        </div>
        <div class="skillsContainer">
            <div class="box5">
                <p>Over the past years, I've been doing research in<br>
                    programming languages like C, C++, Python <br>
                    and not forgetting JAVA. Apart from having knowledge <br>
                    in these languages, I also enganged my self in graphic <br>
                    designing and Video Editing. I enjoy exploring ICT software <br>
                    tools since the world is going digital nowadays</p>
            </div>
            <div class="box5">
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
            </div>
        </div>
        <div class="progressBarsContainer">
            <div class="skillsBox">
                <div class="outer">
                    <div class="inner">
                        <div id="number2"></div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#e91e63"/>
                            <stop offset="100%" stop-color="#673ab7"/>
                        </linearGradient>
                    </defs>
                    <circle class="circle2" cx="70" cy="70" r="60" stroke-linecap="round"/>
                </svg>
                <br>
                <p style="font-size: small ;">C</p>
            </div>
            <div class="skillsBox">
                <div class="outer">
                    <div class="inner">
                        <div id="number6"></div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#e91e63"/>
                            <stop offset="100%" stop-color="#673ab7"/>
                        </linearGradient>
                    </defs>
                    <circle class="circle6" cx="70" cy="70" r="60" stroke-linecap="round"/>
                </svg>
                <br>
                <p style="font-size: small ;">C++</p>
            </div>
            <div class="skillsBox">
                <div class="outer">
                    <div class="inner">
                        <div id="number3"></div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#e91e63"/>
                            <stop offset="100%" stop-color="#673ab7"/>
                        </linearGradient>
                    </defs>
                    <circle class="circle3" cx="70" cy="70" r="60" stroke-linecap="round"/>
                </svg>
                <br>
                <p style="font-size: small ;">PYTHON</p>
            </div>
            <div class="skillsBox">
                <div class="outer">
                    <div class="inner">
                        <div id="number1"></div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#e91e63"/>
                            <stop offset="100%" stop-color="#673ab7"/>
                        </linearGradient>
                    </defs>
                    <circle class="circle1" cx="70" cy="70" r="60" stroke-linecap="round"/>
                </svg>
                <br>
                <p style="font-size: small ;">JAVASCRIPT</p>
            </div>
            <div class="skillsBox">
                <div class="outer">
                    <div class="inner">
                        <div id="number4"></div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#e91e63"/>
                            <stop offset="100%" stop-color="#673ab7"/>
                        </linearGradient>
                    </defs>
                    <circle class="circle4" cx="70" cy="70" r="60" stroke-linecap="round"/>
                </svg>
                <br>
                <p style="font-size: small ;">JAVA</p>
            </div>
            <div class="skillsBox">
                <div class="outer">
                    <div class="inner">
                        <div id="number5"></div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#e91e63"/>
                            <stop offset="100%" stop-color="#673ab7"/>
                        </linearGradient>
                    </defs>
                    <circle class="circle5" cx="70" cy="70" r="60" stroke-linecap="round"/>
                </svg>
                <br>
                <p style="font-size: small ;">CSS</p>
            </div>
            <div class="skillsBox">
                <div class="outer">
                    <div class="inner">
                        <div id="number"></div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#e91e63"/>
                            <stop offset="100%" stop-color="#673ab7"/>
                        </linearGradient>
                    </defs>
                    <circle  cx="70" cy="70" r="60" stroke-linecap="round"/>
                </svg>
                <br>
                <p style="font-size: small ;">PHP</p>
            </div>
            <div class="skillsBox">
                <div class="outer">
                    <div class="inner">
                        <div id="number7"></div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200px" height="200px">
                    <defs>
                        <linearGradient id="GradientColor">
                            <stop offset="0%" stop-color="#e91e63"/>
                            <stop offset="100%" stop-color="#673ab7"/>
                        </linearGradient>
                    </defs>
                    <circle class="circle7" cx="70" cy="70" r="60" stroke-linecap="round"/>
                </svg>
                <br>
                <p style="font-size: small ;">HTML</p>
            </div>
        </div>
        <div class="skillsDec">
            <div class="con_pic">
                <div class="skillsPicture">
                    <a href="https://www.programiz.com/">
                        <img style="height: 100px;" src="c-programming.png" alt="C-programming icon">
                    </a>
                </div>
                <div class="skillsPicture">
                    <a href="https://www.programiz.com/">
                        <img style="height: 100px;" src="c++.png" alt="C++ icon">
                    </a>
                </div>
                <div class="skillsPicture">
                    <a href="https://www.programiz.com/">
                        <img style="height: 100px;" src="python.png" alt="PYTHON programming icon">
                    </a>
                </div>
                <div class="skillsPicture">
                    <a href="https://www.programiz.com/">
                        <img style="height: 100px;" src="javascript-logo.png" alt="Javascript icon">
                    </a>
                </div>
                <div class="skillsPicture">
                    <a href="https://www.programiz.com/">
                        <img style="height: 100px;" src="java.png" alt="JAVA programming icon">
                    </a>
                </div>
                <div class="skillsPicture">
                    <a href="https://www.programiz.com/">
                        <img style="height: 100px;" src="CSS-LOGO.png" alt="JAVA programming icon">
                    </a>
                </div>
                <div class="skillsPicture">
                    <a href="https://www.programiz.com/">
                        <img style="height: 100px;" src="php-logo.jpg" alt="JAVA programming icon">
                    </a>
                </div>
                <div class="skillsPicture">
                    <a href="https://www.programiz.com/">
                        <img style="height: 100px;" src="html-logo.png" alt="JAVA programming icon">
                    </a>
                </div>    
            </div>
            <div class="con_dis">
            <?php
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $SKILL_DECRIPTION = $row["SKILL_DECRIPTION"];
                        echo "<div class=\"skillsDescription\">";
                        echo "<p>$SKILL_DECRIPTION</p>";
                        echo "</div>";
                    }
                } else {
                    echo "Error: " . $conn->error;
                }
            ?>
            </div>
           
        </div>
    </div>
    <footer>
        <div class="footerbox">
            <i style="font-size: 280%;" class="fa fa-globe fa2"></i>
            <p style="color:white">SOCIAL MEDIA LINKS</p>
            <i class="fa fa-facebook"></i>
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
        let number = document.getElementById("number");
        let counter = 0;
        setInterval(() => {
            if(counter == 20 ){
                clearInterval();
            }
            else{
            counter +=1;
            number.innerHTML = counter + "%"
            }
        }, 80)
        let number1 = document.getElementById("number1");
        let counter1 = 0;
        setInterval(() => {
            if(counter1 == 25 ){
                clearInterval();
            }
            else{
            counter1 +=1;
            number1.innerHTML = counter1 + "%"
            }
        }, 70)
        let number2 = document.getElementById("number2");
        let counter2 = 0;
        setInterval(() => {
            if(counter2 == 65 ){
                clearInterval();
            }
            else{
            counter2 +=1;
            number2.innerHTML = counter2 + "%"
            }
        }, 30)
        let number3 = document.getElementById("number3");
        let counter3 = 0;
        setInterval(() => {
            if(counter3 == 55 ){
                clearInterval();
            }
            else{
            counter3 +=1;
            number3.innerHTML = counter3 + "%"
            }
        }, 35)
        let number4 = document.getElementById("number4");
        let counter4 = 0;
        setInterval(() => {
            if(counter4 == 75 ){
                clearInterval();
            }
            else{
            counter4 +=1;
            number4.innerHTML = counter4 + "%"
            }
        }, 25)
        let number5 = document.getElementById("number5");
        let counter5 = 0;
        setInterval(() => {
            if(counter5 == 55 ){
                clearInterval();
            }
            else{
            counter5 +=1;
            number5.innerHTML = counter5 + "%"
            }
        }, 35)
        let number6 = document.getElementById("number6");
        let counter6 = 0;
        setInterval(() => {
            if(counter6 == 35 ){
                clearInterval();
            }
            else{
            counter6 +=1;
            number6.innerHTML = counter6 + "%"
            }
        }, 50)
        let number7 = document.getElementById("number7");
        let counter7 = 0;
        setInterval(() => {
            if(counter7 == 50 ){
                clearInterval();
            }
            else{
            counter7 +=1;
            number7.innerHTML = counter7 + "%"
            }
        }, 35)
    </script>
</body>

</html>