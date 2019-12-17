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

//include 'header.php';



//include 'footer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>

<body>

    <div class="container">
    <h1>Cadeaux d'invités à moins de 3€</h1>
        <div class="row">
            <div class="col-6"><p>Marchand de bonheur depuis 2010, Les Petits Cadeaux est le spécialiste du petit cadeau d’invité de mariage chic et moderne. Boite à dragées personnalisée, petit cadeau d’assiette pas cher, badge personnalisé original, jolies boites coeur... le site propose une sélection originale de cadeaux pour les invités à personnaliser et des centaines d'étiquettes personnalisées pour les rendre tout à fait unique.</p></div>
            <div class="col-6"><p>Notre concept : tous les designs de la collection sont entièrement personnalisables, qu’il s’agisse d’y ajouter des prénoms, une date, quelques mots, mais aussi de modifier les couleurs du fond, de l’illustration ou du texte. Notre studio graphique peut, sur simple demande, adapter les étiquettes aux couleurs exactes choisies par nos clients. Notre nuancier exclusif de 70 teintes, des plus vives au plus délicates, est disponible en ligne.</p></div>
        </div>    
        <h3>Idées cadeaux</h3>    
        <?php
            $sql ="SELECT image FROM produit";
            $stmt = $connection->query($sql);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            print_r('<img src="'.$rows[0].'" alt="texte alternatif" />');
        ?>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>