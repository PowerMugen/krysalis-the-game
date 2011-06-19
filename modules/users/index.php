<div id="content">
	<?php include  FILEROOT.'layout/partials/menu_content.php'; ?>
	<h2>mon profil</h2>
    <div id="page">
    	<p><strong>pseudo : </strong> BOF</p>
        <p><strong>Adresse mail : </strong> jean-christian.dubois@hotmail.fr</p>
        <p><label><input type="checkbox" name="IRLJoueurs" />Voulez vous apparaître sur la carte des joueurs proches?</label><a href="">En savoir plus</a></p>
			<div id="profil"><p>modifier/completer mon profil</p>
           <form action="" id="modif_profil" method="post">
                <fieldset id="avatar">
                   <img src="images/avatar.jpg" alt="votre avatar" width="121" height="138"/><a href=""> Changer ma photo de profil</a>
                </fieldset>
                <fieldset id="infos">
                    <label><strong>Pseudo : </strong><input type="text"/></label>
                    <label><strong>Nom : </strong><input type="text"/></label>
                    <label><strong>Prenom : </strong><input type="text" /></label>
                    <label><strong>Adresse : </strong><input type="text" /></label>
                    <label><strong>Complément d'adresse : </strong><input type="text" /></label>
                    <label><strong>ville : </strong><input type="text" /></label>
                    <label><strong>Code postal : </strong><input type="text" /></label>
                    <label><strong>Date de naissance : </strong>
                        <select id="birthday">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21" selected="selected">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                         <select>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03" selected="selected">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                         <select>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985" selected="selected">1985</option>
                            <option value="1984">1984</option>
                        </select>
                    </label>
                    <p>
                    	<strong>Sexe : </strong><label for="homme" class="radio">homme<input id="homme" name="sexe" type="radio" value="homme" /></label>
                    	<label for="femme" >femme<input id="femme"name="sexe" type="radio" value="femme" /></label>
                    </p>
                    <input type="submit" value="valider" class="btn"/>
                    <input type="reset" value="réinitialiser" class="btn"/>
            	</fieldset>
            </form>
       </div>
    </div>
     <div id="fin_page"></div>
     <br class="clear"/>
</div>