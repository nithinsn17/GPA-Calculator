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

        <div class="blue"><TT>payment gateway </TT></div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h1 style=" color: rgb(17, 3, 3); text-align: center;"> PAY THE DISPLAYED AMOUNT : </h1>
        <h2 style="color: rgb(0, 0, 0); text-align:center;justify-content: center;"> WISH YOU ALL THE VERY BEST <br>
            THANK YOU </h2>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <footer id="footer">
            <p class="about">B.M.S. College of Engineering (BMSCE) was Founded in the year 1946 by Late Sri. B. M.
                Sreenivasaiah a great visionary and philanthropist and nurtured by his illustrious son Late Sri. B. S.
                Narayan. BMSCE is the first private sector initiative in engineering education in India. BMSCE has completed
                70+ years of dedicated service in the field of Engineering Education. <a href="https://bmsce.ac.in/home/About-BMSCE">Know More</a></p>
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
