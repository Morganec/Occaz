function affiche(valeur){
	
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)  //si on est bien a letape 4
			document.getElementById("vet").style.display="block";
			document.getElementById("vet").innerHTML= xmlhttp.responseText; //balise select dans le html
			



	}
	xmlhttp.open("GET","../affiche.php?num="+valeur,true);
	xmlhttp.send();
}
