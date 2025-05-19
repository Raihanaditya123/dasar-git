<!DOCTYPE html>
<html>
    <body>
        <form action="coba.php" method="get">
            <label for="name">name:</label>
            <input type="text" name="name">
            <label for="email">email:</label>
            <input type="email" name="email">
            <input type="submit" value="kirim">
        </form>
        
        <?php
     
        if (isset($_GET['email'])) {
            $x = $_GET['email'];
            echo $x;
        }
          
        ?>
    </body>
</html>