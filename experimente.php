<?php include 'header.php';?>
<?php include 'price.php';?>
<div class="container-fluid px-0 mx-0" style="margin-top:65px">
    <?php include 'menu.php';?>
</div>

    <div class="container-fluid py-32 px-0">
        <div class="container pb-32 d-flex justify-content-center align-items-center text-center">
            <img src="img/img/step1.png"/>
        </div>
        <div class="container d-flex justify-content-center align-items-center text-center">
            <a href="step2_1.php"><h1 class="title"><strong>Escolha</strong><br> o estilo</h1></a>
        </div>
        <div class="container d-flex justify-content-center align-items-center text-center">
            <a class="arrow-down" href="step2_1.php"><img src="img/svg/down.svg"/></a>
        </div>
    </div>

    <div id="moma" class="container-fluid bg-black py-32 px-0">
        <div class="container d-flex justify-content-center pb-32 text-center flex-column">
            <h1>Moma</h1>
            <p>Para quem ama design e não abre mão do conforto.</p>
            <div class="container d-flex justify-content-center">
                <a href="step2_1.php" class="px-2">Saiba mais ></a>
                <a href="step2_1.php" class="px-2">Personalizar ></a>
            </div>
        </div>
        <?php include 'configuracao.php';?>
    </div>

    <div id="clausi" class="container-fluid py-32 px-0">
        <div class="container d-flex justify-content-center pb-32 text-center flex-column">
            <h1>Clausi</h1>
            <p>Para os minimalistas de plantão.</p>
            <div class="container d-flex justify-content-center">
                <a href="step2_1.php" class="px-2">Saiba mais ></a>
                <a href="step2_1.php" class="px-2">Personalizar ></a>
            </div>
        </div>
        <?php include 'configuracao.php';?>
    </div>

    <div id="tuim" class="container-fluid bg-tuim py-32 px-0">
        <div class="container d-flex justify-content-center pb-32 text-center flex-column">
            <h1>Tuim</h1>
            <p>O clássico amigão do Netflix</p>
            <div class="container d-flex justify-content-center">
                <a href="step2_1.php" class="px-2">Saiba mais ></a>
                <a href="step2_1.php" class="px-2">Personalizar ></a>
            </div>
        </div>
        <?php include 'configuracao.php';?>
    </div>

    

    <div id="comparando" class="container-fluid py-32">
        <div class="container d-flex justify-content-center text-center">
            <h1 class="title"><strong>Comparando</strong> os estilos</h1>
        </div>
        <div class="container blue-border p-4">
           <h1 class="title text-center"><strong>Medida mínima</strong></h1>
           <?php include 'medidas.php';?>
        </div>
    </div>
    
    <?php include 'consultor.php';?>
    <?php include 'consultor_pessoal.php';?>

<?php include 'footer.php';?>