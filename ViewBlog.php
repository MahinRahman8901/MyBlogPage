<?php
session_start();
include "data.php"
?>

<!DOCTYPE html>
<html>
    <title>Welcome To The Blog</title>

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

    
    <div class = "title">
        <h1><b>Welcome To The Blog</b></h1>
    </div>


    <?php 

        $total = array();//creates array stores in variable total
        while ($row = mysqli_fetch_array($result))//checks 
        {
            array_push($total, $row);//each row of information from sql table is pushed into array total
        } 

            $length = count($total);//sets the length to the total of the array
            for ($i=0; $i<$length; $i++) //simple bubble sort method using method
            {
                for ($j=0; $j<$length; $j++) 
                {
                    if ($total[$i][3] > $total[$j][3]) //checks if the value of i is more recent then the data in variable j
                    {
                        $temp = $total[$i];
                        $total[$i] = $total[$j];
                        $total[$j] = $temp;
                    }
                }
            }

            for ($i=0; $i<$length; $i++){//for each element in array total it prints corrosponding information
                echo "<h2>" . $total[$i][1] . "</h2>";
                echo $total[$i][2] . "<br><br>";
                echo $total[$i][3]. "<br><br>";
            }

    ?>

    <br>
    <aside>
        <div class = "Entry">
                <fieldset>
                        <br>
                        <form>
                            <button type="submit" formaction="addpost.php">Create Entry</button><br><br><br>
                            <button type="submit" formaction="logout.php">Logout</button>                        
                        </form>

                </fieldset>
            </div>
            
            
           
    </aside>

    <br><br><br><br><br><br><br><br>
<footer>
    <h5>Mahin Rahman 2021 @ Copyright 2021</h5>
</footer>
<hr class =“line”>
    
    
</html>
