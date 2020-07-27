<?php
require_once "functions/utils.php";

if(isset($_POST['update']))
{

    $id = mysqli_real_escape_string($mysqli, $_POST['id']);

    $prenom = mysqli_real_escape_string($mysqli, $_POST['prenom']);
    $ddn = mysqli_real_escape_string($mysqli, $_POST['ddn']);
    $fonction = mysqli_real_escape_string($mysqli, $_POST['fonction']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $salaire = mysqli_real_escape_string($mysqli, $_POST['salaire']);

    // empty field check
    if(empty($prenom) || empty($ddn) || empty($fonction) || empty($email) || empty($salaire)) {

        if(empty($prenom)) {
            echo "<font color='red'>prenom field is empty.</font><br/>";
        }

        if(empty($ddn)) {
            echo "<font color='red'>ddn field is empty.</font><br/>";
        }

        if(empty($fonction)) {
            echo "<font color='red'>fonction field is empty.</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }

        if(empty($salaire)) {
            echo "<font color='red'>salaire field is empty.</font><br/>";
        }
    } else {
        //charge la table
        $result = mysqli_query($mysqli, "UPDATE users SET prenom='$prenom',ddn='$ddn',fonction='$fonction',email='$email',salaire='$salaire' WHERE id=$id");

        //page a modifier
        header("Location: liste.php");
    }
}
?>
<?php
//table des employés
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $prenom = $res['prenom'];
    $ddn = $res['ddn'];
    $fonction = $res['fonction'];
    $email = $res['email'];
    $salaire = $res['salaire'];
}
?>

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