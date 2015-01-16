function hide(type){
	switch(type){
		case 'fait':
			document.getElementById("fait").style.display="block";
			document.getElementById("fait").className="col-md-12";
			document.getElementById("faire").style.display="none";
		break;
		case 'faire':
			document.getElementById("faire").style.display="block";
			document.getElementById("faire").className="col-md-12";
			document.getElementById("fait").style.display="none";
		break;
	}
}