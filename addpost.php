<?php
session_start();
include "data.php"
?>


<!DOCTYPE html>
<html>
    <title> AddPost</title>

    <head>
        <meta charset="utf-8">
        <script src="function.js"></script>
    </head>
    <!-- References both stylesheet and reset css files -->
    <link rel="resetsheet" href="reset.css" type="text/css"/>
    <link rel="stylesheet" href="stylesheet.css"type="text/css"/>

    <style>
    html{
            background: url('3574.jpg') no-repeat center center fixed;
            -webkit-background-size:cover;
            -moz-background-size: cover;
            background-size: cover;

        }
    </style>

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

        
        <div class = "blogpost">
            <form method = "POST" action = "addpost.php" onsubmit =  "return formValidate(event)">

                <p><input type = "text" name="title" placeholder="Enter Title" id="Title"></p>

                <textarea rows = "20" cols = "80" input type = "text" placeholder="Enter Text" id="text" name= "body"></textarea>

                <br><br><button name="newpost">Add Entry</button>
                
                <p><input type="button" name ="Clear" value="Clear " onclick="ClearButton()"></p>

            </form>
        
        </div>


        <br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <h5>Mahin Rahman 2021 @ Copyright 2021</h5>
</footer>
<hr class =“line”>



        

</html>