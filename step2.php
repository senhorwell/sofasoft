<?php include 'header.php';?>
<?php include 'price.php';?>
<div class="container-fluid px-0 mx-0" style="margin-top:65px">
    <?php include 'menu.php';?>
</div>

<div class="container step-numbers py-32 d-flex justify-content-center align-items-center text-center">
    <div class="col-12 col-md-6 d-flex justify-content-evenly align-items-center">  
        <a class="d-flex flex-column justify-content-center align-items-center" href="step1.php">
            <i class="step1 step d-flex justify-content-center align-items-center">
                1
            </i>
            <p class="title m-0">Escolha<br>seu estilo</p>
        </a>
        <i class="d-flex justify-content-center align-items-center">
            <?php include 'img/svg/traco-step.svg';?>
        </i>
        <a class="d-flex flex-column justify-content-center align-items-center" href="#">
            <i class="step2 step selected d-flex justify-content-center align-items-center">
                2
            </i>
            <p class="title"></p>
        </a>
        <i class="d-flex justify-content-center align-items-center">
            <?php include 'img/svg/traco-step.svg';?>
        </i>
        <button type="button" class="btn-link p-0 d-flex flex-column justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#naoPermitido">
            <i class="step3 step d-flex justify-content-center align-items-center">
                3
            </i>
            <p class="title">Experimente</p>
        </button>
        <div class="modal fade pt-32 mt-5" id="naoPermitido" tabindex="-1" aria-labelledby="naoPermitidoLabel" aria-hidden="true">
            <div class="modal-dialog mx-0 px-0">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                            <h1 class="title">Antes de prosseguir,<br><strong>personalize seu Moma</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center text-center">
    <h1 class="title">Personalize seu<br> <strong>Moma</strong></h1>
</div>

<div id="carousel" class="container-fluid px-0 m-0 mt-5">
    <?php include 'personalize_carousel.php';?>
</div>
<div id="carousel-fake" class="d-none"></div>

<div class="container-fluid whatsapp-container position-fixed bottom-0">
    <div class="container whatsapp-box d-flex justify-content-center  text-center my-4">
        <a class="d-flex" href="http://wa.me/554399514569" target="_blank"><img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/whatsapp.svg" />
            <h1>Comprar pelo <strong class="px-1">WhatsApp</strong></h1>
        </a>
    </div>
</div>

<div class="container-fluid p-0 m-0">
    <div class="accordion" id="accordionParent">
        <div class="accordion-item">
            <h2 class="accordion-header" id="formato">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFormato" aria-expanded="true" aria-controls="collapseFormato">
                    Defina o formato
                </button>
            </h2>
            <div id="collapseFormato" class="accordion-collapse collapse" aria-labelledby="formato"
                data-bs-parent="#accordionParent">
                <div class="accordion-body p-0">
                    <div class="accordion" id="subFormato">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFormatoFormato">
                                <button class="accordion-button collapsed d-flex flex-column align-items-start" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFormatoFormato" aria-expanded="true"
                                    aria-controls="collapseFormatoFormato">
                                    
                                    <p class="title p-0 m-0">Formato</p>
                                    <p class="subtitle p-0 m-0">3 assentos retrateis</p>
                                </button>
                            </h2>
                            <div id="collapseFormatoFormato" class="accordion-collapse collapse show"
                                aria-labelledby="headingFormatoFormato" data-bs-parent="#subFormato">
                                <?php include 'accordion-items.php';?>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFormatoMedida">
                                <button class="accordion-button collapsed d-flex flex-column align-items-start" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFormatoMedida" aria-expanded="false"
                                    aria-controls="collapseFormatoMedida">
                                    
                                    <p class="title p-0 m-0">Medida</p>
                                    <p class="subtitle p-0 m-0">3 assentos retrateis</p>
                                </button>
                            </h2>
                            <div id="collapseFormatoMedida" class="accordion-collapse collapse"
                                aria-labelledby="headingFormatoMedida" data-bs-parent="#subFormato">
                                <div class="accordion-body p-0">
                                    <ul class="w-100 p-0 m-0 radio-group">
                                    <?php        
                                        for($i=0; $i < 9; $i++){
                                    ?>
                                        <li class="w-100 radio">
                                            <span class="d-flex justify-content-between w-100">
                                                <p class="med">2,22 x 2,22m</p>
                                                <p class="price">-R$ 1.400,00</p>
                                                <i class="fa fa-check-circle hidden" style = 'display: none;'></i>
                                        </span>
                                        </li>
                                    <?php        
                                        }
                                    ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFormatoBraco">
                                <button class="accordion-button collapsed d-flex flex-column align-items-start" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFormatoBraco" aria-expanded="false"
                                    aria-controls="collapseFormatoBraco">
                                    
                                    <p class="title p-0 m-0">Braço</p>
                                    <p class="subtitle p-0 m-0">3 assentos retrateis</p>
                                </button>
                            </h2>
                            <div id="collapseFormatoBraco" class="accordion-collapse collapse"
                                aria-labelledby="headingFormatoBraco" data-bs-parent="#subFormato">
                                <div class="accordion-body p-0">
                                    <ul class="w-100 p-0 m-0 radio-group">
                                    <?php        
                                        for($i=0; $i < 9; $i++){
                                    ?>
                                        <li class="w-100 radio">
                                            <span class="d-flex justify-content-between w-100">
                                                <p class = 'med'>2,22 x 2,22m</p>
                                                <p class="price">-R$ 1.400,00</p>
                                                <i class="fa fa-check-circle hidden" style = 'display: none;'></i>
                                        </span>
                                        </li>
                                    <?php        
                                        }
                                    ?>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion" id="accordionParent2">
        <div class="accordion-item">
            <h2 class="accordion-header" id="design">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseDesign" aria-expanded="true" aria-controls="collapseDesign">
                    Escolha o design
                </button>
            </h2>
            <div id="collapseDesign" class="accordion-collapse collapse" aria-labelledby="design"
                data-bs-parent="#accordionParent2">
                <div class="accordion-body p-0">
                    <div class="accordion" id="subDesign">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDesignTecido">
                                <button class="accordion-button collapsed d-flex flex-column align-items-start" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseDesignTecido" aria-expanded="false"
                                    aria-controls="collapseDesignTecido">
                                    
                                    <p class="title p-0 m-0">Tecido</p>
                                    <p class="subtitle p-0 m-0">3 assentos retrateis</p>
                                </button>
                            </h2>
                            <div id="collapseDesignTecido" class="accordion-collapse collapse"
                                aria-labelledby="headingDesignTecido" data-bs-parent="#subDesign">
                                <?php include 'accordion-items.php';?>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDesignCor">
                                <button class="accordion-button collapsed d-flex flex-column align-items-start" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseDesignCor" aria-expanded="false"
                                    aria-controls="collapseDesignCor">
                                    
                                    <p class="title p-0 m-0">Cor</p>
                                    <p class="subtitle p-0 m-0">3 assentos retrateis</p>
                                </button>
                            </h2>
                            <div id="collapseDesignCor" class="accordion-collapse collapse"
                                aria-labelledby="headingFormatoCor" data-bs-parent="#subFormato">
                                <div class="accordion-body p-0 radio-group d-flex flex-wrap">
                                    <!-- <?php include 'color-items.php';?> -->
                                    <?php        
                                        for($i=0; $i < 8; $i++){
                                    ?>
                                    <div class="col-4 radio">
                                        <div class="cor">
                                            <span></span>
                                            <i class="fa fa-check-circle" style="display: none;"></i>
                                        </div>
                                        <p>Azul Linho</p>
                                    </div>
                                    <?php           
                                        }
                                    ?>
                                    <div class="col-4 duvida">
                                        <p>Ficou em dúvida?</p>
                                        <a href="">Solicitar amostras ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="accordion" id="accordionParent3">
        <div class="accordion-item">
            <h2 class="accordion-header" id="conforto">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseConforto" aria-expanded="true" aria-controls="collapseConforto">
                    Personalize o conforto
                </button>
            </h2>
            <div id="collapseConforto" class="accordion-collapse collapse" aria-labelledby="conforto"
                data-bs-parent="#accordionParent3">
                <div class="accordion-body p-0">
                    <div class="accordion" id="subConforto">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingConfortoEnchimento">
                                <button class="accordion-button collapsed d-flex flex-column align-items-start" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseConfortoEnchimento" aria-expanded="false"
                                    aria-controls="collapseConfortoEnchimento">
                                    
                                    <p class="title p-0 m-0">Enchimento assentos</p>
                                    <p class="subtitle p-0 m-0">3 assentos retrateis</p>
                                </button>
                            </h2>
                            <div id="collapseConfortoEnchimento" class="accordion-collapse collapse"
                                aria-labelledby="headingConfortoEnchimento" data-bs-parent="#subConforto">
                                <div class="accordion-body p-0">
                                    <div id="collapseConfortoEnchimento" class="accordion-collapse collapse"
                                        aria-labelledby="headingConfortoEnchimento" data-bs-parent="#subConforto">
                                        <?php include 'accordion-items.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingConfortoCor">
                                <button class="accordion-button collapsed d-flex flex-column align-items-start" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseConfortoCor" aria-expanded="false"
                                    aria-controls="collapseConfortoCor">
                                    
                                    <p class="title p-0 m-0">Abertura assentos</p>
                                    <p class="subtitle p-0 m-0">3 assentos retrateis</p>
                                </button>
                            </h2>
                            <div id="collapseConfortoCor" class="accordion-collapse collapse"
                                aria-labelledby="headingConfortoCor" data-bs-parent="#subConforto">
                                <div class="accordion-body p-0">
                                    <div id="collapseConfortoCor" class="accordion-collapse collapse"
                                        aria-labelledby="headingConfortoCor" data-bs-parent="#subConforto">
                                        <?php include 'accordion-items.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingConfortoCarregador">
                                <button class="accordion-button collapsed d-flex flex-column align-items-start" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseConfortoCarregador" aria-expanded="false"
                                    aria-controls="collapseConfortoCarregador">
                                    
                                    <p class="title p-0 m-0">Carregador USB</p>
                                    <p class="subtitle p-0 m-0">3 assentos retrateis</p>
                                </button>
                            </h2>
                            <div id="collapseConfortoCarregador" class="accordion-collapse collapse"
                                aria-labelledby="headingConfortoCarregador" data-bs-parent="#subConforto">
                                <div class="accordion-body p-0">
                                    <div id="collapseConfortoCarregador" class="accordion-collapse collapse"
                                        aria-labelledby="headingConfortoCarregador" data-bs-parent="#subConforto">
                                        <?php include 'accordion-items.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="container-fluid px-0 m-0 py-32 bg-gray">
    

    <div class="container d-flex justify-content-center text-center pt-32 flex-column px-3">
        <p class="text-center">de <span class="money">R$4.529,75</span></p>
        <p class="text-center">por <strong class="money">R$ 4.029,75</strong> à vista <strong>(5% de desconto)</strong> ou</p>
    </div>
    <div class="container d-flex justify-content-center pb-32 text-center">
        <h1 class="text-dark title text-center fw-bold">10X R$ 424,18</h1>
    </div>

    <div class="container d-flex justify-content-center text-center px-4 pb-32">
        <a href="experimente.php" class="btn-colored w-100 fs-light d-flex justify-content-evenly align-items-center">
            <span class="cart-icon"></span>
            Experimentar
        </a>
    </div>

    <div class="container d-flex justify-content-center align-items-center text-center pb-32 flex-column px-3">
        <img style="width:50px" src="https://www.fronte.net.br/clientes/sofasoft/img/svg/truck.svg" />
        <h4 class="text-dark fw-bold text-center mb-0">Frete grátis</h4>
        <p class="text-center">para diversos estados do Brasil</p>
        <button type="button" class="btn-link" data-bs-toggle="modal" data-bs-target="#freteModal">Saiba mais ></button>
        <div class="modal fade" id="freteModal" tabindex="-1" aria-labelledby="freteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1><strong>Frete Grátis</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center text-center pb-32 flex-column px-3">
        <img style="width:50px" src="https://www.fronte.net.br/clientes/sofasoft/img/svg/casa.svg" />
        <h4 class="text-dark fw-bold text-center mb-0 px-5">10 dias para experimentar</h4>
        <button type="button" class="btn-link" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
        <div class="modal fade" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1><strong>Experimentar</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center text-center pb-32 flex-column px-3">
        <img style="width:50px" src="https://www.fronte.net.br/clientes/sofasoft/img/svg/selo.svg" />
        <h4 class="text-dark fw-bold text-center mb-0 px-5">2 anos de garantia</h4>
        <button type="button" class="btn-link" data-bs-toggle="modal" data-bs-target="#garantiaModal">Saiba mais
            ></button>
        <div class="modal fade" id="garantiaModal" tabindex="-1" aria-labelledby="garantiaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1><strong>Garantia</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center text-center pb-32 flex-column px-3">
        <img style="width:50px" src="https://www.fronte.net.br/clientes/sofasoft/img/svg/chat.svg" />
        <h4 class="text-dark fw-bold text-center mb-0 px-5">Ajuda para comprar</h4>
        <p class="text-center p-0 m-0">Converse com um especialista online ou ligue para:</p>
        <a href="tel:5543991025500">(43) 9 9102-5500</a>
        <button type="button" class="pt-3 btn-link" data-bs-toggle="modal" data-bs-target="#ajudaModal">Falar no chat ></button>
        <div class="modal fade" id="ajudaModal" tabindex="-1" aria-labelledby="ajudaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1><strong>Ajuda para comprar</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center text-center px-4">
        <a href="experimente.php" class="btn-colored w-100 fs-light d-flex justify-content-evenly align-items-center">
            <span class="cart-icon"></span>
            Experimentar
        </a>
    </div>
</div>
<div id="duvida" class="container-fluid px-0 m-0 py-32 text-center">
    <h1 class="title text-light">Dúvida na cor?</h1>
</div>
<div id="amostras" class="container-fluid px-0 m-0 py-32">
    <div class="container d-flex justify-content-center text-center flex-column">
        <p class="text-light w-100 px-5 text-center">Enviamos 3 amostras de tecido para sua casa.</p>
        <a href="#" class="text-center">Solicitar amostras ></a>
    </div>
</div>

<?php include 'saiba-mais.php';?>