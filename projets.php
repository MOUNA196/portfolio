<?php 

// Commencer par l'appel du controller
require("./controllers/projectController.php");
// Instanciation de notre controller 
$controller = new ProjectController();
// Appel la méthode pour récupérer tous les projets
$projects = $controller ->readAll();

// Définition de la constante du titre de la page, que nous utilisons dans le head
define("PAGE_TITLE", "Projets");

?>
<?php include ("./assets/inc/head.php") ?>
<?php include ("./assets/inc/header.php") ?>

<main>
    <h1> Liste des projets </h1>
    <?php foreach ($projects as $project)
    {
        ?>
        <div class="card" style="width: 18rem;">
  <img src="assets\img\projects\notes.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $project->name ?></h5>
    <p class="card-text"><?= $project->description ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $project->date_start ?></li>
    <li class="list-group-item"><?= $project->date_end ?></li>

  </ul>
  <div class="card-body">
    <a href="#" class="card-link">$project->link_site</a>
    <a href="#" class="card-link">$project->link_git</a>
  </div>
</div>
     
        <?php
    }
    ?>
</main>

<?php include ("./assets/inc/footer.php") ?>