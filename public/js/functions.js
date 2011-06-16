// JavaScript Document

// Apparition du 2eme niveau du menu principal

function display_ss_menu( element ) {
				var etat = document.getElementById( element ).className;
				if( etat == 'hidden' ) {
					document.getElementById( element ).className = "visible";
				} else {
					document.getElementById( element ).className = "hidden";
				}
			}
			
//	CARROUSEL JQUERY

var carrousel ={
	nbSlide : 0,
	nbCurrent : 1,
	elemCurrent : null,
	elem : null,
	
	init : function(elem){
		this.nbSlide = elem.find('.slide').length;
		//alert(this.nbSlide);
		
//		cr�er la pagination
		elem.append('<div class="navigation"></div>');	
		for( var i = 1; i <= this.nbSlide; i++){
			elem.find('.navigation').append('<h3>' + i +'</h3>');
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
		
		elem.mouseover(carrousel.stop);
		elem.mouseout(carrousel.play);
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
		 carrousel.timer = window.setInterval('carrousel.next()', 3000);
	},
}

$(function(){
		   carrousel.init($('#carrousel'));
});
