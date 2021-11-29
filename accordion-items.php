<div class="accordion-body p-0">
    <div class="radio-group row px-3 text-center flex-wrap">
        <?php        
            for($i=0; $i < 9; $i++){
        ?>
            <div class="col-4 py-2 form-block">
                <div class="card-block p-0 text-center radio">
                    <div class="pic">
                        <img class="" src="https://www.fronte.net.br/clientes/sofasoft/img/img/costura.png" width="100px"
                            height="100px">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <span class="money">R$ 1500,00</span>
                </div>
            </div>
        <?php        
            }
        ?>
        <div class="col-4 py-2 form-block">
            <div class="card-block p-0 text-center">
                <div class="pic bg-white d-flex flex-column align-items-center">
                    <a href="#">Ficou em dúvida?</a>
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
        </div>
    </div> 
</div>