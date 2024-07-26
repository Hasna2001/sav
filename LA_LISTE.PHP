<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Interventions</title>
    <link rel="stylesheet" type="text/css" href="INDEX.CSS">
</head>

<body>
    <h1>Liste des Interventions</h1>
    <?php
		include 'database.php';

        $req = $bdd->query('SELECT * FROM listeIntervention');
        
        ?>

		<table border="1px">
			<tr>
				<th>Numero</th>
				<th>Structure</th>
				<th>adresse</th>
				<th>contact</th>
				<th>intervenants</th>
				<th>process</th>
				<th>intervention</th>
				<th>resultats</th>
				<th>date</th>
			</tr>
			<tr>
				<?php foreach ($req as $requete) {?>
				<td><?= $requete['numero']?></td>
				<td><?= $requete['structure']?></td>
				<td><?= $requete['adresse']?></td>
				<td><?= $requete['contact']?></td>
				<td><?= $requete['intervenants']?></td>
                <td><?= $requete['process']?></td>
                <td><?= $requete['intervention']?></td>
                <td><?= $requete['resultats']?></td>
                <td><?= $requete['date']?></td>
			</tr>
			<?php } 
			?>
		</table>
    <a href="INDEX.HTML">Retour</a>
</body>
</html>
