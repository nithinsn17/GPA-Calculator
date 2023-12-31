<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign-up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <script src="script.js"></script>
    <a href="https://bmsce.ac.in/" target="_blank"><img src="img/header.png" alt="logo"></a>
    <div class="blue"><TT>EXAM GRADE POINT CALCULATOR</TT></div>
    <form action="/auth/signup" name="form" onSubmit="return checkPassword(this);" method="post">
        <div class="imgcontainer">
            <img src="img/student.svg" alt="Avatar" class="avatar">
        </div>
        <div>
            <label><b>Name</b>
                <input type="text" placeholder="Enter Name" name="uname" required></label>
            <div class="form-control">
                <label><b>Email</b>
                    <input type="text" placeholder="Enter Email Id" pattern="[a-zA-Z0-9+_.]+@bmsce.ac.in" name="mail" title="Enter college id (eg:john.cs19@bmsce.ac.in)" required></label>
            </div>
            <div class="form-control">
                <label><b>Usn</b>
                    <input type="text" placeholder="Enter Usn(eg:1BM21CS121)" pattern="1BM[0-9]{2}CS[0-9]{3}" name="usn" required></label>
            </div>
            <br>
            <div class="form-control">
                <label><b>Mobile Number</b>
                    <input type="text" placeholder="Enter Mobile Number" pattern="[0-9]{10}" name="unum" title="It shld have 10 digits " required></label>
                <small></small>
            </div>
            <br>
            <label><b>DOB</b>
                <input type="date" placeholder="Enter Date Of Birth" name="date" required></label><br>
            <br>
            <fieldset>
                <div class="form-control">
                    <label><b>Password</b>
                        <input type="password" placeholder="Enter Password" name="password1" minlength="8" required></label>
                </div>
                <br>
                <div class="form-control">
                    <label><b>Re-enter Password</b>
                        <input type="password" placeholder="Re-enter your password" name="password2" required></label>
                </div>

                <div>
                    <input type="checkbox" name="validation" required>
                    I agree that all the information provided is correct and further changes cannot be done
                    <br>
                    <br>
                    <button type="submit" class="pure-button pure-button-primary" style="color:white"><b>Sign
                            up</b></button>
                </div>
            </fieldset>
        </div>
    </form>
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
            <p>© Copyright 2019. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>