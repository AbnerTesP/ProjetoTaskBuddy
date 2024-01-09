<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>


    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/img/logo.png', ['class' => 'Logo']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-light',
        ],
    ]);
    $menuItems = [
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Loja', 'url' => ['/produtos/index', 'filtro' => 0]],
        ['label' => 'Grupo', 'url' => ['/grupo/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0 '],
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-primary login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-primary logout text-decoration-none']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container mw-100">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer>     <div class="container-fluid  mt-5 py-5">
    <div class="container pt-5">
        <div class="row g-5">

            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Contacta-nos</h5>
                <p class="mb-4">Se tiver alguma duvida ou precisar de ajuda não receie em contactar-nos!</p>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Rua 123, Leiria, Portugal</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>taskbuddy@gmail.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+351 123421842</p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Links </h5>
                <div class="d-flex flex-column justify-content-start">
                    <?= Html::a('<i class="bi bi-arrow-right text-primary me-2"></i>Home', ['/'], ['class' => 'text-body mb-2'])?>
                    <?= Html::a('<i class="bi bi-arrow-right text-primary me-2"></i>Sobre', ['/site/about'], ['class' => 'text-body mb-2'])?>
                    <?= Html::a('<i class="bi bi-arrow-right text-primary me-2"></i>Loja', ['/produtos/index' , 'filtro' => 0], ['class' => 'text-body mb-2'])?>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h6 class="text-uppercase mt-4 mb-3">Segue-nos</h6>
                <div class="d-flex">
                    <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
