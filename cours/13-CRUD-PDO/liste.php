<?php
require_once "functions/utils.php";

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead

template_en_tete_page("Employés");
?>

    <!-- PAGE LISTE EMPLOYES -->
    <div>
        <h1>Employes</h1>
        <hr>
        <p>
            <a href="ajouter.php" class="btn btn-primary">Ajouter un employé</a>
        </p>
        <div>
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Prenom</th>
                    <th>Date de naissance</th>
                    <th>Fonction</th>
                    <th>Email</th>
                    <th>Salaire</th>
                    <th colspan="2">Actions</th>
                </tr>

                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['prenom']."</td>";
                    echo "<td>".$res['ddn']."</td>";
                    echo "<td>".$res['fonction']."</td>";
                    echo "<td>".$res['email']."</td>";
                    echo "<td>".$res['salaire']."</td>";
                    echo "<td><a href=\"modifier.php?id=$res[id]\">Modifier</a> | <a href=\"supprimer.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Supprimer</a></td>";
                }
                ?>

                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Badji</td>
                    <td>01-01-2000</td>
                    <td>PDG</td>
                    <td>badji@dawm.ge</td>
                    <td>25000</td>
                    <td><a href=\"modifier.php?id=$res[id]\"><i class="fas fa-user-edit"></i></a></td>
                    <td><a href="supprimer.php?id=$res[id]\"><i class="fas fa-user-slash"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Souly</td>
                    <td>10-01-2000</td>
                    <td>PDG</td>
                    <td>souly@dawm.ge</td>
                    <td>25000</td>
                    <td><a href=\"modifier.php?id=$res[id]\"><i class="fas fa-user-edit"></i></a></td>
                    <td><a href="supprimer.php?id=$res[id]\"><i class="fas fa-user-slash"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Talia</td>
                    <td>12-01-2000</td>
                    <td>PDG</td>
                    <td>tali@dawm.ge</td>
                    <td>25000</td>
                    <td><a href=\"modifier.php?id=$res[id]\"><i class="fas fa-user-edit"></i></a></td>
                    <td><a href="supprimer.php?id=$res[id]\"><i class="fas fa-user-slash"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php
template_pied_page();
?>