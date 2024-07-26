<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Inclure la connexion à la base de données
    require_once 'database.php';

    // Récupérer les données du formulaire
    $numero = $_POST['numero'];
    $structure = $_POST['structure'];
    $adresse = $_POST['adresse'];
    $contact = $_POST['contact'];
    $intervenants = $_POST['intervenants'];
    $process = $_POST['process'];
    $intervention = $_POST['intervention'];
    $resultats = $_POST['resultats'];
    $date = $_POST['date'];

    // Préparer et exécuter la requête d'insertion
    $req = $bdd->prepare('INSERT INTO listeIntervention(numero, structure, adresse, contact, intervenants, process, intervention, resultats, date) VALUES(:numero, :structure, :adresse, :contact, :intervenants, :process, :intervention, :resultats, :date)');
    $req->execute(array(
        ':numero' => $numero,
        ':structure' => $structure,
        ':adresse' => $adresse,
        ':contact' => $contact,
        ':intervenants' => $intervenants,
        ':process' => $process,
        ':intervention' => $intervention,
        ':resultats' => $resultats,
        ':date' => $date
    ));

    // Redirection vers la page d'index après l'insertion
    header("Location: INDEX.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Intervention de GIGA-ELECTRONIC.SARL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            box-sizing: border-box;
            overflow-y: auto;
            max-height: 90vh;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], input[type="date"], input[type="number"], select {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            text-align: center;
            display: block;
            margin-top: 20px;
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter une Nouvelle Intervention</h1>

        <form method="POST" action="AJOUTS_INTERVENTIONS.php">
            <label for="numero">Numéro de fiche:</label>
            <input type="number" id="numero" name="numero" required>

            <label for="structure">Structure:</label>
            <input type="text" id="structure" name="structure" required autocomplete="off">

            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" required autocomplete="off">

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required autocomplete="off">

            <label for="intervenants">Intervenants:</label>
            <input type="text" id="intervenants" name="intervenants" required autocomplete="off">

            <label for="process">Process:</label>
            <select id="process" name="process" required>
                <option value="A distance">A distance</option>
                <option value="Installation">Installation</option>
                <option value="Désinstallation">Désinstallation</option>
                <option value="Prestataire">Prestataire</option>
                <option value="Rapatriement">Rapatriement</option>
                <option value="Sur site">Sur site</option>
                <option value="Restitution">Restitution</option>
                <option value="Autres">Autres</option>
            </select>

            <label for="intervention">Intervention:</label>
            <input type="text" id="intervention" name="intervention" required autocomplete="off">

            <label for="resultats">Résultats:</label>
            <input type="text" id="resultats" name="resultats" required autocomplete="off">

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <input type="submit" value="Ajouter">
        </form>
        <a href="INDEX.html">Retour</a>
    </div>
</body>
</html>
