<!DOCTYPE html>
<html>
    <title>Blog</title>

<head>
        <meta charset="utf-8">
    </head>
    <!-- References both stylesheet and reset css files -->
    <link rel="resetsheet" href="reset.css" type="text/css"/>
    <link rel="stylesheet" href="stylesheet.css"type="text/css"/>

        <!-- The Navigation bar is in the header and I used a list to show the bars and if you click on the CV it opens a new page that includes my CV information-->
        <header>
            <div class = "nav">
                <nav>
                    <ul>
                        <b>Mahin Rahman</b><br>
                        <a href="miniproject.html">About Me</a></li>
                        <a href="MahinCV2021.pdf" download="MahinRahmanCV">CV</a>  <!-- This allows the user to click on the CV link and automatically download my CV-->
                        <a href="project.html">Projects</a>
                        <a href="blog.php">Blog</a></li>
                        <a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <style>
        html{
            background: url('3574.jpg') no-repeat center center fixed;
            -webkit-background-size:cover;
            -moz-background-size: cover;
            background-size: cover;

        }
    </style>

        <!--There are 2 seperate forms, One to login and one for the user to register -->
    <section>
        <div class = "Register">
            <h1>Blog Post</h1>
            <fieldset>
                <legend><h2>Register</h2></legend>
                    <form action ="registration.php" method = "POST" >
                        <p> <label>Email:</label>
                            <input type="email" name="Email" placeholder="Enter Email."> <!--Has email validation meaning it must include an "@" for the form to be submitted -->
    
                            <label>UserName:</label>
                            <input type="text" name="Name" placeholder="Enter Username.">
        
                            <label>Password:</label>
                            <!--Password has its own validation where there must be a capital letter, upper case and lower case and there must be atleast 7 letters in the password -->
                            <input type="password" required="" name="Password" placeholder="Enter Password." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>>
                        </p>
                        <button type="submit">Register</button><!--Register Button -->
                        
                    </form>
            </fieldset>
        </div>
    </section>

        <br>
    <article>
        <div class = "Login"><!--Similar to Register but only takes users username and password to login -->
            <fieldset>
                <legend><h2>Login</h2></legend>
                    <form action ="login.php" method = "POST" >
    
                        <label>UserName:</label>
                        <input type="text" name="Name" placeholder="Enter Username.">
        
                        <label>Password:</label>
                        <input type="password" required="" name="Password" placeholder="Enter Password." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>>
                        
                        <button type="submit">Login</button>
                        
                        <label>Forgot Password?</label><!--Create a checkbox incase the user has forgotten their password-->
                        <input type="checkbox" name="accept">

                    </form>
            </fieldset>
        </div>
        <br><br>
    </article>

    <footer>
        <div class = "blogImage">

            <figure>
                <img src ="https://www.nicepng.com/png/full/246-2464467_blog-mojsajt-sites-blogs.png" alt="blogimage" style="width:300px;height:300px;" class="center">
        </div>
    </footer>

    <br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <h5>Mahin Rahman 2021 @ Copyright 2021</h5>
</footer>
<hr class =“line”>


</html>