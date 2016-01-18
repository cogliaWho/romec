function closeModal(){
	document.getElementById("modal-bg").style.display = 'none';
	document.getElementById("modal").style.display = 'none';
}

function openMenu(){
	if($(".content").hasClass("openMenu")){
		$(".content").removeClass("openMenu");
		$(".content").css("left", "0px" );
		$(".sidebar").css("left", "-270px" );
	} else {
		$(".content").addClass("openMenu");
		$(".content").css("left", "270px" );
		$(".sidebar").css("left", "0px" );
	}
}