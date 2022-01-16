<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!--/.carousel-indicator -->
    <!-- <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active">
            <span class="small-circle"></span>
        </li>
    </ol> -->
    <!-- /ol-->
    <!--/.carousel-indicator -->

    <!--/.carousel-inner -->
    <div class="carousel-inner" role="listbox">
        <!-- .item -->
        <div class="item active">
            <div class="single-slide-item slide1">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h2>Belajar Lebih Mudah Dengan Poster</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiuiana smod tempor ut labore et dolore
                                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip.
                                        </p>

                                        <button class="btn-cart welcome-add-cart" id="open-allMateri" style="border-radius: 20px">
                                            Lihat Materi
                                        </button>
                                    </div>
                                    <!--/.welcome-hero-txt-->
                                </div>
                                <!--/.single-welcome-hero-->
                            </div>
                            <!--/.col-->
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="assets/images/slider/slider.png" alt="slider image" />
                                    </div>
                                    <!--/.welcome-hero-txt-->
                                </div>
                                <!--/.single-welcome-hero-->
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.welcome-hero-content-->
                </div>
                <!-- /.container-->
            </div>
            <!-- /.single-slide-item-->
        </div>
        <!-- /.item .active-->
    </div>
    <!-- Modal -->
    <!-- /.carousel-inner-->
</div>
<!--/#header-carousel-->
</header>
<div class="modal fade" id="modal-allMateri" tabindex="-1" aria-labelledby="allMateriLabel" aria-hidden="true">
    <!-- <div class="modal-dialog"> -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach ($allMateri as $key => $materi) {
                        if ($i == $key) {
                    ?>
                            <div class="carousel-item active">
                                <img src="storage/image/<?= $materi['image'] ?>" class="d-block w-100">
                            </div>
                        <?php } else { ?>
                            <div class="carousel-item">
                                <img src="storage/image/<?= $materi['image'] ?>" class="d-block w-100">
                            </div>
                    <?php }
                    } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
            <!-- </div> -->
        </div>
    </div>

</div>
<!--/.welcome-hero-->
<!--welcome-hero end -->

<!--/.populer-products-->
<!--populer-products end-->