<!DOCTYPE html>
<html>
    <head>
        <title>Phone Book</title>
    </head>
    <body>
        <h1>Phone Book</h1>
        <form action="./php/add.php" method="post">
            Name: <input type="text" name="contact-name">
            Phone: <input type="text" name="contact-number">
            <input type="submit" name="contact-submit">
        </form>
        <div id="contacts">
            <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            phpinfo(); ?>
        </div>
    </body>
</html>