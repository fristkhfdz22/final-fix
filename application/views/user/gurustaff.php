<style>
    .card img {
        height: 200px;
        object-fit: cover;
    }

    .card {
        cursor: pointer;
        flex: 1;
    }
</style>

<div class="judul" style="color: black;">
    <h1>Guru dan Tenaga Kependidikan</h1>
    <div class="underline"></div>
</div>
<br>

<div id="carouselExampleControls2" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner" id="prestasi">
        <?php if (!empty($gurustaff)) : ?>
            <?php foreach ($gurustaff as $index => $staff) : ?>
                <?php if ($index % 3 == 0) : ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <div class="d-flex">
                        <?php endif; ?>

                        <div class="col-4 p-2">
                            <div class="card">
                                <div class="card-body" style="height: 100%;">
                                    <div class="img">
                                        <img src="<?= base_url('uploads/gurustaff/' . $staff->gambar) ?>" alt="" width="50%" height="50%" style="margin-left: 25%; border: 3px solid grey; border-radius: 3px;">
                                        <br><br>
                                        <h4 style="margin-left: 15%;"><?= $staff->nama ?></h4>
                                        <h6 style="margin-left: 35%;"><?= $staff->jabatan ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if ($index % 3 == 2 || $index == count($gurustaff) - 1) : ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Tidak ada data guru dan staff yang tersedia.</p>
        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>





<style>
    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 50%;
        width: 50px;
        height: 50px;
        background-color: #070b10;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgb(32, 58, 224);
        font-size: 2rem;
        z-index: 1000;
        transform: translateY(-50%);
        cursor: pointer;
    }

    #customPrevBtn3 {
        left: -60px;
        color: red;
        background-color: #070b10;
    }

    #customNextBtn3 {
        right: -50px;
        color: red;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .doctores_box {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .doctores_box:hover {
        transform: scale(1.05);
    }

    .image_1 img {
        display: block;
    }

    @media (max-width: 768px) {
        .doctores_box {
            width: 90%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
            font-size: 1.5rem;
        }

        h5 {
            font-size: 12px;
        }
    }

    @media (max-width: 576px) {
        .doctores_box {
            width: 95%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 35px;
            height: 35px;
            font-size: 1.3rem;
        }

        h5 {
            font-size: 10px;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var carousel2 = $('#prestasiCarousel3');

        $('#customPrevBtn3').on('click', function() {
            carousel2.carousel('prev');
        })
        $('#customNextBtn3').on('click', function() {
            carousel2.carousel('next');
        });
    });
</script>

<br>
<br>