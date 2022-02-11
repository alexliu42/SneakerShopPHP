<?php
  error_reporting(E_ERROR | E_PARSE);
  // Import functions
  require_once('php/validate.php');
  validate();
  submission();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Reservation | Fresh Kicks</title>
        <link rel="stylesheet" href="css/general.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="js/form.js"></script>
   
    </head>
    <body>
        <header>
            <h1>Fresh Kicks</h1>
        </header>
        <nav>
            <a href="index.html" title="Home">Home</a> |
            <a href="album.html" title="Album">Album</a> |
            <a href="#" title="reservation">Reservation</a> |
            <a href="documentation.html" title="Documentation">Documentation</a>
        </nav>
        <main>
            <div>
                <h2>Reservation</h2>    
                <div class="reservation">
                    <h3>Please complete the following form to reserve the shoes you want</h3>
                    <hr>
                    <form  action="reservation.php" method="post">
                        <label for="fname">First Name: </label>
                        <input type="text" name="fname" id="fname"><br>
                        <?php the_validation_message('fname'); ?><br>
                        <label for="lname">Last Name: </label>
                        <input type="text" name="lname" id="lname"><br>
                        <?php the_validation_message('lname'); ?><br>
                        <label for="email">Email: </label>
                        <input type="text" name="email" id="email"><br>
                        <?php the_validation_message('email'); ?><br>
                        <label for="phone">Phone: </label>
                        <input type="text" name="phone" id="phone"><br>
                        <?php the_validation_message('phone'); ?><br>
                        <hr>
                        <label for="shoes">Shoes: </label>
                        <select name="shoes" id="shoes">
                        </select>
                        <br><br>
                        <button type="button">Add more shoes</button><br><br>
                        <hr>
                        <input class="submit" type="submit" value="Submit">
                        <?php the_results(); ?>

                    </form>
                </div>
                
            </div>
        </main>
        <footer>
            <nav>
                <a href="https://www.facebook.com/alex.liu.9256" title="Find me on Facebook"><img src="src/facebook.png" alt="Facebook" width="50" height="50"></a> |
                <a href="https://www.instagram.com/lcldawg/" title="Find me on Instagram"><img src="src/instagram5.jpg" alt="Instagram" width="50" height="50"></a> |
                <a href="https://github.com/alexliu42" title="Find me on GitHub"><img src="src/github2.png" alt="GitHub" width="50" height="50"></a> 
            </nav>
            <small><i>
                Copyright &copy; 2021 Alex Liu<br>
                <a href="mailto:alexliu42@yahoo.com.tw">alexliu42@yahoo.com.tw</a>
            </i></small>
        </footer>
    </body>
</html>