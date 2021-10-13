<?php include 'header.php';?>

    <div class="container-fluid">
        <div class="container d-flex justify-content-center text-center">
            <a href=""><h1>Comprar pelo <strong class="px-1">WhatsApp</strong></h1></a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container d-flex justify-content-center text-center blue-border p-4">
            <div class="col-6">
                <div class="col-12">
                    <h1>Sofá <strong class="px-1">Moma</strong></h1>
                    <p>R$5.000 à vista</p>
                </div>
            </div>
            <div class="col-6">
                <div class="col-12">
                    <a href="">Experimentar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container d-flex justify-content-center text-center">
            <h1>Personalize seu moma</h1>
        </div>
        <?php include 'configuracao.php';?>
    </div>

    <div class="container-fluid">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Defina o formato
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong class="px-1">Item</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Escolha o design
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong class="px-1">Item</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Personalize o conforto
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong class="px-1">Item</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container d-flex justify-content-center text-center">
            <h1>Inspirações do MOMA</h1>
        </div>
        <?php include 'configuracao.php';?>
    </div>

    <div class="container-fluid">
        <img class="w-100" src="../img/jovemsofa.jpg"/>
    </div>
    <div class="container-fluid">
        <img class="w-100" src="../img/jovemsofa.jpg"/>
    </div>
    <div class="container-fluid">
        <img class="w-100" src="../img/jovemsofa.jpg"/>
    </div>
    <div class="container-fluid">
        <img class="w-100" src="../img/jovemsofa.jpg"/>
    </div>
    <div class="container-fluid">
        <img class="w-100" src="../img/jovemsofa.jpg"/>
    </div>

    <?php include 'perguntas.php';?>
    <?php include 'form.php';?>

<?php include 'footer.php';?>