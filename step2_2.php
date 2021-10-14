<?php include 'header.php';?>

    <div class="container-fluid">
        <div class="container whatsapp-box d-flex justify-content-center text-center my-4">
            <a class="d-flex" href="#"><img src="img/svg/whatsapp.svg"/><h1>Comprar pelo <strong class="px-1">WhatsApp</strong></h1></a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container d-flex justify-content-center align-items-center text-center blue-border p-3">
            <div class="col-6">
                <div class="col-12">
                    <h1 class="m-0 p-0">Sofá <strong class="px-1">Moma</strong></h1>
                    <p class="p-0 m-0">R$5.000 à vista</p>
                </div>
            </div>
            <div class="col-6">
                <div class="col-12">
                    <a href="">Experimentar</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-32">
        <div class="container d-flex justify-content-center text-center">
            <h1 class="title"><strong>Personalize</strong> seu moma</h1>
        </div>
        <?php include 'configuracao2.php';?>
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
                        <?php include 'accordion-items.php';?>
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
                        <?php include 'accordion-items.php';?>
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
                        <?php include 'accordion-items.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-32">
        <div class="container d-flex justify-content-center text-center">
            <h1 class="title"><strong>Inspirações</strong> do MOMA</h1>
        </div>
        <?php include 'configuracao.php';?>
    </div>

    <div class="container-fluid">
        <img class="w-100" src="https://www.tilelook.com/system/tile_picture/resource/2336209/d3d_default_Pure_MA_Grey_60x60_FGYT660GR1.jpg"/>
    </div>
    <div class="container-fluid">
        <img class="w-100" src="https://www.tilelook.com/system/tile_picture/resource/2336209/d3d_default_Pure_MA_Grey_60x60_FGYT660GR1.jpg"/>
    </div>
    <div class="container-fluid">
        <img class="w-100" src="https://www.tilelook.com/system/tile_picture/resource/2336209/d3d_default_Pure_MA_Grey_60x60_FGYT660GR1.jpg"/>
    </div>
    <div class="container-fluid">
        <img class="w-100" src="https://www.tilelook.com/system/tile_picture/resource/2336209/d3d_default_Pure_MA_Grey_60x60_FGYT660GR1.jpg"/>
    </div>
    <div class="container-fluid">
        <img class="w-100" src="https://www.tilelook.com/system/tile_picture/resource/2336209/d3d_default_Pure_MA_Grey_60x60_FGYT660GR1.jpg"/>
    </div>

    <?php include 'perguntas.php';?>
    <?php include 'form.php';?>

<?php include 'footer.php';?>