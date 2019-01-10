<?php

/* création d un tableau formError */
$formError = array();
//par defaut la variable success est false.cette variable permet l affichage coté html.
// donc si on regarde html la variable etant sur false elle affiche le formulaire par defaut.
$success = false;

//SI l'entrée firstname existe on verifi si elle n est pas vide
//SI ce n est pas vide on passe la regex,et si tout est ok on crée la get_class_vars
//firstname.
//SI elle est vide on stok dans le tableau formerror l index firstname
//SI sa n existe pas on stok le message dans le tableau formerror
if (isset($_POST['submit'])) {
    if (isset($_POST['firstname'])) {
        if (!empty($_POST['firstname'])) {
            if (preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_POST['firstname'])) {
                $firstname = ' et votre prénom est : ' . htmlspecialchars($_POST['firstname']);
            } else {
                $formError['firstname'] = 'Veuillez rentrer un prénom valide.';
            }
        } else {
            $formError['firstname'] = 'Veuillez entrer votre prénom.';
        }
    }
    if (isset($_POST['lastname'])) {
        if (!empty($_POST['lastname'])) {
            if (preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_POST['lastname'])) {
                $lastname = ' votre nom est : ' . htmlspecialchars($_POST['lastname']);
            } else {
                $formError['lastname'] = 'Veuillez rentrer un nom valide.';
            }
        } else {
            $formError['lastname'] = 'Veuillez entrer votre nom.';
        }
    }
    if (!empty($_POST['civility'])) {
        $civility = ' Vous êtes : ' . htmlspecialchars($_POST['civility']);
    } else {
        $formError['civility'] = 'merci de choisir un genre!';
    }
    if (isset($_FILES['myfile'])) {
        if (!empty($_FILES['myfile'])) {
            $myfile = pathinfo($_FILES['myfile']['name']);
        }else{
            $formError['myfile'] = 'champ obligatoire';
        }
    }
// on vérifi le button et on compte le nombre d erreur du tableau.si il n y en a pas on
//passe success a true(ce qui donnera l affichage du p du html avec le message de reussite du form.
    if (count($formError) == 0) {
        $success = true;
    }
}
?>