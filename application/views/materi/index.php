<!--new-arrivals start -->
<section id="new-arrivals" class="new-arrivals mt-5">
    <div class="container">
        <div class="section-header">
            <h2>Materi</h2>
        </div>
        <!--/.section-header-->
        <div class="row justify-content-end mt-3">
            <div class="col-sm-4">
                <input class="form-control form-control-sm" id="filter" type="text" placeholder="Cari...">
            </div>
        </div>
        <div class="new-arrivals-content mt-5">
            <div class="row">
                <?php foreach ($allMateri as $key => $materi) { ?>
                    <div class="col-md-3 col-sm-4 material">
                        <div class="single-new-arrival">
                            <div class="single-new-arrival-bg mb-2">
                                <img src="storage/image/<?= $materi['image'] ?>" alt="new-arrivals images" />
                                <div class="single-new-arrival-bg-overlay"></div>
                            </div>
                            <div class="mt-4 box-materi">
                                <div class="row mb-1">
                                    <div class="col-sm-12 align-self-center text-right">
                                        <button type="button" id="downloadMateri" data-img="storage/image/<?= $materi['image'] ?>" data-name="<?= $materi['nama'] ?>" class="btn btn-outline-success btn-sm border-0">Download</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 align-self-center text-left">
                                        <h5><?= $materi['nama'] ?></h5>
                                    </div>
                                </div>
                                <p style="text-align: left" class="deskripsi-materi">
                                    <?= $materi['deskripsi'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/.new-arrivals-->
<!--new-arrivals end -->