<?php
$utilisateurs = App::getInstance()->getTable('utilisateur')->allWithService();
$services = App::getInstance()->getTable('Service')->all();



?>




<h2>liste de tout les utilisateurs</h2>

<form action="index.php?p=utilisateurs.service" method="post" class="form-inline">
	<select name="id" class="form-control">
			<?php foreach ($services as $service): ?>
				<option value="<?= $service->id ?>"><?= $service->nom_du_service ?></option>
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
		<th>action</th>

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
		<td><a href="index.php?p=utilisateurs.delete&id=<?= $utilisateur->id; ?>">delete</a></td>
	</tr>

<?php endforeach ?>
</tbody>
</table>
