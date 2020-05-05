<!DOCTYPE html>
<html>
	<head>
		<title>Job04</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.7">
		<!-- Compiled and minified CSS -->
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	</head>

<body>

<hearder>
  <nav class="blue">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="">Accueil</a></li>
        <li><a href="">Inscription</a></li>
        <li><a href="">Connexion</a></li>
        <li><a href="">Recherche</a></li>
      </ul>
    </div>
  </nav>
</hearder>


</body>

<section>
	<form action="">

    <br><br>
		<label>
      <input class="with-gap" name="group1" type="radio"  />
      <span>Mme</span>
    </label>
    <label>
      <input class="with-gap" name="group1" type="radio"  />
      <span>Mr</span>
    </label>
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" placeholder="nom">
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" placeholder="prenom">
        </div>
      </div>
    </form>
  </div>

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">add_location</i>
          <input type="text" placeholder="adresse">
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input type="email" placeholder="email">
        </div>
      </div>
    </form>
  </div>

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">create</i>
            <input type="password" placeholder="password">
        </div>
        <div class="input-field col s6">
           <i class="material-icons prefix">done</i>
           <input type="password" placeholder="confirm password">
        </div>
      </div>
    </form>
  </div>

  <label>Passions :</label>
   <div class="row">
    <form class="col s24">
      <div class="row">
        <div class="input-field col s12">
          <label>
            <input type="checkbox" class="filled-in"/>
            <span>Informatique</span>
          </label>
        </div>
        <div class="input-field col s12">
          <label>
            <input type="checkbox" class="filled-in"/>
            <span>Voyages</span>
          </label>
        </div>
         <div class="input-field col s12">
            <label>
              <input type="checkbox" class="filled-in"/>
              <span>Sport</span>
            </label>
        </div>
         <div class="input-field col s12">
            <label>
              <input type="checkbox" class="filled-in"/>
              <span>Lecture</span>
            </label>
        </div>
      </div>
    </form>
  </div>
  <br>
		<input class="waves-effect waves-light btn blue" type="submit"><br><br><br>
	</form>
</section>

  <footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contenu</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Lien</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="">Accueil</a></li>
                  <li><a class="grey-text text-lighten-3" href="">Inscription</a></li>
                  <li><a class="grey-text text-lighten-3" href="">Connexion</a></li>
                  <li><a class="grey-text text-lighten-3" href="">Recherche</a></li>
                </ul>
              </div>
            </div>
          </div>
  </footer>
</html>