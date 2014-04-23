function affiche(valeur){
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)  //si on est bien a letape 4
			//document.getElementById("vet").style.display="block";
			document.getElementById("vet").innerHTML= xmlhttp.responseText; //balise select dans le html
			



	}
	xmlhttp.open("GET","../affichetaille.php?num="+valeur,true);
	xmlhttp.send();
}

function zoom(i){
	var a = "img"+i;
	
	var img = document.getElementById(a);
	img.style.height="400px";
	img.style.width="400px";
	

}

function dezoom(i){
	var a ="img"+i;

	var img = document.getElementById(a);
	img.style.height="200px";
	img.style.width="200px";
	
}