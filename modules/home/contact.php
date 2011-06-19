<div id="content">
	<?php include  FILEROOT.'layout/partials/menu_content.php'; ?>
	<h2>contact</h2>
    <div id="page">
    	<div id="contact">
            <address><strong>GTFKROU</strong><br/>17 rue Clément<br/>33000 BORDEAUX</address>
            <form id="contact_form" method="post" action="contact_form.php">
                <fieldset>
                    <label><strong> Pseudo : </strong><input type="text"/></label>
                    <label><strong> E-mail : </strong><input type="text"/></label>
                    <p>
                    	<label for="com"><strong>Commentaire</strong><input name="com"  id="com"type="radio"/></label>
                    	<label for="probleme" class="radio"><strong>Problème</strong><input type="radio" name="com"  id="probleme"/></label>
                    </p>
                    <label id="champ_com"><textarea></textarea></label>
                    <div><input type="submit" value="envoyer" class="btn"/></div>
                </fieldset>
            </form>
        </div>
    </div>
    <div id="fin_page"></div>
     <br class="clear"/>
</div>
    	