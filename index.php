<?php include 'header.php';?>
<?php include 'message_home.php';?>
<div class="container-fluid px-0 mx-0" style="margin-top:65px">
    <?php include 'menu.php';?>
</div>

<div class="container-fluid px-0 mx-0 principal">
    <div class="container px-5 py-16 text-center">
        <h1 class="title">Os sofás mais <strong>confortáveis</strong> e <strong>resistentes,</strong> personalizados por você.</h1>
    </div>
    <?php include 'carrossel-sem-link-top-index.php';?>
</div>


<div id="icones-box" class="container-fluid d-flex justify-content-center px-0 mx-0">
    <div class="home container d-inline-flex flex-wrap justify-content-between">
        <div class="col-3 d-flex flex-column align-items-center text-center">
            <div class="svg-icon text-center">
                <?php include 'img/svg/truck.svg';?>
            </div>
            <h3 class="fw-bold">Frete Grátis</h3>
            <p class="f-14">para diversos estados do Brasil</p>
            <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <h1 class="title">Informações do seu<br><strong> Saiba Mais</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 d-flex flex-column align-items-center text-center">
            <div class="svg-icon text-center">
                <?php include 'img/svg/casa.svg';?>
            </div>
            <h3 class="fw-bold">10 dias para experimentar</h3>
            <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <h1 class="title">Informações do seu<br><strong> Saiba Mais</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 d-flex flex-column align-items-center text-center">
            <div class="svg-icon text-center">
                <?php include 'img/svg/selo.svg';?>
            </div>
            <h3 class="fw-bold">2 anos de garantia</h3>
            <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <h1 class="title">Informações do seu<br><strong> Saiba Mais</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 py-32">
            <a href="step1.php" class="btn-colored fs-light d-flex justify-content-around align-items-center">
                Escolher meu estilo
            </a>
        </div>
    </div>
</div>

<div id="como-funciona" class="container-fluid bg-gray py-32">
    <h1 class="title pb-32 text-center"><strong>Como</strong> funciona?</h1>
    <div class="container py-32 d-flex flex-column justify-content-evenly">
        <div class="col-12 steps d-flex justify-content-around align-items-start">
            <div class="col-3">
                <i class="step1 step selected d-flex justify-content-center align-items-center">
                    1
                </i>
            </div>
            <div class="col-9">
                <h2 class="title"><strong>Escolha seu estilo</strong></h2>
                <p class="pb-32">Moma, Clausi ou Tuim</p>
            </div>
        </div>
        <div class="col-12 steps d-flex justify-content-around align-items-start">
            <div class="col-3">
                <i class="step2 step selected d-flex justify-content-center align-items-center">
                    2
                </i>
            </div>
            <div class="col-9">
                <h2 class="title"><strong>Personalize seu sofá</strong></h2>
                <p class="pb-32">Defina o formato, escolha o design e ersonalize o conforto</p>
            </div>
        </div>
        <div class="col-12 steps d-flex justify-content-around align-items-start">
            <div class="col-3">
                <i class="step3 step selected d-flex justify-content-center align-items-center">
                    3
                </i>
            </div>
            <div class="col-9">
                <h2 class="title"><strong>Experimente</strong></h2>
                <p class="pb-2 p-0 m-0">Compre pelo site e experimente em casa por 10 dias</p>
                <p class="pb-2 p-0 m-0">Agende uma demonstração online Solicite amostras de tecido.</p>
                <p class="pb-32">Agende uma visita na Guide Shop Londrina</p>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-between align-items-start">
            <div class="col-3 position-relative">
                <div class="svg-icon p-0 m-0">
                    <?php include 'img/svg/sofa-heart.svg';?>
                </div>
            </div>
            <div class="col-9">
                <h2 class="title"><strong>Apaixone-se pelo sofá mais confortável que você já viu.</strong></h2>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-0 mx-0 py-32">
    <div class="container d-flex text-center flex-column justify-content-center">
        <h1 class="title"><strong>Inspirações </strong>de</h1>
        <h1 class="title pl-64 pb-32">nossos clientes</h1>
    </div>
    <?php include 'carrossel-sem-link.php';?>
</div>

<div class="container-fluid pb-64">
    <div class="container blue-border position-relative text-center px-2 py-32 d-flex flex-column justify-content-center align-items-center">
        <h1 class="title"><strong>Compre pelo site </strong>e receba seu <strong>sofá em casa, </strong>personalizado, <strong>direto da fábrica.</strong></h1>
        <a href="step1.php" class="btn-colored-border fs-light d-flex justify-content-around align-items-center">
            Escolher meu estilo
        </a>
    </div>
</div>

<div class="container-fluid bg-gray py-32 px-0 mx-0">
    <?php include 'avaliacao.php';?>
    <a href="experimente.php" class="btn-colored mx-3 mt-64 fs-light d-flex justify-content-around align-items-center">
        Experimentar
    </a>
</div>

<?php include 'carousel_with_text.php';?>

<div id="nhec" class="container-fluid">
    <div class="container py-16">
        <h1 class="title pb-4 text-light">Almofadas <span class="fw-bold d-block">afundaram?</span></h1>
        <h1 class="title"><strong class="fw-bold">NHEC NHEC</strong></h1>
        <h1 class="title"><strong>apareceu?</strong></h1>
    </div>
</div>
<div class="container-fluid bg-dark">
    <div class="container text-center py-32 px-5">
        <p>Ja comprou um sofá bonito que, em pouco tempo, os assentos afundaram, barulhos estranhos começaram a aparecer e o conforto sumiu rapidinho?</p>
        <p>Isso aconteceu comigo. Então descobri que, para terem preços baixos, muitos fabricantes colocam materiais de baixíssima qualidade, onde a gente não consegue ver, mas percebe com o tempo :(</p>
    </div>
</div>

<div id="d40" class="container-fluid">
    <div class="container py-32">
        <h1 class="title">Espuma <span class="fw-bold">D40 </span>e as <span class="fw-bold">melhores matérias-primas </span>do mercado</h1>
    </div>
</div>

<div id="sofazinho" class="container-fluid">
    <div class="container pt-16">
        <div class="col-6 offset-6 d-flex flex-column align-items-center justify-content-end text-start">
            <h1 class="title">Aqui separamos os <strong>SOFÁS </strong>dos <strong>"sofazinhos"</strong></h1>
            <h1 class="title py-4"><strong>145kg 10 mil </strong>ciclos</h1>
            <p class="title mb-0"><strong>Laboratório exclusivo</strong></p>
            <p class="title">Testes robustos de qualidade simulam quase <strong>10 anos</strong> de uso</p>
        </div>
    </div>
</div>

<div id="dobro" class="container-fluid">
    <div class="container py-32 d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="title m-0">Escolha o</h1>
        <h1 class="title m-0"><strong>dobro de conforto</strong></h1>
        <div class="circle w-100 my-5">
            <h1>2<span>x</span></h1>
        </div>
        <h1 class="title m-0"><strong>mais espumas</strong></h1>
        <h1 class="title m-0">que os sofás tradicionais</h1>
    </div>
</div>

<div id="phone-personalize" class="container-fluid px-0">
    <div class="container py-32 d-flex justify-content-end text-center">
        <h1 class="title">Você <strong>personaliza</strong> o <strong>conforto</strong> de seu sofá</h1>
    </div>
    <img class="w-100" src="img/img/phone-personalize.jpg"/>
</div>

<div id="sofa-tenis" class="container-fluid py-16">
    <div class="container pb-16 d-flex flex-column justify-content-end text-center">
        <h1 class="title pb-2">Escolha <strong>do jeito que você gosta</strong></h1>
        <p class="fw-bold p-0 m-0">3 tipos de assento</p>
        <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
        <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
            <div class="modal-dialog mx-0 px-0">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                            <h1 class="title">Informações do seu<br><strong> Saiba Mais</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sofa-sorriso" class="container-fluid py-32">
    <div class="container pb-16 d-flex flex-column justify-content-end text-center">
        <h1 class="title">Sim.</h1>
        <h1 class="title"><strong>Você pode, </strong>e deve, <strong>experimentar </strong>antes de decidir.</h1>
    
    </div>
</div>

<div class="container-fluid pb-64">
    <div class="container pb-16">
        <a href="step1.php" class="mx-3 btn-colored fs-light d-flex justify-content-around align-items-center">
            Escolher meu estilo
        </a>
    </div>
</div>

<div class="container-fluid py-32 bt-gray footer-experiment">
    <div class="container d-flex flex-column align-items-center text-center">
        <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/chat.svg"/> -->
        <div class="svg-icon">
            <?php include 'img/svg/casa.svg';?>
        </div>
        <p class="fw-bold">Experimente em sua casa por 10 dias</p>
        <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
        <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
            <div class="modal-dialog mx-0 px-0">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-0">
                        <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                            <h1 class="title">Informações do seu<br><strong> Saiba Mais</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-32 bt-gray footer-experiment">
    <div class="container d-flex flex-column align-items-center text-center">
        <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/paper.svg"/> -->
        <div class="svg-icon">
        <?php include 'img/svg/pcchat.svg';?>
        </div>
        <p class="fw-bold">Experimente online com praticidade e tecnologia</p>
        <a href="#">Agendar demonstração online ></a>
    </div>
</div>

<div class="container-fluid py-32 bt-gray footer-experiment">
    <div class="container d-flex flex-column align-items-center text-center">
        <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/market.svg"/> -->
        <div class="svg-icon">
        <?php include 'img/svg/tecido.svg';?>
        </div>
        <p class="fw-bold">Receba amostras de tecidos</p>
        <a href="#">Solicitar amostras ></a>
    </div>
</div>

<div class="container-fluid bg-soft"></div>

<div class="container-fluid py-32 bt-gray footer-experiment">
    <div class="container d-flex flex-column align-items-center text-center">
        <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/market.svg"/> -->
        <div class="svg-icon">
        <?php include 'img/svg/market.svg';?>
        </div>
        <p>Experimente na Soft Guide Shop Londrina</p>
        <a href="#">Agendar visita ></a>

        <a href="step1.php" class="mt-5 btn-colored fs-light d-flex justify-content-around align-items-center">
            Escolher meu estilo
        </a>
    </div>
</div>

<?php include 'detalhes.php';?>

<div id="propaganda-card" class="container-fluid py-32">
    <div class="container d-flex flex-wrap">
        <div class="col-4 p-0 m-0 d-flex text-center flex-column align-items-center ">
            <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/truck.svg"/> -->
            <div class="svg-icon">
                <?php include 'img/svg/truck.svg';?>
            </div>
            <p class="fw-bold">Frete Grátis</p>
            <p class="p-0 m-0 f-14">para diversos estados do Brasil</p>
            <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <h1 class="title">Informações do seu<br><strong> Saiba Mais</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4 p-0 m-0 d-flex text-center flex-column align-items-center">
            <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/casa.svg"/> -->
            <div class="svg-icon">
                <?php include 'img/svg/casa.svg';?>
            </div>
            <p class="fw-bold">10 dias para experimentar</p>
            <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <h1 class="title">Informações do seu<br><strong> Saiba Mais</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4 p-0 m-0 d-flex text-center flex-column align-items-center">
            <!-- <img src="https://www.fronte.net.br/clientes/sofasoft/img/svg/selo.svg"/> -->
            <div class="svg-icon">
                <?php include 'img/svg/selo.svg';?>
            </div>
            <p class="fw-bold">2 anos de garantia</p>
            <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <h1 class="title">Informações do seu<br><strong> Saiba Mais</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="step1.php" class="mt-5 btn-colored fs-light d-flex justify-content-around align-items-center">
            Escolher meu estilo
        </a>
    </div>
</div>

<div id="quem-somos" class="container-fluid bg-black text-center py-32 px-0">
    <h1 class="title"><strong>Quem</strong> somos?</h1>
    <h1 class="title"><strong>Como</strong> fazemos?</h1>

    <p class="py-32 px-3">Acompanhamos o mercado de míveis a mais de 20 anos e cansamos de ver sofás super desconfortáveis, que afunda rapidinho e ainda faziam NHEC NHEC então criamos uma forma mais inteligente de fazer sofás e fundamos a Soft.</p>
    <img class="w-100" src="https://www.fronte.net.br/clientes/sofasoft/img/img/equipe.jpg"/>
    <p class="pt-32 px-3">A SOFT é uma Startup, com atendimento super humanizado, Lojas de Experimentação, Demonstração Online e uma plataforma digital onde você personaliza sua experiência de conforto montando seu próprio sofá.</p>
</div>

<div class="container-fluid px-0">
    <div class="container pt-32">
        <a href="step1.php" class="mb-5 btn-colored fs-light d-flex justify-content-around align-items-center">
            Escolher meu estilo
        </a>
        <p class="text-center text-dark">Com um <stong>modelo de negócio inovador,</stong>entregamos os <strong>sofás direto das fábricas </strong>transformando os custos dos intermediários em <strong>qualidade para nossos sofás.</strong> Por isso, praticamos preços democráticos mesmo utilizando o <strong>dobro de espuma </strong>dos sofás tradicionais e algumas das <strong>melhores matérias-primas </strong>do mercado, como a espuma D40</p>
    </div>
    <div class="container px-0">
        <img class="w-100" src="https://www.fronte.net.br/clientes/sofasoft/img/img/phone-personalize.png"/>
    </div>
</div>
<?php include 'form.php';?>