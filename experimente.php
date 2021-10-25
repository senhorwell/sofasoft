<?php include 'header.php';?>
<?php include 'price.php';?>
<div class="container-fluid px-0 mx-0" style="margin-top:100px">
    <?php include 'configuracao.php';?>
</div>

    <div class="container-fluid py-32 px-0">
        <div class="container pb-32 d-flex justify-content-center align-items-center text-center">
            <img src="img/img/step1.png"/>
        </div>
        <div class="container d-flex justify-content-center align-items-center text-center">
            <a href="step2_1.php"><h1 class="title"><strong>Escolha</strong><br> seu sofa</h1></a>
        </div>
        <div class="container d-flex justify-content-center align-items-center text-center">
            <a class="arrow-down" href="step2_1.php"><img src="img/svg/down.svg"/></a>
        </div>
    </div>
    
    <div class="container d-flex justify-content-center text-center flex-column">
        <button class="btn-colored d-flex justify-content-center">
            <span class="cart-icon"></span>
            <strong><h1>Experimentar em casa</h1></strong>
        </button>
        <p class="compre">
            <i class="fa fa-info-circle" style="color: #3c72b0;"></i>
            Compre e experimente em casa por 10 dias
        </p>

        <p>de R$ 4.529,75</p>
        <p>por <strong>R$ 4.029,75</strong> à vista <strong>(5% de desconto)</strong> ou</p>
        <h1 class="text-dark fw-bold">10 X R$ 424,18</h1>
    </div>

    <div class="accordion container-fluid p-0" id="meusofa">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Meu sofá
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                        <p class="title">Medida</p>
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

    <div class="container d-flex justify-content-center text-center flex-column py-32">
        <a href="#">Alterar seu sofá ></a>
    </div>

    <div id="propaganda-card" class="container-fluid py-32">
        <div class="container d-flex flex-wrap">
            <div class="col-6 p-0 m-0 d-flex text-center flex-column align-items-center ">
                <!-- <img src="img/svg/truck.svg"/> -->
                <div class="svg-icon">
                    <?php include 'img/svg/truck.svg';?>
                </div>
                <p class="fw-bold tt-t">Frete Grátis</p>
                <p>para diversos estados do Brasil</p>
                <a href="#">Saiba mais ></a>
            </div>

            <div class="col-6 p-0 m-0 d-flex text-center flex-column align-items-center">
                <!-- <img src="img/svg/casa.svg"/> -->
                <div class="svg-icon">
                    <?php include 'img/svg/casa.svg';?>
                </div>
                <p class="fw-bold tt-t">10 dias para experimentar</p>
                <a href="#">Saiba mais ></a>
            </div>

            <div class="col-6 p-0 m-0 d-flex text-center flex-column align-items-center">
                <!-- <img src="img/svg/selo.svg"/> -->
                <div class="svg-icon">
                    <?php include 'img/svg/selo.svg';?>
                </div>
                <p class="fw-bold tt-t">2 anos de garantia</p>
                <a href="#">Saiba mais ></a>
            </div>

            <div class="col-6 p-0 m-0 d-flex text-center flex-column align-items-center">
                <!-- <img src="img/svg/chat.svg"/> -->
                <div class="svg-icon">
                    <?php include 'img/svg/chat.svg';?>
                </div>
                <p class="fw-bold tt-t">Ajuda para comprar</p>
                <p>Converse com uma especialista online ou ligue para: <a href="tel:43991025500">43 9 9102 5500</a></p>
                <a href="#">Saiba mais ></a>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center text-center flex-column">
        <button class="btn-colored d-flex justify-content-center text-center">
                <span class="cart-icon"></span>
                <strong><h1>Experimentar em casa</h1></strong>
        </button>
        <p class="compre">
            <i class="fa fa-info-circle" style="color: #3c72b0;"></i>
            Compre e experimente em casa por 10 dias
        </p>
    </div>

    <div class="container-fluid py-32 bt-gray footer-experiment">
        <div class="container d-flex flex-column align-items-center text-center">
            <!-- <img src="img/svg/chat.svg"/> -->
            <div class="svg-icon">
                <?php include 'img/svg/chat.svg';?>
            </div>
            <p>Se preferir, tire suas dúvidas em uma experiência online, e receba ótimas dicas de decoração das Consultoras de Design ;)</p>
            <a href="#">Agendar demosntração online ></a>
        </div>
    </div>
    
    <div class="container-fluid py-32 bt-gray footer-experiment">
        <div class="container d-flex flex-column align-items-center text-center">
            <!-- <img src="img/svg/paper.svg"/> -->
            <div class="svg-icon">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.56 58.58"><defs><style>.cls-1{fill:#000;}</style></defs><title>issft</title><path class="cls-1" d="M18.63,51.46a.75.75,0,0,1,.69-.47,1.34,1.34,0,0,1,.35,0,43.08,43.08,0,0,1,16.1,7.2,1.29,1.29,0,0,0,1,.32,1.23,1.23,0,0,0,.7-.77L52.75,23.15,56.35,15a1.32,1.32,0,0,0-.06-1.53,25.22,25.22,0,0,0-4.94-4.68A54.9,54.9,0,0,0,33.17.52,13.4,13.4,0,0,0,26.72.29a2.78,2.78,0,0,0-2.36,2.44c-.2,1.12-.45,2.21-.71,3.37-.12.5-.24,1-.35,1.54l-.06.25L23,7.81l-1-.32c-.7-.23-1.35-.45-2-.69Q14.18,4.63,8.34,2.41a.86.86,0,0,0-1.14.23,1,1,0,0,0-.12,1.17,4.26,4.26,0,0,1,.47,1.41l0,.38c.18,2,.36,4.12.43,6.18.25,7.09-.34,12.44-1.9,17.34-.76,2.4-1.49,4.85-2.19,7.22-.39,1.32-.78,2.64-1.18,4C1.86,43.21,1,46.11.06,49a1.08,1.08,0,0,0,.38,1.22,20.52,20.52,0,0,0,9.19,5.13C14,56.49,16.43,55.43,18.63,51.46Zm8.1-48.85a1.26,1.26,0,0,1,1-.53,20.78,20.78,0,0,1,7.06,1A47.9,47.9,0,0,1,48.63,9.15,29.88,29.88,0,0,1,54,13.71a1.08,1.08,0,0,1,.22,1.35q-2,4.53-4,9.08l-13.65,31-.22.47-.23.5L35.9,56A44.22,44.22,0,0,0,20,49.14l-.25,0,.07-.25c.11-.37.22-.73.32-1.08.23-.77.44-1.5.68-2.23l2.4-7.2c1.56-4.68,3.17-9.52,4.71-14.29,1.15-3.55,2.12-7.09,3-10.38a13.94,13.94,0,0,0,.35-2.33c.05-.48.1-1,.18-1.47a2.14,2.14,0,0,0-.58-1.56l-.08-.11c-.66-.94-1.43-1.84-2.18-2.71L28.18,5a5.78,5.78,0,0,0-.55-.56,6.62,6.62,0,0,1-.69-.71A1.28,1.28,0,0,1,26.73,2.61ZM25.58,6.23l.25-1L29.74,9.3l-.6,0h-.42a3.1,3.1,0,0,1-.64-.06c-.95-.21-1.72-.4-2.42-.6a.76.76,0,0,1-.47-.7C25.29,7.34,25.43,6.8,25.58,6.23Zm-9,44.92a4,4,0,0,1-3.8,2.48h0a13.44,13.44,0,0,1-3.6-.47,18.05,18.05,0,0,1-6.61-3.59,1,1,0,0,1-.38-1.2C3.75,43.56,5.52,38.11,7.23,32.7A59.08,59.08,0,0,0,10,11.37c-.07-1.33,0-2.64,0-4,0-.62,0-1.26,0-1.89V5.11l1.15.45c.64.25,1.3.51,2,.75l2.8,1c1.81.66,3.68,1.34,5.5,2.05a28.43,28.43,0,0,0,6.39,1.68l.89.07.57,0,.27,0-.06.27c-.12.49-.22,1-.32,1.44a31,31,0,0,1-.75,3c-2.28,7.24-4.65,14.59-6.94,21.7l-.1.29c-1,3.25-2.07,6.43-3.17,9.6a32,32,0,0,1-1.42,3.35Z"/></svg>
            </div>
            <p>Está em dúvida no tecido? Enviamos amostras para sua casa. Selecione até 3 opções e receba-as em até 5 dias úteis.</p>
            <a href="#">Solicitar amostras ></a>
        </div>
    </div>

    <div class="container-fluid py-32 bt-gray footer-experiment">
        <div class="container d-flex flex-column align-items-center text-center">
            <!-- <img src="img/svg/market.svg"/> -->
            <div class="svg-icon">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65.78 51.09"><defs><style>.cls-1{fill:#000;}</style></defs><title>issft</title><path class="cls-1" d="M59.76,26.33h0a1.12,1.12,0,0,0-.72.54,2.57,2.57,0,0,0-.11,1.06V49.48h-52V28.38c0-.14,0-.27,0-.41a1.69,1.69,0,0,0-.06-.8,2.36,2.36,0,0,0-.6-.69l-.16-.14L6,26.47a4.72,4.72,0,0,0-.64.72,1.06,1.06,0,0,0,0,.45c0,.1,0,.2,0,.29V29.3q0,10.31,0,20.6c0,.31,0,.62,0,.94,0,.09,0,.17,0,.25h55a.59.59,0,0,0,0-.13,2.86,2.86,0,0,0,.07-.54V27.56a1.55,1.55,0,0,1,0-.21c0-.11,0-.31,0-.36S60,26.34,59.76,26.33Zm-3.36.36a1.54,1.54,0,0,0-1.16-.3c-9.2,0-18.86,0-28.72,0h0a1.44,1.44,0,0,0-1.07.29,1.54,1.54,0,0,0-.27,1.1c0,2.5,0,5,0,7.49v3.27c0,1.77,0,1.77,1.71,1.77H55c1.63,0,1.63,0,1.64-1.69,0-1.13,0-2.26,0-3.38,0-2.42,0-4.92,0-7.38A1.59,1.59,0,0,0,56.4,26.69ZM55.31,38.94H26.56V27.79H55.31ZM22.14,26.62a1.26,1.26,0,0,0-.95-.25c-3.76,0-7.23,0-10.6,0h-.05a1.33,1.33,0,0,0-1,.27,1.43,1.43,0,0,0-.27,1.05c0,2.2,0,4.44,0,6.61v5.21c0,2.16,0,4.39,0,6.59a1.45,1.45,0,0,0,.28,1,1.48,1.48,0,0,0,1,.28c3.43,0,7,0,10.45,0a1.55,1.55,0,0,0,1.07-.27,1.39,1.39,0,0,0,.28-1c0-5.72,0-11.79,0-18.55A1.31,1.31,0,0,0,22.14,26.62ZM21,46.05H10.7V27.72H21ZM65.3,16.39C63.45,11.65,61.81,7,59.85,1.44a1.78,1.78,0,0,0-2-1.44h0C42.8,0,26.46,0,7.9,0h0A1.63,1.63,0,0,0,6.06,1.23q-1.68,4.71-3.4,9.41Q1.45,14,.25,17.29A3.81,3.81,0,0,0,0,18.76,6.09,6.09,0,0,0,2.47,23.2,5.55,5.55,0,0,0,7,24.2a11.87,11.87,0,0,0,3.14-1.43c.49-.28,1-.57,1.52-.83l.17-.08L12,22a6.55,6.55,0,0,0,4.58,2.41c1.76.05,3.63-.89,5.53-2.76l.21-.2.17.23a6.16,6.16,0,0,0,5.07,2.67,6.33,6.33,0,0,0,5.19-2.68l.18-.22.2.21c3.34,3.58,6.45,3.59,10.42,0l.18-.16.17.17c1.68,1.78,3.3,2.66,5,2.69s3.42-.81,5.26-2.6l.15-.15.17.12c.3.22.6.46.9.69a11.81,11.81,0,0,0,1.93,1.32,5.82,5.82,0,0,0,6.68-1.1A5.33,5.33,0,0,0,65.3,16.39ZM11,16.94c-.08.36-.14.72-.2,1.08a14,14,0,0,1-.27,1.38,4.49,4.49,0,0,1-4,3.36H6.08A4.41,4.41,0,0,1,2,20a3.94,3.94,0,0,1-.12-2.42C3.39,13.18,5.1,8.47,7.24,2.79A1.92,1.92,0,0,1,8.61,1.65c1.28-.08,2.57-.07,3.94-.06h1.89l-1,4.24C12.62,9.61,11.79,13.27,11,16.94ZM21.5,17q0,.76-.12,1.53a4.65,4.65,0,0,1-1.79,3.33,4.6,4.6,0,0,1-6.49-1,4.7,4.7,0,0,1-.57-3.69l.7-3c.84-3.66,1.71-7.44,2.51-11.16.23-1,.69-1.41,1.72-1.37s2.18,0,3.33,0h1.84Zm10.58,1.39a4.39,4.39,0,0,1-1.37,3.17,4.52,4.52,0,0,1-3.13,1.23h-.19a4.55,4.55,0,0,1-3.2-1.48A4.74,4.74,0,0,1,23,17.9c0-.8.1-1.62.17-2.41l.09-1.12.95-12.71H31.8l.07.14c0,.05.05.09.07.14a.7.7,0,0,1,.14.38c0,1.32,0,2.64,0,4C32.11,10.24,32.13,14.34,32.08,18.37Zm6.51,4.39h-.34a4.72,4.72,0,0,1-3.12-1.19,3.89,3.89,0,0,1-1.32-2.78c-.09-4-.07-8-.05-12,0-1.63,0-3.26,0-4.9V1.68H41.6L41.78,4c.14,1.72.27,3.43.4,5.13.06.82.13,1.63.19,2.44.17,2.09.34,4.24.46,6.37A4.52,4.52,0,0,1,38.59,22.76Zm14.28-2.08a4.74,4.74,0,0,1-3,2,4.8,4.8,0,0,1-.85.08,4.7,4.7,0,0,1-2.83-1,4,4,0,0,1-1.6-2.8c-.37-4.06-.66-8.19-.93-12.19-.1-1.51-.2-3-.31-4.54A.58.58,0,0,1,43.4,2l.1-.19.07-.15H45c1.29,0,2.62,0,3.95,0a1.45,1.45,0,0,1,1,1c1.14,4.82,2.35,10,3.49,15.19A3.7,3.7,0,0,1,52.87,20.68Zm9.91.89a4.29,4.29,0,0,1-3,1.22A5,5,0,0,1,58,22.41a4.34,4.34,0,0,1-2.71-3.2Q53.43,10.87,51.6,2.53a1.42,1.42,0,0,1,0-.37,2.63,2.63,0,0,0,0-.3V1.61h1.72c1.36,0,2.65,0,3.95,0a1.66,1.66,0,0,1,1.25.91c2.06,5.5,3.88,10.48,5.56,15.21C64.54,19.08,64.1,20.36,62.78,21.57Z"/></svg>
            </div>
            <p>Ou experimente na <strong>Soft Guide Shop Londrina</strong> e conheça tudo o que precisa para montar o sofá perfeito para você.</p>
            <a href="#">Agendar visita ></a>
        </div>
    </div>