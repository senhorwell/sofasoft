<?php include 'header.php';?>

    <div class="container d-flex justify-content-center text-center py-32">
        <h1 class="title">Agora <strong>selecione uma configuração</strong> para iniciar</h1>
    </div>

    <div class="container-fluid d-flex justify-content-center flex-column text-center">
        <?php include 'configuracao.php';?>
        <div class="container d-flex justify-content-center py-3 text-center">
            <h1 class="title"><strong>Standard</strong></h1>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center flex-column pt-32 text-center bg-gray">
        <?php include 'configuracao.php';?>
        <div class="container d-flex justify-content-center py-3 text-center">
            <h1 class="title"><strong>Vintage</strong></h1>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center flex-column pt-32 text-center">
        <?php include 'configuracao.php';?>
        <div class="container d-flex justify-content-center py-3 text-center">
            <h1 class="title"><strong>Moderno</strong></h1>
        </div>
    </div>
<?php include 'footer.php';?>