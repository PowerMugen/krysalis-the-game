function init()
{
	// Apparition du 2eme niveau du menu principal
	
	slideBackground();
	//ssMenuMain();
	slideMenuContent();
	EmptyInput();
	// CARROUSEL JQUERY
	carrousel.init($('#carrousel'));
		
}
// Vider les champs input type text lors d'un focus
EmptyInput = function(){
	$('#connexion input[type=text]').focus(function(){$(this).attr('value','');});
	$('#connexion input[type=password]').focus(function(){$(this).attr('value','');});
	$('#recherche input[type=text]').focus(function(){$(this).attr('value','');});
}


// Apparition du 2eme niveau du menu principal
/*ssMenuMain = function(){
		$('#ul_principal li').each(function(){
			/*$(this).hover(function(){
				$(this +' ul').className = 'visible';	
			},function(){
				$(this).find('ul').className = 'hidden';	
			});*/	
	/*		$(this).mouseover(function(){
				$(this).find('ul').className = '';
				$(this +' ul').className = 'visible';	
									  });
		});
}*/


function display_ss_menu( element ) {
	var etat = document.getElementById( element ).className;
	if( etat == 'hidden' ) {
		document.getElementById( element ).className = "visible";
	} else {
		document.getElementById( element ).className = "hidden";
	}
}

// slide background
function slideBackground()
{
	$('#ul_principal').css({"background-position" : "800px 2px"});
	$('#ul_principal li').each(
	function(){
		var className =	$(this).attr('id');
		$(this).hover(
			function(){
				var position = $(this).position();
				
				$('#ul_principal').addClass(className);
				$('#ul_principal').stop().animate({backgroundPosition: position.left + " 2px"});
				$(this).find('a:first').css({'color' : '#333'});
			},
			function(){
				$('#ul_principal').animate({backgroundPosition: "800px 2px"});
				$(this).find('a:first').css({'color' : '#fff'});
				$('#ul_principal').removeClass(className).stop();
			}
		);
	});
}



//	CARROUSEL JQUERY

var carrousel ={
	nbSlide : 0,
	nbCurrent : 1,
	elemCurrent : null,
	elem : null,
	
	init : function(elem){
		this.nbSlide = elem.find('.slide').length;
		
//		créer la pagination
		elem.append('<div class="navigation"></div>');	
		for( var i = 1; i <= this.nbSlide; i++){
			elem.find('.navigation').append('<h3>' + i +'</h3>');
		}
		for( var i = this.nbSlide/2; i <= this.nbSlide; i++){
			$('.navigation h3').eq(i).addClass('bas');
		}
		
		
		elem.find('.navigation h3').click(function(){
			carrousel.gotoSlide($(this).text());
		});
		
		this.elem = elem;
		elem.find('.slide').hide();
		elem.find('.slide:first').show();
		this.elemCurrent = elem.find('.slide:first');
		this.elem.find('.navigation h3:first').addClass('active');
		
		carrousel.play();
		$(window).blur(function() {
			carrousel.stop();
	   });
		$(window).focus(function() {
			carrousel.play();
	   });
	   
		elem.mouseover(carrousel.stop);
		elem.mouseout(carrousel.play);
		elem.find('.navigation h3').hover(carrousel.navOver,carrousel.navOut);
		//alert('test');	
	},
	
	gotoSlide : function(num){
		if( num == this.nbCurrent){return false;};
		
		this.elemCurrent.fadeOut();
		this.elem.find('#slide' + num).fadeIn();
		
		this.elem.find('.navigation h3').removeClass('active');
		this.elem.find('.navigation h3:eq(' + (num - 1) +  ')').addClass('active');
		this.nbCurrent = num;
		this.elemCurrent = this.elem.find('#slide' + num);
		
	},
	
	next : function(){
		var num = this.nbCurrent + 1;
		if( num > this.nbSlide){
			num = 1;
			};
			this.gotoSlide(num);
	},
	stop : function(){
		window.clearInterval(carrousel.timer);
	},
	play : function(){
		 window.clearInterval(carrousel.timer);
		 carrousel.timer = window.setInterval('carrousel.next()', 4000);
	},
	navOver : function(){
	if($(this).hasClass('bas')){
		$(this).css({'margin-top':'-34px','line-height' : '153px'});
		$(this).next('h3').css({'margin-top':'82px'});
	}else{
		$(this).css({'margin-top':'-5px'});
		$(this).next('h3').css({'margin-top':'82px'});
	}
	},
	navOut : function(){
	if($(this).hasClass('bas')){
		$(this).css({'margin-top':'0','line-height' : '82px'});
		$(this).next('h3').css({'margin-top':'0'});
	}else{
	$(this).css({'margin-top':'0'});
	$(this).next('h3').css('margin-top','0px');
	}
}

	
}
// --------------------------MENU CONTENU -----------------------------
function slideMenuContent(){
		$('#menu h4').next().hide();
		$('h4').click(function(){
			 if($(this).next('ul').is(':hidden')){
            $('h4').next('ul:visible').slideUp(); //:visible toutes les div visibles.
            $(this).next('ul').slideDown();				   
			 }
		});
}
//--------------------------FIN MENU CONTENU -------------------------------
/***************************/
/* initialisation du site  */
/***************************/

$(function(){
	init();
		 
});
