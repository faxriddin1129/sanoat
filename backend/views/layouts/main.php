<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\bootstrap4\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=\yii\helpers\Url::home()?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-user"></i>
            </div>
            <div class="sidebar-brand-text mx-3">IS Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?=\yii\helpers\Url::home()?>">
                <i class="fas fa-home"></i>
                <span>Bosh sahifa</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menyular
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"-->
<!--               aria-expanded="true" aria-controls="collapseTwo">-->
<!--                <i class="fas fa-fw fa-cog"></i>-->
<!--                <span>Sayt malumotlari</span>-->
<!--            </a>-->
<!--            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">-->
<!--                <div class="bg-white py-2 collapse-inner rounded">-->
<!--                    <h6 class="collapse-header">Malumotlar:</h6>-->
<!--                    <a class="collapse-item" href="#">Kanfiguratsiyalar</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-calendar"></i>
                <span>Yangilik va E`lonlar</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Yangilik va E`lonlar:</h6>
                    <a class="collapse-item" href="<?=\yii\helpers\Url::to(['news/index'])?>">Yangiliklar</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Asosiy
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['user/index'])?>">
                <i class="fas fa-users"></i>
                <span>Ro'yxatdan o'tganlar</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['production/index'])?>">
                <i class="fas fa-chart-line"></i>
                <span>Maxsulotlar</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['contact/index'])?>">
                <i class="fas fa-envelope"></i>
                <span>Xabarlar</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div id="content" style="width: 100%;">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Izlash..."
                           aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['contact/index'])?>">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter"><?=\common\models\Contact::find()->where(['status'=>0])->count('id')?></span>
                    </a>
                </li>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=Yii::$app->user->identity->username?></span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <span>
                               <?php
                               echo Html::a('Chiqish',
                                   ['site/logout'],
                                   [
                                       'class' => 'dropdown-item',
                                       'data' => [
                                           'method' => 'post',
                                       ],
                                   ]
                               );
                               ?>
                            </span>


                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->


            <div class="container-fluid">
                    <?=$content?>
            </div>

    </div>

</div>


<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

