<?php
if (!isset($_POST["id"])) {
	header('location: index.php?p=utilisateurs.index');
}
$utilisateurs = App::getInstance()->getTable('utilisateur')->toutParService($_POST["id"]);
$services = App::getInstance()->getTable('Service')->all();



?>




<h2>liste de tout les utilisateurs par service</h2>

<form class="form-inline" action="index.php?p=utilisateurs.service" method="post">
	<select name="id" class="form-control">
			<?php foreach ($services as $service): ?>
				<option value="<?= $service->id ?>" <?= ($_POST["id"] == $service->id)? 'selected="selected"' : '' ?>>
                <?= $service->nom_du_service ?>    
            </option>
			<?php endforeach ?>
	</select>
	<input type="submit" class="btn btn-primary form-control" value="filtrer">	
</form>
<table class="table  table-bordered">
<thead>

	<tr>
		<th>Nom Prénom</th>
		<th>Age</th>
		<th>Adresse complete</th>
		<th>Numéro de téléphone</th>
		<th>Service</th>

	</tr>
</thead>
<tbody>
<?php foreach ($utilisateurs as $utilisateur):?>


	<tr>
		<td><?= $utilisateur->identite;?></td>
		<td><?= $utilisateur->age;?></td>
		<td><?= $utilisateur->adresse_complete;?></td>
		<td><?= $utilisateur->numero_de_telephone;?></td>
		<td><?= $utilisateur->service;?></td>
	</tr>

<?php endforeach ?>
</tbody>
</table>
