<?php

/** @var yii\web\View $this */

use common\models\Perfilutilizador;
use yii\helpers\Html;
use common\models\Userprofile;


$this->title = 'Sobre Nós';

?>
<div class="site-about container mw-70 pt-5">
    <h1><?= Html::encode($this->title) ?></h1>

    <body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block ">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">A Nossa Sede</h6>
                        <span>Rua 123, Leiria, Portugal</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Envia-nos um Email</h6>
                        <span>taskbuddy@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Liga-nos</h6>
                        <span>+351 912345678</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <?= Html::img('@web/img/Family.png', ['class' => 'position-absolute w-100 h-100 rounded', 'style' => 'object-fit: cover'])?>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">Sobre Nos</h6>
                        <h1 class="display-5 text-uppercase mb-0">Nós ajudamos na sua organização</h1>
                    </div>
                    <h4 class="text-body mb-4"></h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                        aria-selected="true">Nossa missão</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                        aria-selected="false">Nossa visão</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">A nossa missão é criar uma aplicação inovadora de monitorização, incentivando os jovens a assumirem responsabilidades diárias. Através desta aplicação, os supervisores podem acompanhar as atividades dos seus educandos, atribuir tarefas específicas e recompensar a sua conclusão.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Atualmente, observa-se uma falta de orientação e motivação nos jovens para assumirem tarefas diárias essenciais, que é preocupante. Muitos pais e responsáveis enfrentam desafios ao tentar instigar seus filhos a abraçarem responsabilidades do quotidiano. Em resposta a essa crescente necessidade, surge a ideia de desenvolver uma aplicação inovadora de monitorização, projetada para organizar e tornar mais gratificante a execução de tarefas diárias. </p>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Help End -->



    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    <?= Html::jsFile('@web/assets/owlcarousel/owl.carousel.min.js')?>


    <!-- Template Javascript -->
    <?= Html::jsFile('@web/jQuery/main.js')?>





</div>


