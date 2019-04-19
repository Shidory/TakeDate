<div>
<h3 >Prendre un rendez-vous</h3>
<?php echo form_open('rdv/rdvController/prendre_rdv'); ?>
<div>
    <p>Motif :</p>
    <input type="text" name="motif"  class="champ" required>
    <p>Date :</p>
    <input type="date" name="date" required>
    <p>Heure :</p>
    <input type="text" name="heure" required>
    <p>Durée :</p>
    <input type="text" name="duree" required>
    <p>Etat :</p>
    <input type="text" name="etat" required>
    <p>Commentaire :</p>
    <input type="text" name="commentaire" required>
    
</div>
<br>
<input type="submit" value="Envoyer">
<?php echo form_close() ?>
</div>