let y = document.getElementById("showPW");
y.addEventListener("click", function (e) {
	let x = document.getElementById("pass");
	x.type = (x.type === "password") ? "text" : "password";
	let spanhide = document.querySelector("#showPW > span.rf--form-show");
	let spanshow = document.querySelector("#showPW > span.rf--form-hide");
	
	if(spanhide.classList.contains("rf--form-show")) {
		spanhide.classList.remove("rf--form-show");
		spanhide.classList.add("rf--form-hide");
	}

	if(spanshow.classList.contains("rf--form-hide")) {
		spanshow.classList.remove("rf--form-hide");
		spanshow.classList.add("rf--form-show");
	}
});

/*
function findGetParameter() {
	let getParams = window.location.search.substr(1);
	let sportarr = getParams.substr(getParams.indexOf("sport"));
	let arr = sportarr.split("=");

	if(arr[0] == "sport") return arr[1];
}



// por defecto que carge football
var sport = "football";
console.log(findGetParameter("sadsa"));

if(findGetParameter("sport") !== null){
		sport = findGetParameter();
	let bgelem = document.getElementById("princi");
	// "url('img_tree.png')";
	console.dir(bgelem);
	let array = bgelem.style.backgroundImage.split("/");
	var fullName = array[array.length-1];
	array.pop(); // elimino el ultimo elemento del array
	var imageName = fullName.split(".");

	if(sport == "american_football") imageName[0]="american-football";
	else if(sport == "basketball")   imageName[0]="basketball";
	else if(sport == "boxing")		 imageName[0]="boxing";
	else if(sport == "mma")			 imageName[0]="mma";
	else if(sport == "hockey")		 imageName[0]="hockey";
	else if(sport == "baseball")	 imageName[0]="baseball";
	else if(sport == "cricket")		 imageName[0]="cricket";
	else if(sport == "motorsport")	 imageName[0]="motorsport";	

	// metodo de array que los junte todos en un string por / fullname y imageName por .
	array =  array.join("/") + "/" + imageName.join(".");
	console.log(array);
	bgelem.style.backgroundImage = `url("${array}");`;
	console.log(bgelem.style.backgroundImage);
}

*/
