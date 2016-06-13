var linkSlidebar="";


$(function(){
	
	$("#carousel-example-generic a").on("click",function(){
		linkSlidebar=$(this).attr("id");
		slidebarMove();
	});

	$(".item.active img").addClass("item1ServerDinamico");
	$(".item.active h2").addClass("item1TituloDinamico");
	$(".item.active p").addClass("item1ParrafoDinamico");
	$(".item.active li").addClass("item1ListasDinamico");
	

});
function slidebarMove(){
	//Control hacia la izquierda del carrousel
	if($(".item.active").index()===0 && linkSlidebar==="#slider_left"){
		
		
	}
	else if($(".item.active").index()===1 &&linkSlidebar==="#slider_left"){
		$(".item.active img").addClass("item1Elemento1");
	}
	else if($(".item.active").index()===2 && linkSlidebar==="#slider_left"){
		
	}
	//Control hacia la derecha del carrousel
	if($(".item.active").index()===0 && linkSlidebar==="#slider_right"){
		setTimeout(function(){
			$(".item.active img").addClass("item2ServerDinamico");
			$(".item.active h2").addClass("item2TituloDinamico");
			$(".item.active p").addClass("item2ParrafoDinamico");
			$(".item.active li").addClass("item2ListasDinamico");	
		}, 1000);
		
	}
	else if($(".item.active").index()===1 &&linkSlidebar==="#slider_right"){
		setTimeout(function(){
			$(".item.active img").addClass("item3ServerDinamico");
			$(".item.active h2").addClass("item3TituloDinamico");
			$(".item.active p").addClass("item3ParrafoDinamico");
			$(".item.active li").addClass("item3ListasDinamico");	
		}, 1000);
	}
	else if($(".item.active").index()===2 && linkSlidebar==="#slider_right"){
		
	}
}

function item1(){

}