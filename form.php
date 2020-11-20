<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
    <meta charset="utf-8"> <!--afin de lire les caratères spéciaux comme le "é" "è"-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--On envoie un formulaire avec la methode POST, l'action nous permet d'indiquer quelle fichier on doit viser avec ce formulaire-->
    <form method="post" action="php/controller.php">
      <section class="userName"> <!--cette section représente le nom/prénom de l'user-->
          <label for="Nom">Nom :</label>
    			<input type="text" name="lastname" placeholder="Entrez votre nom" required/>
          <label for="Prénom">Prénom :</label>
    			<input type="text" name="firstname" placeholder="Entrez votre Prénom"  required/>
      </section>
      <section class="mail">
          <label for="Email">Email :</label>
    			<input type="email" name="email" placeholder="Entrer votre Email" />
      </section>
      <section class="levelUser"> <!--Il s'agit des boutons radio pour choisir son niveau d'étude-->
          <span>Quelle est votre plus haut niveau d'étude acquis ?</span>
          <br>
          <input type="radio" name="level" id="bac" value="Bac">
          <label for="Bac">Bac</label>
          <input type="radio" name="level" id="bac+2" value="Bac+2">
          <label for="Bac+2">Bac+2</label>
          <input type="radio" name="level" id="master" value="Master">
          <label for="Master">Master</label>
          <input type="radio" name="level" id="doctorat" value="Doctorat">
          <label for="Doctorat">Doctorat</label>
          <input type="radio" name="level" id="autre" value="Autre">
          <label for="Autre">Autre</label>
      </section>
      <section class="userMessage">
        <label for="extra">Pourquoi avoir choisie ce domaine d'activité?</label><br>
        <textarea id="extra" name="message" rows="3" cols="40"></textarea>
      </section>
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
