<?php include 'header.php';?>
<?php include 'message.php';?>
<div class="container-fluid px-0 mx-0" style="margin-top:65px">
    <?php include 'menu.php';?>
</div>

    <div class="container-fluid py-32 px-0">
        <div class="container pb-32 d-flex justify-content-center align-items-center text-center">
            <div class="col-6 d-flex justify-content-around align-items-center">  
                <a href="">
                    <i class="step1 step selected d-flex justify-content-center align-items-center">
                        1
                    </i>
                </a>
                <i class="d-flex justify-content-center align-items-center">
                    <?php include 'img/svg/traco-step.svg';?>
                </i>
                <a href="">
                    <i class="step2 step d-flex justify-content-center align-items-center">
                        2
                    </i>
                </a>
                <i class="d-flex justify-content-center align-items-center">
                    <?php include 'img/svg/traco-step.svg';?>
                </i>
                <a href="">
                    <i class="step3 step d-flex justify-content-center align-items-center">
                        3
                    </i>
                </a>
            </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center text-center">
            <a href="#"><h1 class="title"><strong>Escolha</strong><br> seu estilo</h1></a>
        </div>
        <div class="container d-flex justify-content-center align-items-center text-center">
            <a class="arrow-down" href="#">
                <i class="icon-down">
                    <?php include 'img/svg/down.svg';?>
                </i>    
            </a>
        </div>
    </div>

    <div id="moma" class="container-fluid bg-black py-32 px-0">
        <div class="container d-flex justify-content-center pb-32 text-center flex-column px-5">
            <h1>Moma</h1>
            <p>Para quem ama design e não abre mão do conforto.</p>
            <div class="container d-flex justify-content-center">
            <button type="button" class="btn-link" data-bs-toggle="modal" data-bs-target="#freteModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="freteModal" tabindex="-1" aria-labelledby="freteModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <h1 class="text-dark"><strong>Informações sobre Moma</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Personalizar ></button>
                <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                    <div class="modal-dialog mx-0 px-0">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-0">
                            <div class="container d-flex flex-column align-items-center justify-content-center text-center pb-32">
                                <h1 class="title px-5 text-dark"><strong class="normal">Selecione uma configuração do <strong class="fw-bold">Moma</strong> para começar</strong></h1>
                                
                            
                            </div>

                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <?php include 'carrossel.php';?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'carrossel.php';?>
    </div>

    <div id="clausi" class="container-fluid py-32 px-0">
        <div class="container d-flex justify-content-center pb-32 text-center flex-column">
            <h1>Clausi</h1>
            <p>Para os minimalistas de plantão.</p>
            <div class="container d-flex justify-content-center">
            <button type="button" class="btn-link" data-bs-toggle="modal" data-bs-target="#freteModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="freteModal" tabindex="-1" aria-labelledby="freteModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <h1 class="text-dark"><strong>Informações sobre Clausi</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Personalizar ></button>
                <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                    <div class="modal-dialog mx-0 px-0">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-0">
                            <div class="container d-flex flex-column align-items-center justify-content-center text-center pb-32">
                                <h1 class="title px-5 text-dark"><strong class="normal">Selecione uma configuração do <strong class="fw-bold">Clausi</strong> para começar</strong></h1>
                                
                            </div>

                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <?php include 'configuracao.php';?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'carrossel.php';?>
    </div>

    <div id="tuim" class="container-fluid bg-tuim py-32 px-0">
        <div class="container d-flex justify-content-center pb-32 text-center flex-column">
            <h1>Tuim</h1>
            <p>O clássico amigão do Netflix</p>
            <div class="container d-flex justify-content-center">
            <button type="button" class="btn-link" data-bs-toggle="modal" data-bs-target="#freteModal">Saiba mais ></button>
            <div class="modal fade pt-32 mt-5" id="freteModal" tabindex="-1" aria-labelledby="freteModalLabel" aria-hidden="true">
                <div class="modal-dialog mx-0 px-0">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-0">
                            <h1 class="text-dark"><strong>Informações sobre Tuim</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
                <button type="button" class="btn-link px-2" data-bs-toggle="modal" data-bs-target="#tryModal">Personalizar ></button>
                <div class="modal fade pt-32 mt-5" id="tryModal" tabindex="-1" aria-labelledby="tryModalLabel" aria-hidden="true">
                    <div class="modal-dialog mx-0 px-0">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-0">
                            <div class="container d-flex flex-column align-items-center justify-content-center text-center pb-32">
                                <h1 class="title px-5 text-dark"><strong class="normal">Selecione uma configuração para começar</strong></h1>
                                <h1 class="title px-5"><strong class="fw-bold">Tuim</strong></h1>
                            </div>

                            <div class="container-fluid p-0 m-0 d-flex justify-content-center flex-column text-center">
                                <?php include 'configuracao.php';?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'carrossel.php';?>
    </div>

    

    <div id="comparando" class="container-fluid pb-32">
        <div class="container d-flex justify-content-center text-center py-32">
            <h1 class="title"><strong>Comparando</strong> os estilos</h1>
        </div>
        <div class="container blue-border p-4">
           <?php include 'medidas.php';?>
        </div>
    </div>
    
<?php include 'consultor.php';?>
<?php include 'consultor_pessoal.php';?>
