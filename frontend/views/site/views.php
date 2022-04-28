<?php

/* @var $data \frontend\controllers\SiteController */

?>

<div class="container py-3 mb-5" style="margin-top: 100px">
    <div class="title h3 text-center text-primary"><?=\common\models\User::findOne($data['user_id'])->companyName?> Maxsuloti</div>
    <!-- Card Start -->
    <div class="card mt-5">
        <div class="row">

            <div class="col-md-8 px-3">
                <div class="p-3 px-6">
                    <h4 class="card-title text-black font-weight-bolder "><?=$data['name']?></h4>
                    <p class="card-text">
                        <?=$data['description']?>
                    </p>
                    <p class="card-text text-primary h4">
                        <span class="text-secondary h6">Ishlab chiqaruvchi</span> <br>
                        <?=\common\models\User::findOne($data['user_id'])->companyName?>
                    </p>
                    <br>
                    <a  class="mt-auto btn btn-primary  text-white">Bozordagi Narxi : <?=$data['price']?> UZS</a>
                </div>
            </div>
            <!-- Carousel start -->
            <div class="col-md-4 p-3">
                <div id="CarouselTest" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                        <li data-target="#CarouselTest" data-slide-to="1"></li>

                    </ol>
                    <div class="carousel-inner" style="height: 300px;">
                        <div class="carousel-item active">
                            <img class="d-block img-thumbnail" style="object-fit: cover; width: 100%" src="/img/<?=$data['img_1']?>" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-thumbnail" style="object-fit: cover; width: 100%" src="/img/<?=$data['img_2']?>" alt="">
                        </div>
                        <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of carousel -->
        </div>
    </div>
    <!-- End of card -->

</div>

<style>
    body {
        background-color:  #eee;
    }
    .title {

        margin-bottom: 50px;
        text-transform: uppercase;
    }

    .card-block {
        font-size: 1em;
        position: relative;
        margin: 0;
        padding: 1em;
        border: none;
        border-top: 1px solid rgba(34, 36, 38, .1);
        box-shadow: none;

    }
    .card {
        font-size: 1em;
        overflow: hidden;
        padding: 5px;
        border: none;
        border-radius: .28571429rem;
        box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
        margin-top:20px;
    }

    .carousel-indicators li {
        border-radius: 12px;
        width: 12px;
        height: 12px;
        background-color: #404040;
    }
    .carousel-indicators li {
        border-radius: 12px;
        width: 12px;
        height: 12px;
        background-color: #404040;
    }
    .carousel-indicators .active {
        background-color: white;
        max-width: 12px;
        margin: 0 3px;
        height: 12px;
    }
    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
    }

    .btn {
        margin-top: auto;
    }
</style>
