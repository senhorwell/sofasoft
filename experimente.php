<?php include 'header.php';?>
<?php include 'price-last.php';?>
    <div class="container-fluid py-32 px-0">
        <div class="container py-16 d-flex justify-content-center align-items-center text-center">
            <div class="col-6 d-flex justify-content-around align-items-center">  
                <a href="index.php">
                    <i class="step1 step d-flex justify-content-center align-items-center">
                        1
                    </i>
                </a>
                <i class="d-flex justify-content-center align-items-center">
                    <?php include 'img/svg/traco-step.svg';?>
                </i>
                <a href="step2.php">
                    <i class="step2 step d-flex justify-content-center align-items-center">
                        2
                    </i>
                </a>
                <i class="d-flex justify-content-center align-items-center">
                    <?php include 'img/svg/traco-step.svg';?>
                </i>
                <a href="#">
                    <i class="step3 step selected d-flex justify-content-center align-items-center">
                        3
                    </i>
                </a>
            </div>
        </div>
        <div class="container pb-32 d-flex justify-content-center align-items-center text-center">
            <a href="step2_1.php"><h1 class="title"><strong>Experimente</strong><br> seu sofa</h1></a>
        </div>

        <?php include 'carrossel-experimente.php';?>

        <div class="container d-flex justify-content-center align-items-center text-center">
            <a class="arrow-down" href="#">
                <i class="icon-down">
                    <?php include 'img/svg/down.svg';?>
                </i>    
            </a>
        </div>
    </div>
    
    <div class="container d-flex justify-content-center text-center flex-column">

        <p>de <span class="money">R$ 4.529,75</span></p>
        <p class="m-0">por <strong class="money">R$ 4.029,75</strong> à vista <strong>(5% de desconto)</strong> ou</p>
        <h1 class="text-dark fw-bold price py-16 m-0">10 X R$ 424,18</h1>

        <a href="experimente.php" class="btn-colored fs-light d-flex justify-content-around align-items-center">
            <span class="cart-icon"></span>
            Experimentar em casa
        </a>
        <p class="compre">
            <i class="fa fa-info-circle" style="color: #3c72b0;"></i>
            Compre e experimente em casa por 10 dias
        </p>

    </div>

    <div class="accordion container-fluid p-0" id="meusofa">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Resumo do meu Sofá
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapsed collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body p-0 m-0">
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">Estilo</p>
                        <p class="subtitle">Moma</p>
                    </div>
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">Formato</p>
                        <p class="subtitle">3 assentos retráteis</p>
                    </div>
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">ss</p>
                        <p class="subtitle">3,00m</p>
                    </div>
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">Braço</p>
                        <p class="subtitle">25cm</p>
                    </div>
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">Tecido</p>
                        <p class="subtitle">Linho</p>
                    </div>
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">Cor</p>
                        <p class="subtitle">Azul Linho</p>
                    </div>
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">Enchimento assentos</p>
                        <p class="subtitle">Estável e Macio</p>
                    </div>
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">Abertura assentos</p>
                        <p class="subtitle">Automático</p>
                    </div>
                    <div class="meusofa-item px-5 pt-4 pb-2 d-flex flex-column">
                        <p class="title">Carregador USB</p>
                        <p class="subtitle">USB braço direito</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center text-center flex-column pt-32">
        <a href="#">Alterar seu sofá ></a>
    </div>

    <div id="propaganda-card" class="container-fluid py-32">
        <div class="container d-flex flex-wrap">
            <div class="col-6 p-0 m-0 d-flex text-center flex-column align-items-center ">
                <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/truck.svg"/> -->
                <div class="svg-icon">
                    <?php include 'img/svg/truck.svg';?>
                </div>
                <p class="fw-bold">Frete Grátis</p>
                <p class="p-0 m-0 f-14">para diversos estados do Brasil</p>
                <a href="#">Saiba mais ></a>
            </div>

            <div class="col-6 p-0 m-0 d-flex text-center flex-column align-items-center">
                <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/casa.svg"/> -->
                <div class="svg-icon">
                    <?php include 'img/svg/casa.svg';?>
                </div>
                <p class="fw-bold">10 dias para experimentar</p>
                <a href="#">Saiba mais ></a>
            </div>

            <div class="col-6 p-0 m-0 d-flex text-center flex-column align-items-center">
                <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/selo.svg"/> -->
                <div class="svg-icon">
                    <?php include 'img/svg/selo.svg';?>
                </div>
                <p class="fw-bold">2 anos de garantia</p>
                <a href="#">Saiba mais ></a>
            </div>

            <div class="col-6 p-0 m-0 d-flex text-center flex-column align-items-center">
                <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/chat.svg"/> -->
                <div class="svg-icon">
                    <?php include 'img/svg/chat.svg';?>
                </div>
                <p class="fw-bold">Ajuda para comprar</p>
                <p class="p-0 m-0 f-14">Converse com uma especialista online ou ligue para: <a href="tel:43991025500">43 9 9102 5500</a></p>
                <a href="#">Saiba mais ></a>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center text-center flex-column">
        <a href="experimente.php" class="btn-colored fs-light d-flex justify-content-around align-items-center">
            <span class="cart-icon"></span>
            Experimentar em casa
        </a>
        <p class="compre">
            <i class="fa fa-info-circle" style="color: #3c72b0;"></i>
            Compre e experimente em casa por 10 dias
        </p>
    </div>

    <div class="container-fluid py-32 bt-gray footer-experiment">
        <div class="container d-flex flex-column align-items-center text-center">
            <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/chat.svg"/> -->
            <div class="svg-icon">
                <?php include 'img/svg/pcchat.svg';?>
            </div>
            <p>Se preferir, tire suas dúvidas em uma experiência online, e receba ótimas dicas de decoração das Consultoras de Design ;)</p>
            <a href="#">Agendar demosntração online ></a>
        </div>
    </div>
    
    <div class="container-fluid py-32 bt-gray footer-experiment">
        <div class="container d-flex flex-column align-items-center text-center">
            <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/paper.svg"/> -->
            <div class="svg-icon">
            <?php include 'img/svg/tecido.svg';?>
            </div>
            <p>Está em dúvida no tecido? Enviamos amostras para sua casa. Selecione até 3 opções e receba-as em até 5 dias úteis.</p>
            <a href="#">Solicitar amostras ></a>
        </div>
    </div>

    <div class="container-fluid py-32 bt-gray footer-experiment">
        <div class="container d-flex flex-column align-items-center text-center">
            <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/market.svg"/> -->
            <div class="svg-icon">
            <?php include 'img/svg/market.svg';?>
            </div>
            <p>Ou experimente na <strong>Soft Guide Shop Londrina</strong> e conheça tudo o que precisa para montar o sofá perfeito para você.</p>
            <a href="#">Agendar visita ></a>
        </div>
    </div>

    <div class="container d-flex justify-content-center text-center flex-column">
        <a href="experimente.php" class="btn-colored fs-light d-flex justify-content-around align-items-center">
            <span class="cart-icon"></span>
            Experimentar em casa
        </a>
    </div>