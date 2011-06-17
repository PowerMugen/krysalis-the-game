<div id="menu_main">
    <form id="recherche" action="recherche.php" method="post">
                <fieldset>
                    <!--<legend>Que recherchez-vous?
                    </legend>-->
                    <label for="champ_recherche"><input id="champ_recherche" name="champ_recherche" type="text" value="recherche par mot clé"/></label>
                    
                    <input type="submit" value="rechercher" id="btn_recherche"/>
                </fieldset>
    </form>
    <ul id="ul_principal">
        <li id="krysalis" onmouseover="display_ss_menu('ssMenu_home');" onmouseout="display_ss_menu('ssMenu_home');">
        	<a href="krysalis.html">Krysalis</a>
            <ul id="ssMenu_home" class="hidden" >
                <li><a href="javascript : void(0);">l'histoire</a></li>
                <li><a href="javascript : void(0);">comment jouer</a></li>
                <li><a href="javascript : void(0);">mener l'enquête</a></li>
                <li><a href="javascript : void(0);">question fréquentes</a></li>
            </ul>
        </li>
        <li id="enquete">
        	<a href="investigation/" >Enquete</a>
        </li>
        <li id="joueurs" onmouseover="display_ss_menu('ssMenu_joueurs');" onmouseout="display_ss_menu('ssMenu_joueurs');">
        	<a href="users/">Joueurs</a>
            <ul id="ssMenu_joueurs" class="hidden">
                <li><a href="javascript : void(0);">informations personnelles</a></li>
                <li><a href="javascript : void(0);">avancée dans le jeu</a></li>
                <li><a href="javascript : void(0);">échangez vos cartes</a></li>
                <li><a href="javascript : void(0);">téléchargements</a></li>
            </ul>
        </li>
        <li id="communaute" onmouseover="display_ss_menu('ssMenu_communaute');" onmouseout="display_ss_menu('ssMenu_communaute');">
        <a href="">Communauté</a>
            <ul id="ssMenu_communaute" class="hidden">
                <li><a href="javascript : void(0);">carte des joueurs</a></li>
                <li><a href="http://www.krysalis-boardgame.com/blog/">blog</a></li>
                <li><a href="http://www.krysalis-boardgame.com/forum/">forum</a></li>
                <li><a href="javascript : void(0);">inviter des amis</a></li>
            </ul>
        </li>
        <li id="jeux">
        	<a href="">Mini-jeux</a>
        </li>
        <!--<li><a href="test/test.html"> erreur </a></li>
        <li><a href="home/contact.html"> contact </a></li>-->
    </ul>
</div>