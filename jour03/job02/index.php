<!DOCTYPE html>
<html>
	<head>
		<title>Job02</title>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Compiled and minified CSS -->
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>



	</head>

<body class="alert-dark">

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LPTF</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="https://laplateforme.io/">Acueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Units</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Skills</a>
      </li>
    </ul>
  </div>
</nav>
</header>

<h1 class="text-center display-4 mb-4">LaPlateforme_</h1>


<div class="row d-flex justify-content-around w-100">
  <div class="card mb-4" style="width: 18rem; height: 25rem;">
    <img src="img/papillon.jpg" class="img-fluid card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Un Papillon</h5>
      <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer</p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Commander votre propre papillon
      </button>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Achat Papillon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez-vous acheter un Papillon ? (bizarre comme question...)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Confirmer</button>
      </div>
    </div>
  </div>
</div>


  <div class="jumbotron ">
    <div id="contenu1">
      <h1 class="display-4">Bonjour, monde!</h1>
      <p class="lead">Il existe plusieurs visions du terme : </p>
      <p class="lead">le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</p>
      <p class="lead">Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environement plus ou moins naturel.</p>
    </div>

     <div id="contenu2">
      <h1 class="display-4">Contenu 2</h1>
      <p class="lead">Il existe plusieurs visions du terme : </p>
      <p class="lead">le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</p>
      <p class="lead">Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environement plus ou moins naturel.</p>
    </div>

     <div id="contenu3">
      <h1 class="display-4">Contenu 3</h1>
      <p class="lead">Il existe plusieurs visions du terme : </p>
      <p class="lead">le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</p>
      <p class="lead">Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environement plus ou moins naturel.</p>
    </div>

      <hr class="my-4">
      <p id="citation">Le sens désigne l'univers dans son ensemble.</p>
      <p class="lead">
        <button id="reboot" class="btn btn-danger btn-lg">Rebooter le Monde</button>
      </p>

    <nav class="float-right" aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><button id="1" class="page-link" href="">1</button></li>
        <li class="page-item"><button id="2" class="page-link" href="">2</button></li>
        <li class="page-item"><button id="3" class="page-link" href="">3</button></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav><br><br>
  </div>
  <ul class="list-group">
    <li id="item1" class="list-group-item">Limbes</li>
    <li id="item2" class="list-group-item">Luxure</li>
    <li id="item3" class="list-group-item">Gourmandise</li>
    <li id="item4" class="list-group-item">Avarice</li>
    <li id="item5" class="list-group-item">Colere</li>
    <li id="item6" class="list-group-item">Heresie</li>
    <li id="item7" class="list-group-item">Violence</li>
    <li id="item8" class="list-group-item">Ruse et Tromperie</li>
    <li id="item9" class="list-group-item">Trahison</li>
    <li id="item10" class="list-group-item">Internet Explorer</li>
  </ul>
</div>
<ion-icon name="arrow-back-outline"></ion-icon>
<div class="w-100 d-flex align-items-center flex-column">
  <div  class="w-50 d-flex justify-content-end">
    <p>Installation de AI 9000</p>
  </div>
    <div class="d-flex justify-content-center w-100">
      <svg id="left" class="bi bi-arrow-bar-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 00-.708 0l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708-.708L3.207 8l2.647-2.646a.5.5 0 000-.708z" clip-rule="evenodd"/>
      <path fill-rule="evenodd" d="M10 8a.5.5 0 00-.5-.5H3a.5.5 0 000 1h6.5A.5.5 0 0010 8zm2.5 6a.5.5 0 01-.5-.5v-11a.5.5 0 011 0v11a.5.5 0 01-.5.5z" clip-rule="evenodd"/>
      </svg>
    <div class="progress w-50">
      <div id="progressbar" class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75</div>
    </div>
      <svg id="right" class="bi bi-arrow-bar-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z" clip-rule="evenodd"/>
      <path fill-rule="evenodd" d="M6 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H6.5A.5.5 0 016 8zm-2.5 6a.5.5 0 01-.5-.5v-11a.5.5 0 011 0v11a.5.5 0 01-.5.5z" clip-rule="evenodd"/>
    </svg>
  </div>
</div>



<form class="mt-4 mb-4">
  <div class="row d-flex justify-content-around w-100">
    <div class="d-flex flex-column">
      <h5 class="ml-3">Recevez votre copie gratuite d'internet 2!</h5>
      <div class="col-auto mb-2">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text">@</div>
          </div>
          <input type="text" class="form-control" placeholder="Login">
        </div>
      </div>
      <div class="col-auto mb-2">
        <div class="input-group mb-2">
          <input type="text" class="form-control" placeholder="Mot de Passe">
          <div class="input-group-prepend">
            <div class="input-group-text">@example.com</div>
          </div>
          
        </div>
      </div>
      <div class="col-auto mb-2">
          <label for="exampleInputEmail1">URL des Internets 2 et 2.1 Beta</label>
          <div class="input-group-prepend mb-2">
            <div class="input-group-text">DogeCoin</div>
            <input type="text" class="form-control">
            <div class="input-group-text">.00</div>
          </div>
      </div>
      <div class="col-auto">
          <div class="input-group-prepend">
            <div class="input-group-text">https://133.lptf/dkwb/berlusconimkt/</div>
            <input type="text" class="form-control">
          </div>  
      </div>
    </div>


    <div class="d-flex flex-column">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </div>
    </div>
  </div>
</form>



</body>
</html>