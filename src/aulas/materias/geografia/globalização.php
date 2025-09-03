<?php include ("../../../headerAluno.php"); ?><?php include ("../../../headerAluno.php"); ?>

<div class="container py-5">
  <h1 class="text-center mb-4">Biologia - ENEM</h1>
  <p class="text-center mb-5">Escolha a matéria para ver as aulas disponíveis.</p>

  <div class="accordion" id="accordionBiologia">

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingCitologia">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCitologia" aria-expanded="false" aria-controls="collapseCitologia">
          Citologia
        </button>
      </h2>
      <div id="collapseCitologia" class="accordion-collapse collapse" aria-labelledby="headingCitologia" data-bs-parent="#accordionBiologia">
        <div class="accordion-body">
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Aula: Estrutura Celular</a></li>
            <li class="list-group-item"><a href="#">Aula: Membrana Celular</a></li>
            <li class="list-group-item"><a href="#">Aula: Organelas</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingGenetica">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGenetica" aria-expanded="false" aria-controls="collapseGenetica">
          Genética
        </button>
      </h2>
      <div id="collapseGenetica" class="accordion-collapse collapse" aria-labelledby="headingGenetica" data-bs-parent="#accordionBiologia">
        <div class="accordion-body">
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Aula: Herança Mendeliana</a></li>
            <li class="list-group-item"><a href="#">Aula: Biotecnologia</a></li>
            <li class="list-group-item"><a href="#">Aula: Engenharia Genética</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingEcologia">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEcologia" aria-expanded="false" aria-controls="collapseEcologia">
          Ecologia
        </button>
      </h2>
      <div id="collapseEcologia" class="accordion-collapse collapse" aria-labelledby="headingEcologia" data-bs-parent="#accordionBiologia">
        <div class="accordion-body">
          <ul class="list-group">
            <li class="list-group-item"><a href="ecologia.php">Aula: Ecossistemas</a></li>
            <li class="list-group-item"><a href="#">Aula: Cadeia Alimentar</a></li>
            <li class="list-group-item"><a href="#">Aula: Biosfera</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFisiologia">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFisiologia" aria-expanded="false" aria-controls="collapseFisiologia">
          Fisiologia
        </button>
      </h2>
      <div id="collapseFisiologia" class="accordion-collapse collapse" aria-labelledby="headingFisiologia" data-bs-parent="#accordionBiologia">
        <div class="accordion-body">
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Aula: Sistema Digestório</a></li>
            <li class="list-group-item"><a href="#">Aula: Sistema Circulatório</a></li>
            <li class="list-group-item"><a href="#">Aula: Sistema Nervoso</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

