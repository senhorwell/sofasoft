<?php include 'header.php';?>
<?php include 'message.php';?>
<div class="container-fluid px-0 mx-0" style="margin-top:65px">
    <?php include 'menu.php';?>
</div>



<div class="container-fluid py-32 px-0 m-0">

    <?php include 'configuracao.php';?>
</div>

<div class="container pb-32 d-flex justify-content-center align-items-center text-center">
    <img src="img/img/step2.png" />
</div>
<div class="container d-flex justify-content-center text-center">
    <h1 class="title">Personalize seu<br> <strong>Moma</strong></h1>
</div>
<div class="container-fluid whatsapp-container position-fixed bottom-0">
    <div class="container whatsapp-box d-flex justify-content-center  text-center my-4">
        <a class="d-flex" href="http://wa.me/554399514569" target="_blank"><img src="img/svg/whatsapp.svg" />
            <h1>Comprar pelo <strong class="px-1">WhatsApp</strong></h1>
        </a>
    </div>
</div>

<div class="container-fluid p-0 m-0">
    <div class="accordion" id="accordionParent">
        <div class="accordion-item">
            <h2 class="accordion-header" id="formato">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFormatoFormato" aria-expanded="true"
                                    aria-controls="collapseFormatoFormato">
                                    Formato
                                </button>
                            </h2>
                            <div id="collapseFormatoFormato" class="accordion-collapse collapse show"
                                aria-labelledby="headingFormatoFormato" data-bs-parent="#subFormato">
                                <?php include 'accordion-items.php';?>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFormatoMedida">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFormatoMedida" aria-expanded="false"
                                    aria-controls="collapseFormatoMedida">
                                    Medida
                                </button>
                            </h2>
                            <div id="collapseFormatoMedida" class="accordion-collapse collapse"
                                aria-labelledby="headingFormatoMedida" data-bs-parent="#subFormato">
                                <div class="accordion-body">
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFormatoBraco" aria-expanded="false"
                                    aria-controls="collapseFormatoBraco">
                                    Braço
                                </button>
                            </h2>
                            <div id="collapseFormatoBraco" class="accordion-collapse collapse"
                                aria-labelledby="headingFormatoBraco" data-bs-parent="#subFormato">
                                <div class="accordion-body">
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
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseDesign" aria-expanded="true" aria-controls="collapseDesign">
                    Defina o design
                </button>
            </h2>
            <div id="collapseDesign" class="accordion-collapse collapse" aria-labelledby="design"
                data-bs-parent="#accordionParent2">
                <div class="accordion-body p-0">
                    <div class="accordion" id="subDesign">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDesignTecido">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseDesignTecido" aria-expanded="false"
                                    aria-controls="collapseDesignTecido">
                                    Tecido
                                </button>
                            </h2>
                            <div id="collapseDesignTecido" class="accordion-collapse collapse"
                                aria-labelledby="headingDesignTecido" data-bs-parent="#subDesign">
                                <?php include 'accordion-items.php';?>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDesignCor">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseDesignCor" aria-expanded="false"
                                    aria-controls="collapseDesignCor">
                                    Cor
                                </button>
                            </h2>
                            <div id="collapseDesignCor" class="accordion-collapse collapse"
                                aria-labelledby="headingFormatoCor" data-bs-parent="#subFormato">
                                <div class="accordion-body radio-group d-flex flex-wrap">
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
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseConfortoEnchimento" aria-expanded="false"
                                    aria-controls="collapseConfortoEnchimento">
                                    Enchimento assentos
                                </button>
                            </h2>
                            <div id="collapseConfortoEnchimento" class="accordion-collapse collapse"
                                aria-labelledby="headingConfortoEnchimento" data-bs-parent="#subConforto">
                                <div class="accordion-body">
                                    <div id="collapseConfortoEnchimento" class="accordion-collapse collapse"
                                        aria-labelledby="headingConfortoEnchimento" data-bs-parent="#subConforto">
                                        <?php include 'accordion-items.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingConfortoCor">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseConfortoCor" aria-expanded="false"
                                    aria-controls="collapseConfortoCor">
                                    Abertura assentos
                                </button>
                            </h2>
                            <div id="collapseConfortoCor" class="accordion-collapse collapse"
                                aria-labelledby="headingConfortoCor" data-bs-parent="#subConforto">
                                <div class="accordion-body">
                                    <div id="collapseConfortoCor" class="accordion-collapse collapse"
                                        aria-labelledby="headingConfortoCor" data-bs-parent="#subConforto">
                                        <?php include 'accordion-items.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingConfortoCarregador">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseConfortoCarregador" aria-expanded="false"
                                    aria-controls="collapseConfortoCarregador">
                                    Carregador USB
                                </button>
                            </h2>
                            <div id="collapseConfortoCarregador" class="accordion-collapse collapse"
                                aria-labelledby="headingConfortoCarregador" data-bs-parent="#subConforto">
                                <div class="accordion-body">
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
    <div class="container d-flex justify-content-center text-center">
        <button class="btn-colored d-flex justify-content-around align-items-center">
            <span class="cart-icon"></span>
            Experimentar
        </button>
    </div>

    <div class="container d-flex justify-content-center text-center py-32 flex-column px-3">
        <p class="text-center">de R$4.529,75</p>
        <p class="text-center">por <strong>R$ 4.029,75</strong> à vista <strong>(5% de desconto)</strong> ou</p>
    </div>
    <div class="container d-flex justify-content-center pb-32 text-center">
        <h1 class="text-dark title text-center fw-bold">10X R$ 424,18</h1>
    </div>


    <div class="container d-flex justify-content-center align-items-center text-center pb-32 flex-column px-3">
        <img style="width:50px" src="/img/svg/truck.svg" />
        <h1 class="text-dark fw-bold text-center">Frete grátis</h1>
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
        <img style="width:50px" src="/img/svg/casa.svg" />
        <h1 class="text-dark fw-bold text-center px-5">10 dias para experimentar</h1>
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
        <img style="width:50px" src="/img/svg/selo.svg" />
        <h1 class="text-dark fw-bold text-center px-5">2 anos de garantia</h1>
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
        <img style="width:50px" src="/img/svg/chat.svg" />
        <h1 class="text-dark fw-bold text-center px-5">Ajuda para comprar</h1>
        <p class="text-center p-0 m-0">Converse com um especialista online ou ligue para:</p>
        <a href="tel:5543991025500">(43) 9 9102-5500</a>
        <button type="button" class="pt-3 btn-link" data-bs-toggle="modal" data-bs-target="#ajudaModal">Saiba mais
            ></button>
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

    <div class="container d-flex justify-content-center text-center">
        <button class="btn-colored d-flex justify-content-around align-items-center">
            <span class="cart-icon"></span>
            Experimentar
        </button>
    </div>
</div>
<div id="duvida" class="container-fluid px-0 m-0 py-32">
</div>
<div id="amostras" class="container-fluid px-0 m-0 py-32">
    <div class="container d-flex justify-content-center text-center flex-column">
        <p class="text-light w-100 px-5 text-center">Enviamos 3 amostras de tecido para sua casa.</p>
        <a href="#" class="text-center">Solicitar amostras ></a>
    </div>
</div>

<div class="container-fluid px-0 m-0">
    <img class="w-100" src="img/img/sofa1.png" />
</div>
<div class="container-fluid px-0 m-0">
    <img class="w-100" src="img/img/sofa1.png" />
</div>
<div class="container-fluid px-0 m-0">
    <img class="w-100" src="img/img/sofa1.png" />
</div>
<div class="container-fluid px-0 m-0">
    <img class="w-100" src="img/img/sofa1.png" />
</div>
<div class="container-fluid px-0 m-0">
    <img class="w-100" src="img/img/sofa1.png" />
</div>

<div id="medindo" class="container-fluid px-0 m-0 py-32">
    <div class="container d-flex justify-content-center text-start flex-column">
        <h1 class="title px-3"><strong>O dobro de espuma</strong><br> dos sofás<br> tradicionais</h1>

        <div class="col-6 px-3">

            <p class="pt-5 fst-italic ml3">"As espumas definem o conforto e a durabilidade de um sofá"</p>

            <p class="p-0 m-0">Daniel N. Filho</p>
            <p class="fw-bold">Co-founder Soft</p>
        </div>
    </div>
</div>

<div id="costurando" class="container-fluid px-0 m-0 py-32">
    <div class="container d-flex justify-content-end text-end flex-column">
        <h1 class="text-light px-3">Suporta<br> pessoas de</h1>
        <h1 class="px-3 title fw-bold"><strong>145kg</strong><br></h1>

            <div class="col-7 offset-5 pt-5">
                <p class="pt-5 text-light">Aprovado em laboratório de qualidade especializado, e testes de <strong>10
                        mil</strong> ciclos.</p>
                <p class="text-light p-0 m-0"><strong>9 anos</strong> sentando-se</p>
                <p class="fw-bold text-light">3 vezes ao dia</p>
            </div>
    </div>
</div>

<?php include 'avaliacao.php';?>

<div class="container-fluid px-0 m-0 py-32">
    <div class="container d-flex justify-content-center text-center">
        <h1 class="title"><strong>Inspirações</strong> do MOMA</h1>
    </div>
    <?php include 'configuracao.php';?>
</div>



<?php include 'perguntas.php';?>
<?php include 'form.php';?>

<script src="js/visibility.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<?php include 'footer.php';?>