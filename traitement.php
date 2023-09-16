<!DOCTYPE html>
<html>
<head>
    <title>Traitement du formulaire</title>
</head>
<body>
    <h1>Informations du club</h1>
    
    <?php
    
    if (isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['description']) && isset($_GET['adresse']) && isset($_GET['domaine'])) {
        
        $id = $_GET['id'];
        $nom = $_GET['nom'];
        $description = $_GET['description'];
        $adresse = $_GET['adresse'];
        $domaine = $_GET['domaine'];
        
       
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Adresse</th>
                    <th>Domaine</th>
                </tr>
                <tr>
                    <td>$id</td>
                    <td>$nom</td>
                    <td>$description</td>
                    <td>$adresse</td>
                    <td>$domaine</td>
                </tr>
              </table>";
    } else {
        echo "Champs manquants";
    }
    ?>
</body>
</html>
