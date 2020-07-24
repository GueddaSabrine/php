<?php
require_once "functions/utils.php";

if(isset($_POST['Valider'])) {

    /** @var TYPE_NAME $mysqli */
    /** @var TYPE_NAME $prenom */
    $prenom = mysqli_real_escape_string($mysqli, $_POST['prenom']);
    /** @var TYPE_NAME $ddn */
    $ddn = mysqli_real_escape_string($mysqli, $_POST['ddn']);
    /** @var TYPE_NAME $fonction */
    $fonction = mysqli_real_escape_string($mysqli, $_POST['fonction']);
    /** @var TYPE_NAME $email */
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    /** @var TYPE_NAME $salaire */
    $salaire = mysqli_real_escape_string($mysqli, $_POST['salaire']);

    // checking empty fields
    if(empty($prenom) || empty($ddn) || empty($fonction)|| empty($email) || empty($salaire)) {

        if(empty($prenom)) {
            echo "<font>prenom</font><br/>";
        }

        if(empty($ddn)) {
            echo "<font>ddn</font><br/>";
        }

        if(empty($fonction)) {
            echo "<font>fonction</font><br/>";
        }

        if(empty($email)) {
            echo "<font>email</font><br/>";
        }

        if(empty($salaire)) {
            echo "<font>salaire</font><br/>";
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Valider</a>";
    } else {
        // if all the fields are filled (not empty)

        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO user(prenom,ddn,fonction,email,salaire) VALUES('$prenom','$ddn','$fonction','$email','$salaire')");

        //display success message
        echo "<font>ajout avec succès";
        echo "<br/><a href='index.php'>Resultat</a>";
    }
}

template_en_tete_page("Ajouté");
?>
    <!-- PAGE AJOUTER UN EMPLOYE -->
    <div>
        <h1>Céer Employé</h1>
        <hr>
        <div>
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="birth">Date de naissance</label>
                    <input type="text" class="form-control" placeholder="jj/mm/aa" id="birth">
                </div>
                <div class="form-group">
                    <label for="prenom"></label>
                    <input type="texte" class="form-control" placeholder="Entrez votre prenom" id="prenom">
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" placeholder="Entrez votre email" id="email">
                </div>
                <div class="form-group">
                    <label for="titre"></label>
                    <input type="texte" class="form-control" placeholder="Entrez votre titre" id="titre">
                </div>
                <div class="form-group">
                    <label for="salaires"></label>
                    <input type="texte" class="form-control" placeholder="Entrez votre salaires" id="salaires">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>
    </div>

<?php
template_pied_page();
?>