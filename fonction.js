function affiche(valeurta, valeurty, valeurp, fac){
	if(!fac){
		fac= 0;
	}
	
	xmlhttp=new XMLHttpRequest();
	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)  //si on est bien a letape 4
			//document.getElementById("vet").style.display="block";
			document.getElementById("vet").innerHTML= xmlhttp.responseText; //balise select dans le html
			



	}
	xmlhttp.open("GET","../affiche.php?ta="+valeurta+"&ty="+valeurty+"&p="+valeurp+"&fac="+fac,true);
	xmlhttp.send();
}




function zoom(i){
	var a = "img"+i;
	var b = "de"+i;
	var img = document.getElementById(a);
	var detail = document.getElementById(b);
	detail.innerHTML = "Clique pour plus de détail ! ";
	img.style.height="400px";
	img.style.width="400px";
	

}

function dezoom(i){
	var a ="img"+i;
	var b = "de"+i;
	var img = document.getElementById(a);
	var detail = document.getElementById(b);
	detail.innerHTML = "";
	img.style.height="200px";
	img.style.width="200px";
	
}

function descr(id){
	$('#modalAffiche').modal({
    keyboard: true
    })
    xmlhttp=new XMLHttpRequest();
	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)  //si on est bien a letape 4
			
			document.getElementById('div').innerHTML= xmlhttp.responseText; //balise select dans le html
			



	}
	xmlhttp.open("GET","../descr.php?id="+id,true);
	xmlhttp.send();
}

function changerImage(img1,img2){
	
	document.getElementById('img').src="../images/vet/"+img2;
	document.getElementById('imgb').src="../images/vet/"+img1;
}