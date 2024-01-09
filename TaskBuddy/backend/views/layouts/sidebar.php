<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    [ 'label' => 'Gestão de Funcionários',
                        'icon' => 'user-plus',
                        'items' => [
                            ['label' => 'Administradores','url' => ['user/index', 'role' => 'admin'], 'icon' => 'user'],
                            ['label' => 'Gestores','url' => ['user/index', 'role' => 'gestor'], 'icon' => 'user'],
                        ]],
                    ['label' => 'Lista de Clientes', 'url' => ['user/index', 'role' => 'client'], 'icon' => 'users'],
                    ['label' => 'Loja', 'header' => true],
                    ['label' => 'Encomendas Realizadas','url'=>['encomendas/index'], 'icon' => 'archive'],
                    ['label' => 'Gestão de Produtos','url'=>['produtos/index/', 'filtro' => 0], 'icon' => 'shopping-cart'],
                    ['label' => 'Tipos de Porduto', 'url'=>['categorias/index'], 'icon' => 'tags'],
                    ['label' => 'Gestão de Métodos', 'header' => true],
                    ['label' => 'Métodos de Pagamemto', 'url' => ['tipospagamento/index'], 'icon' => 'credit-card'],
                    ['label' => 'Métodos de Expedição', 'url' => ['tiposexpedicao/index'], 'icon' => 'truck'],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    
                    
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>