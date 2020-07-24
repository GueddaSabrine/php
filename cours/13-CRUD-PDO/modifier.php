<?php
require_once "functions/utils.php";

if(isset($_POST['UPDATE']))
{


    /** @var TYPE_NAME $mysql */
    $id = mysqli_real_escape_string($mysql, $_POST['id']);

    /** @var TYPE_NAME $prenom */
    $prenom = mysqli_real_escape_string($mysql, $_POST['prenom']);
    /** @var TYPE_NAME $ddn */
    $ddn = mysqli_real_escape_string($mysql, $_POST['ddn']);
    /** @var TYPE_NAME $fonction */
    $fonction = mysqli_real_escape_string($mysql, $_POST['fonction']);
    /** @var TYPE_NAME $email */
    $email = mysqli_real_escape_string($mysql, $_POST['email']);
    /** @var TYPE_NAME $salaire */
    $salaire = mysqli_real_escape_string($mysql, $_POST['salaire']);

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

        if(empty($email)){
            echo "<font>email</font><br/>";
        }

        if(empty($salaire)){
            echo "<font color='red'>salaire</font><br/>";
        }
    } else {
        //charge nouvelle page
        $result = mysqli_query($mysql, "UPDATE user SET prenom='$prenom',ddn='$ddn',fonction='$fonction',email='$email',salaire='$salaire' WHERE id=$id");

        //redirige vers index
        header("Location: index.php");
    }
}

template_en_tete_page("Modifié");
?>
    <!-- PAGE AJOUTER UN EMPLOYE -->
    <div>
        <h1>Modifier Employé</h1>
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