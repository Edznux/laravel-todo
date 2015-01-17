function hide(type){
	var fait = document.getElementById("fait");
	var faire = document.getElementById("faire");
	switch(type){
		case 'fait':
			fait.style.display="block";
			fait.className="col-md-12";
			faire.style.display="none";
		break;
		case 'faire':
			faire.style.display="block";
			faire.className="col-md-12";
			fait.style.display="none";
		break;
	}
}