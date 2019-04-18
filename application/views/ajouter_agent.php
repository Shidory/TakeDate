<div>
<h3 >Ajouter Agent</h3>
<?php echo form_open(''); ?>
<div>
    <p>Nom :</p>
    <input type="text" name="nom"  class="champ" required>
    <p>Numero matricule :</p>
    <input type="text" name="num_mat"  required>
    <p>Adresse :</p>
    <input type="text" name="adresse" required>
    <p>Telephone :</p>
    <input type="text" nama="telephone" required>
    <p>Email :</p>
    <input type="text" name="email">
</div>
<br>
<input type="submit" value="Envoyer">
<?php echo form_close() ?>
</div>