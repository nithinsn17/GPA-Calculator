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
            <p style="color: rgb(5, 5, 5)">BMS College of Engineering</p>
            <p style="color: rgb(0, 0, 0)"><button>Student Profile</button></p>
        </div>
        <fieldset>
            <legend class="formhead"></legend>
            <form action="confirm.php">
                <label style="color:rgb(0, 0, 0)"><b>course </b>
                    <input type="text" placeholder="course name " name="uname" id="name" pattern="[a-zA-Z]+" title="Name shld contain alphabets." required></label>
                <label style="color:rgb(0, 0, 0)"><b>credits </b>
                    <input type="text" placeholder="credit number" name="uname" id="name" pattern="[0-9]{1}" title="Name shld contain anumber" required></label>
                <label style="color:rgb(0, 0, 0)"><b>grade</b></label>
                <select name="state" class="form-control">
                    <option value="1st">O=10</option>
                    <option value="2nd">A+=9</option>
                    <option value="3rd">A=8</option>
                    <option value="4th">B+=7</option>
                    <option value="5th">B=6</option>
                    <option value="6th">C+=5</option>
                    <option value="7th">P=4</option>
                    <option value="8th">F=0</option>
                </select>
                <label style="color:rgb(8, 1, 1)"><b>course </b>
                    <input type="text" placeholder="course name " name="uname" id="name" pattern="[a-zA-Z]+" title="Name shld contain alphabets." required></label>
                <label style="color:rgb(0, 0, 0)"><b>credits </b>
                    <input type="text" placeholder="credit number" name="uname" id="name" pattern="[0-9]{1}" title="Name shld contain anumber" required></label>
                <label style="color:rgb(8, 3, 3)"><b>grade</b></label>
                <select name="state" class="form-control">
                    <option value="1st">O=10</option>
                    <option value="2nd">A+=9</option>
                    <option value="3rd">A=8</option>
                    <option value="4th">B+=7</option>
                    <option value="5th">B=6</option>
                    <option value="6th">C+=5</option>
                    <option value="7th">P=4</option>
                    <option value="8th">F=0</option>
                </select>
                <label style="color:rgb(0, 0, 0)"><b>course </b>
                    <input type="text" placeholder="course name " name="uname" id="name" pattern="[a-zA-Z]+" title="Name shld contain alphabets." required></label>
                <label style="color:rgb(0, 0, 0)"><b>credits </b>
                    <input type="text" placeholder="credit number" name="uname" id="name" pattern="[0-9]{1}" title="Name shld contain anumber" required></label>
                <label style="color:rgb(14, 3, 3)"><b>grade</b></label>
                <select name="state" class="form-control">
                    <option value="1st">O=10</option>
                    <option value="2nd">A+=9</option>
                    <option value="3rd">A=8</option>
                    <option value="4th">B+=7</option>
                    <option value="5th">B=6</option>
                    <option value="6th">C+=5</option>
                    <option value="7th">P=4</option>
                    <option value="8th">F=0</option>
                </select>
                <label style="color:rgb(7, 1, 1)"><b>course </b>
                    <input type="text" placeholder="course name " name="uname" id="name" pattern="[a-zA-Z]+" title="Name shld contain alphabets." required></label>
                <label style="color:rgb(2, 0, 0)"><b>credits </b>
                    <input type="text" placeholder="credit number" name="uname" id="name" pattern="[0-9]{1}" title="Name shld contain anumber" required></label>
                <label style="color:rgb(26, 19, 19)"><b>grade</b></label>
                <select name="state" class="form-control">
                    <option value="1st">O=10</option>
                    <option value="2nd">A+=9</option>
                    <option value="3rd">A=8</option>
                    <option value="4th">B+=7</option>
                    <option value="5th">B=6</option>
                    <option value="6th">C+=5</option>
                    <option value="7th">P=4</option>
                    <option value="8th">F=0</option>
                </select>
                <label style="color:rgb(14, 8, 8)"><b>course </b>
                    <input type="text" placeholder="course name " name="uname" id="name" pattern="[a-zA-Z]+" title="Name shld contain alphabets." required></label>
                <label style="color:rgb(17, 8, 8)"><b>credits </b>
                    <input type="text" placeholder="credit number" name="uname" id="name" pattern="[0-9]{1}" title="Name shld contain anumber" required></label>
                <label style="color:rgb(20, 12, 12)"><b>grade</b></label>
                <select name="state" class="form-control">
                    <option value="1st">O=10</option>
                    <option value="2nd">A+=9</option>
                    <option value="3rd">A=8</option>
                    <option value="4th">B+=7</option>
                    <option value="5th">B=6</option>
                    <option value="6th">C+=5</option>
                    <option value="7th">P=4</option>
                    <option value="8th">F=0</option>
                </select>
                <label style="color:rgb(10, 6, 6)"><b>course </b>
                    <input type="text" placeholder="course name " name="uname" id="name" pattern="[a-zA-Z]+" title="Name shld contain alphabets." required></label>
                <label style="color:rgb(8, 5, 5)"><b>credits </b>
                    <input type="text" placeholder="credit number" name="uname" id="name" pattern="[0-9]{1}" title="Name shld contain anumber" required></label>
                <label style="color:rgb(5, 3, 3)"><b>grade</b></label>
                <select name="state" class="form-control">
                    <option value="1st">O=10</option>
                    <option value="2nd">A+=9</option>
                    <option value="3rd">A=8</option>
                    <option value="4th">B+=7</option>
                    <option value="5th">B=6</option>
                    <option value="6th">C+=5</option>
                    <option value="7th">P=4</option>
                    <option value="8th">F=0</option>
                </select>
                <label style="color:rgb(19, 11, 11)"><b>course </b>
                    <input type="text" placeholder="course name " name="uname" id="name" pattern="[a-zA-Z]+" title="Name shld contain alphabets." required></label>
                <label style="color:rgb(0, 0, 0)"><b>credits </b>
                    <input type="text" placeholder="credit number" name="uname" id="name" pattern="[0-9]{1}" title="Name shld contain anumber" required></label>
                <label style="color:rgb(0, 0, 0)"><b>grade</b></label>
                <select name="state" class="form-control">
                    <option value="1st">O=10</option>
                    <option value="2nd">A+=9</option>
                    <option value="3rd">A=8</option>
                    <option value="4th">B+=7</option>
                    <option value="5th">B=6</option>
                    <option value="6th">C+=5</option>
                    <option value="7th">P=4</option>
                    <option value="8th">F=0</option>
                </select>
                <label style="color:rgb(0, 0, 0)"><b>course </b>
                    <input type="text" placeholder="course name " name="uname" id="name" pattern="[a-zA-Z]+" title="Name shld contain alphabets." required></label>
                <label style="color:rgb(12, 7, 7)"><b>credits </b>
                    <input type="text" placeholder="credit number" name="uname" id="name" pattern="[0-9]{1}" title="Name shld contain anumber" required></label>
                <label style="color:rgb(0, 0, 0)"><b>grade</b></label>
                <select name="state" class="form-control">
                    <option value="1st">O=10</option>
                    <option value="2nd">A+=9</option>
                    <option value="3rd">A=8</option>
                    <option value="4th">B+=7</option>
                    <option value="5th">B=6</option>
                    <option value="6th">C+=5</option>
                    <option value="7th">P=4</option>
                    <option value="8th">F=0</option>
                </select>
                <h1 style="color:rgb(2, 1, 1);">CALCULATION OF CGPA</h1>
                <p style="color:rgb(12, 6, 6);">percentage of marks can be calculated as follows:
                    Subject wise percentage of marks = 9.5 * GP of the subject
                    Overall percentage of marks = 9.5 * CGPA

                    Example: If a student have got total 9.6 CGPA, it means his/her total percentage of marks: 9.5*9.6 =
                    91.2%</p>
                <div class="submit">
                    <button onclick="window.location.href='result.php';"> submit</button>
                    <span><a href='result.php' style="color:blue"><br></a></span>
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

    </html><?php
        } else {
            header("Location:index.php");
        }
