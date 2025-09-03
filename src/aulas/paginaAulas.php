<?php include ("../headerAluno.php"); ?>

<div class="container py-5">
  <h1 class="text-center mb-5">Aulas</h1>
  <p class="text-center mb-5">Escolha a matéria, o assunto e a aula.</p>
  <div class="row g-4">

    <div class="col-md-4">
    <a href="materias/portugues/portugues.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-blue">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">Português</h4>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-4">
    <a href="materias/matematica/matematica.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-brown">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">Matemática</h4>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-4">
    <a href="materias/biologia/biologia.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-ciano">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">Biologia</h4>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-4">
    <a href="materias/quimica/quimica.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-yellow">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">Química</h4>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-4">
    <a href="materias/fisica/fisica.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-red">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">Física</h4>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-4">
    <a href="materias/historia/historia.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-beige">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">História</h4>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-4">
    <a href="materias/geografia/geografia.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-green">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">Geografia</h4>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-4">
    <a href="materias/sociologia/sociologia.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-purple">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">Sociologia</h4>
        </div>
      </div>
    </a>
    </div>

    <div class="col-md-4">
    <a href="materias/filosofia/filosofia.php" class="text-decoration-none">
      <div class="card shadow h-100 text-center card-orange">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="card-title m-0">Filosofia</h4>
        </div>
      </div>
    </a>  
    </div>

  </div>
</div>

<script>
  function myFunction() {
    var element = document.body;
    element.dataset.bsTheme = element.dataset.bsTheme == "light" ? "dark" : "light";
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>