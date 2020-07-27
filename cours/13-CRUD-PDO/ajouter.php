<?php
require_once "functions/utils.php";

if(isset($_POST['Valider'])) {
    $prenom = mysqli_real_escape_string($mysqli, $_POST['prenom']);
    $ddn = mysqli_real_escape_string($mysqli, $_POST['ddn']);
    $fonction = mysqli_real_escape_string($mysqli, $_POST['fonction']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $salaire = mysqli_real_escape_string($mysqli, $_POST['salaire']);

    // checking empty fields
    if(empty($prenom) || empty($ddn) || empty($fonction) || empty($email) || empty($salaire)) {

        if(empty($prenom)) {
            echo "<font color='#ff1493'>Entrez votre prenom</font><br/>";
        }

        if(empty($ddn)) {
            echo "<font color='#ff1493'>Entrez votre ddn</font><br/>";
        }

        if(empty($fonction)) {
            echo "<font color='#ff1493'>Entrez votre fonction</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='#ff1493'>Entrez votre email</font><br/>";
        }

        if(empty($salaire)) {
            echo "<font color='#ff1493'>Entrez votre salaire</font><br/>";
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)

        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO users(prenom,ddn,fonction,email,salaire) VALUES('$prenom','$ddn','$fonction','$email','$salaire')");

        //display success message
        echo "<font color='green'>ajout avec succès";
        echo "<br/><a href='liste.php'>resultat</a>";
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