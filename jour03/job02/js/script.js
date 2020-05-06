var keylogger = document.getElementById('keylogger');
var tab=[]
var tab2 = ["d", "g", "c"]
var similitude = 0

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
	prc=$("#progressbar").text()
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

	$("body").on("click", "#left", function () {

		prc = parseInt(prc) - parseInt(1)
		$("#progressbar").css({"width": +prc+"%"})
		$("#progressbar").text(prc)

			
	});

	$("body").on("click", "#right", function () {

		prc = parseInt(prc) + parseInt(1)
		$("#progressbar").css({"width": +prc+"%"})
		$("#progressbar").text(prc)
	});
});

window.addEventListener('keydown', function(event){
    var key = event.key;

    tab.push(key)

    if(tab.length == 3)
    {
    	for(i = 0; i < tab.length; i++)
    	{
    		if(tab[i] == tab2[i])
    		{
    			similitude ++
    		}
    	}
    	if(similitude == 3)
    	{
    	
			var modal = document.getElementById("myModal");
			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");
			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];
			// When the user clicks the button, open the modal 
			 modal.style.display = "block";
			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			 modal.style.display = "none";
			}
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}
			  modal.style.display = "block";
		}

		
		
 		tab=[]
 		similitude = 0
    }
})


