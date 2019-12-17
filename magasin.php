
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

    
    <?php $recup = $connection->query('SELECT images, descriptions, prix FROM produit ORDER BY id'); ?>

        
            <div class="col-9">
                <div class="row test">


                    
                    <?php 
                    while ($donnees = $recup->fetch()){ ?>
                        <div class="col-4">
                        <br><img id="img1" src="<?= $donnees['images']?>" alt="affiche image"><br>
                        <?php echo $donnees['descriptions'] . '<br>';
                        echo $donnees['prix'] . ' € <hr><br><br>'; ?>
                        </div>
                    <?php } ?>
                
                    
                
                </div>
                    

                
                
                
                
            
            </div>

        
    </div>
    

    <?php include('vue/footer.php'); ?>
</body>
</html>