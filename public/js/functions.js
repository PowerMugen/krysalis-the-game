// JavaScript Document
function display_ss_menu( element ) {
				
				//alert( element );
				
				//Récupération de la class en cours d'utilisation
				var etat = document.getElementById( element ).className;
				//alert( etat );
				
				if( etat == 'hidden' ) {
					
					document.getElementById( element ).className = "visible";
					//Vers JQUERY
					//$('#' + element).attr('class','show_ss_menu');
					
				} else {
					
					document.getElementById( element ).className = "hidden";
					
				}
				
				
				
			}