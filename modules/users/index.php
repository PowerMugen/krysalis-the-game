<div id="content">
	<?php include  FILEROOT.'layout/partials/menu_content.php'; ?>
	<h2>mon profil</h2>
    <div id="page">
    	<p><strong>pseudo : </strong> BOF</p>
        <p><strong>Adresse mail : </strong> jean-christian.dubois@hotmail.fr</p>
        <label><input type="checkbox" name="IRLJoueurs" />Voulez vous apparaitre sur la carte des joueurs proches?</label><a href="">En savoir plus</a>
		<div id="modif_profil">
            <p>modifier/completer mon profil</p>    
            <img src="images/avatar.jpg" alt="votre avatar" width="121" height="138"/><a href=""> Changer ma photo de profil</a><br/>
            <form action="" id="modifProfil" method="post">
                <fieldset>
                    <label>Pseudo : <input type="text"/></label><br/>
                    <label>Nom : <input type="text"/></label><br/>
                    <label>Prenom : <input type="text" /></label><br/>
                    <label>Adresse : <input type="text" /></label><br/>
                    <label>Complément d'adresse : <input type="text" /></label><br/>
                    <label>ville : <input type="text" /></label><br/>
                    <label>Code postal : <input type="text" /></label><br/>
                    <label>Date de naissance : <input type="text"/></label><br/>
                    <label>Sexe : <input name="sexe" type="radio" value="homme" />homme</label>
                    <label><input name="sexe" type="radio" value="femme" />femme</label>
                    <input type="submit" value="valider"/>
                    <input type="reset" value="r&eacute;initialiser"/>
            </fieldset>
            </form>
       </div>
    </div>
     <div id="fin_page"></div>
     <br class="clear"/>
</div>