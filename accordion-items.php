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
                <div class="pic bg-white d-flex flex-column justify-content-between align-items-center">
                    <a href="#">Ficou em dúvidas?</a>
                    <a id="saiba-mais-button" href="#">Saiba mais ></a>
                    <!-- Modal -->
                    <div class="modal fade" id="saiba-mais-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Informações</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>