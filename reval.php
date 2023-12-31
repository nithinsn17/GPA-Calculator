<?php
session_start();

if (isset($_SESSION['email'])) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <style>
      body {
        background-image: url('img/study.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
    <style>
      a:link,
      a:visited {
        background-color: #b3aead;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
      }

      a:hover,
      a:active {
        background-color: red;
      }
    </style>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/0059d2346d.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <a href="https://bmsce.ac.in/" target="_blank"><img src="img/header.png" alt="logo"></a>
    <div class="blue"><TT>EXAM RE-EVALUATION AND FAST-TRACK</TT></div>
    <form action="examForm.php">
      <div class="imgcontainer">
        <img src="img/student.svg" alt="Avatar" class="avatar">
      </div>
      <h1 style="color: white">courses to be re-evaluated</h1>
      <p style="color: white">select the courses</p>
      <form action="/action_page.php">
        <label style="color: white " for="course"> Choose a course </label>
        <select name="course" id="course" multiple>
          <option value="course">course1</option>
          <option value="course">course2</option>
          <option value="course">course3</option>
          <option value="course">course4</option>
          <option value="course">course5</option>
          <option value="course">course6</option>
          <option value="course">course7</option>
          <option value="course">course8</option>
        </select>
        <br><br>
        <a href="payment.php" target="_blank">submit </a>
        <p style="color: white">Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</p>
        <h1 style="color: white">register for fast-track </h1>
        <a href="payment.php" target="_blank">click here </a>
      </form>
    </form>

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
