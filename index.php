<<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/index.css">
  <script src="https://kit.fontawesome.com/0059d2346d.js" crossorigin="anonymous"></script>
</head>

<body>
  <a href="https://bmsce.ac.in/" target="_blank"><img src="img/header.png" alt="logo"></a>
  <p style="background-image:url('img/bmsce.jpeg');">
    <div class="blue"><TT>EXAM GRADE POINT CALCULATOR</TT></div>
    <form action="login.php" method="post">
      <div id="content">
        <div class="imgcontainer">
          <img src="img/student.svg" alt="Avatar" class="avatar">
        </div>
        <div>
          <label style="color:black"><b>Email </b>
            <input type="email" placeholder="Enter your BMSCE email id" name="userName" pattern="[a-zA-Z0-9+_.]+@bmsce.ac.in" required>
          </label>
          <label style="color:black"><b>Password</b>
            <input type="password" placeholder="Enter Password" name="password" minlength="8" required>
          </label>
          <button type="submit">Sign In/Sign Up</button>
        </div>
      </div>
    </form>
  </p>
  

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