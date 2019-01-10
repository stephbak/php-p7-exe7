<?php
include ('userCtrl.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>php part7 exe6</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <?php if ($success == true) { ?>
            <p><?= $civility . ' ' . $lastname . ' ' .  $firstname  . ' ' . $myfile['basename'] ?></p><!--basename pour afficher le nom complet du fichier-->
            <p><a href="index.php">retour</a></p>
        <?php } else { ?>
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="civility">Civilité</label>
                    <select name = "civility" id="civility" class="form-control" >
                        <option value=""></option>
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                    </select>
                </div>
                <p><?php echo (empty ($formError['civility'])) ? '' :  $formError['civility'] ;?></p>
                <div class="form-group">
                    <label class="col-form-label" for="lastname">Nom</label>
                    <input  id="lastname" name="lastname" type="text" class="form-control" placeholder="Nom"  />
                </div>
                <p><?php echo(empty ($formError['lastname'])) ? '' :  $formError['lastname'] ; ?></p>
                <div class="form-group">
                    <label class="col-form-label" for="firstname">Prénom</label>
                    <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Prénom"  />
                </div>
                <p><?php echo(empty ($formError['firstname'])) ? '' :  $formError['firstname'] ; ?></p>
                                <label for="myfile">Envoyer un fichier : </label><input type="file" name="myfile" />
                                <p><?php echo(empty ($formError['myfile'])) ? '' :  $formError['myfile'] ; ?></p>
                <button type="submit" name="submit" class="btn btn-success">soumettre</button>
            </form>
        <?php } ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
