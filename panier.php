<?php
    $server = 'localhost';
    $login = 'root';
    $pass = '';
    
    try {
        $connection = new PDO("mysql:host=$server;dbname=present", $login, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
     include('vue/header.php'); ?>






<?php include('vue/footer.php'); ?>
</body>
</html>