

var nb_citation = 6
var tab_citation=["Tous ces moments se perdront dans l’oubli, comme des larmes dans la pluie.", "T’endors pas c’est l’heure de mourir.",
			"Wake up, time to die.", "Avez-vous déjà désactivé un humain par erreur ?",
"Avez-vous déjà désactivé un humain par erreur ?", "C’est dommage qu’elle doive mourir, mais on en est tous là !",
"Étrange sensation que de vivre dans la peur… voila ce que c’est d’être un esclave."]

citation = tab_citation[getRandomInt(nb_citation)]

// RETOURNE CITATION ALEATOIRE
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
$(document).ready(function () {

	document.getElementById("contenu2").style.display = "none";
	document.getElementById("contenu3").style.display = "none";

	$("body").on("click", "#reboot", function () {
					
		while($("#citation").text() == citation)
		{
			citation = tab_citation[getRandomInt(nb_citation)]
		}			
		$("#citation").text("")
		$("#citation").text(citation)					
	});
	$("body").on("click", "#1", function () {

		document.getElementById("contenu2").style.display = "none";
		document.getElementById("contenu3").style.display = "none";
		document.getElementById("contenu1").style.display = "inherit";
	});
	$("body").on("click", "#2", function () {

		document.getElementById("contenu1").style.display = "none";
		document.getElementById("contenu3").style.display = "none";
		document.getElementById("contenu2").style.display = "inherit";
	});
	$("body").on("click", "#3", function () {

		document.getElementById("contenu1").style.display = "none";
		document.getElementById("contenu2").style.display = "none";
		document.getElementById("contenu3").style.display = "inherit";
	});

	$("body").on("click", "li", function () {


		var elt = this;
		var idElt = this.getAttribute('id');
		var classElt = this.getAttribute('class');

		$("."+classElt).removeClass('active');
		$("#"+idElt).addClass('active');
	});
});


