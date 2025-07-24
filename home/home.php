<?php

include ("../header.php");

?>

<main>
  <section class="bg-light-blue py-5">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
    <div class="mb-4 mb-md-0">
      <h2 class="btn rounded-4 bg-dark-blue text-light fs-3 fw-semibold">Vamos estudar?</h2>
                    <h3 class="h4 mb-3">Auxiliando a estudar para o vestibular com as ferramentas mais queridas do study!</h3>
                    <p class="mb-4">Seja bem-vindo(a) ao nosso site! Por aqui você encontra funcionalidades que irão te auxiliar nos estudos e playlists com checklisit.
                    E o melhor, de forma totalmente gratuita!</p>
                    <div class="button">
                        <a href="/loginecadastro/index.html" class="btn rounded-4 bg-dark-blue text-light px-12 py-2">Começar a estudar</a>
                    </div>
                </div>
                <div class="ms-md-5">
                    <img src="../img/estudo.png" class="img-fluid" style="max-width: 500px;">
                </div>
                </div>
  </div>
</section>
</main>

<script>
    function myFunction() {
        var element = document.body;
        element.dataset.bsTheme =
            element.dataset.bsTheme == "light" ? "dark" : "light";
    }
</script>


<?php

include ("../footer.php");

?>