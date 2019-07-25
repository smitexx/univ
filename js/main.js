$(document).ready(main);


var contador = 1;
console.log("hola");
function main(){
    var contador = 1;
  $('.menu_bar.clearfix').click(function(){
    if (contador == 1){
        $('.navegacion-principal').animate({left:'0'});
        contador= 0;
        $('.navegacion-principal').addClass("posicion");
    }else{
        contador =1;
        $('.navegacion-principal').animate({left:'-100%'});
        $('.navegacion-principal').removeClass("posicion");
    }
   
  });
   var contador2 = 1;
    $('.submenu').click(function(){
        if(contador2 == 1){
        $(this).children('.children').slideDown();
        contador2=0;
        }else{
         contador2=1;
         $(this).children('.children').slideUp();
        }
    });

    $('.flexslider').flexslider({
		prevText: "",
		nextText: "",
		pauseOnAction: false,
		slideshowSpeed: 3000,
		touch: true
    });

    $('.desaparece').hover(function(){
        $(this).animate({opacity:0});
    },function(){
        $(this).animate({opacity:1});
   
});

  
}



