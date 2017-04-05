<a href="admin.php"><input class="btn btn-primary" type="submit" name="retour" value="retour"></a>

<h2>Liste des utilisateurs</h2>
<p><a href="admin.php?p=utilisateurs.add">Ajouter un utilisateur</a></p>

<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Nom, prénom</td>
			<td>Age</td>
			<td>Adresse</td>
			<td>Numéro de téléphone</td>
			<td>Service</td>
			<td>Action</td>
		</tr>
	</thead>

<?php foreach (App::getInstance()->getTable("Utilisateur")->allwithService() as $utilisateur): ?>
	<tr>
		<td><?= $utilisateur->identite ?></td>
		<td><?= $utilisateur->age ?></td>
		<td><?= $utilisateur->adresse.' '.$utilisateur->code_postal ?></td>
		<td><?= $utilisateur->numero_de_telephone ?></td>
		<td><?= $utilisateur->service ?></td>
		<td><form action="admin.php?p=utilisateurs.delete" method="post">
				<input type="hidden" name="id" value="<?= $utilisateur->id; ?>">
				<input class="btn btn-danger" type="submit" name="delete" value="Supprimer">
			</form>
		</td>
	</tr>
<?php endforeach;?>
</table>