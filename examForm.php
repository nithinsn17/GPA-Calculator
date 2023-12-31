<?php
session_start();

if (isset($_SESSION['email'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/index.css">
        <script src="https://kit.fontawesome.com/0059d2346d.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <a href="https://bmsce.ac.in/" target="_blank"><img src="img/header.png" alt="logo"></a>
        <div class="blue"><TT>Logged In As:Student</TT><TT class="right"><a href="index.php"><u>LOG OUT</u></a></TT></div>
        <div class="card">
            <img src="img/student.svg" alt="John" style="width:100%">
            <h1 style="color:rgb(5, 27, 47)">Name </h1>
            <p class="title" style="color: white">Student, CS Department</p>
            <p style="color: white">BMS College of Engineering</p>
            <p style="color: yellow"><button>Student Profile</button></p>
        </div>
        <fieldset>
            <legend class="formhead"></legend>
            <form action="confirm.php">
                <label><b>total credits </b>
                    <input type="text" placeholder="Enter total credits " name="uname" id="name" pattern="([0-9]{2})" title="Name shld contain numbers." required></label><br>
                <label><b>sem</b></label>
                <select name="state" class="form-control">
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                </select>
                </div>
                <div class="submit">
                    <button type="submit" style="color:white"><b>Submit</b></button>
                </div>
            </form>
    </body>
    <footer id="footer">
        <p class="about">B.M.S. College of Engineering (BMSCE) was Founded in the year 1946 by Late Sri. B. M. Sreenivasaiah
            a great visionary and philanthropist and nurtured by his illustrious son Late Sri. B. S. Narayan. BMSCE is the
            first private sector initiative in engineering education in India. BMSCE has completed 70+ years of dedicated
            service in the field of Engineering Education. <a href="https://bmsce.ac.in/home/About-BMSCE">Know More</a></p>
        <h3>Contact Us</h3>
        <ul class="contact-us">
            <li><strong>Address:</strong>
                <br /> P.O. Box No.: 1908, Bull Temple Road,
                <br /> Bangalore - 560 019
                <br />Karnataka, India.
            </li>
            <li><strong>Fax:</strong>
                <br />+91-80-26614357
            </li>
            <li><strong>Email:</strong>
                <br /><a href="mailto:mail@example.com">info@bmsce.ac.in</a>
            </li>
        </ul>
        <div id="icons">
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"> </i></a>
            <a href="https://www.facebook.com/bmsce.official"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQENGHT1TgwK7QAAAXZq5KygBlHnGUtHSItHhXmvxk5TeadeZBSQHIHtyhl5QHsmVbUgh13F-Qd4FNtCMIyF5lmkZBN0WZQSjZ95rBzmFWoYbRpyvx9cbyeqQzfCO5Qm9Z8Fqk8=&originalReferer=https://bmsce.ac.in/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fbmsce-official%2F"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="Copyright">
            <p>© Copyright 2022. All Rights Reserved.</p>
        </div>
    </footer>
    </body>

    </html>
<?php
} else {
    header("Location:index.php");
}
