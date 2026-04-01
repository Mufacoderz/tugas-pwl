<!-- 1 -->

<section id="beranda" class="position-relative overflow-hidden min-vh-100 d-flex align-items-center">

    <div class="position-absolute top-0 start-0 w-100 h-100">
        <img src="<?= BASE_URL ?>/app/Views/assets/images/bg-hero.jpg"
            class="w-100 h-100 object-fit-cover">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
    </div>

    <div class="container position-relative z-1 pt-4 pt-lg-0">
        <div class="row align-items-center min-vh-100">

            <?php require BASE_PATH . '/app/Views/partials/header.php'; ?>
            <?php require BASE_PATH . '/app/Views/partials/headerImg.php'; ?>




        </div>
    </div>
</section>



<!-- 2 -->


<section id="tentang" class="position-relative overflow-hidden py-5 min-vh-100 overflow-hidden">


    <div class="container py-5 mt-5  z-1">

        <div class="d-flex align-items-center gap-2 mb-3 ">
            <span class="about-line d-inline-block"></span>
            <span class="text-uppercase fw-semibold small head-label-text golden-text">Who We Are</span>
        </div>

        <div class="row align-items-end mb-5">
            <div class="col-lg-6">
                <h2 class="fw-bold about-heading lh-sm mb-0 primary-text">
                    Experience <span class="golden-text">The Art Of</span><br>
                    Interior <span class="text-dark">Design</span>
                </h2>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0">
                <p class="text-muted  col-lg-5 lh-lh fs-6 mb-0">
                    Kami hadir untuk mewujudkan setiap visi Anda menjadi kenyataan. Temukan beragam proyek desain interior inovatif kami yang dirancang dengan cermat dan penuh dedikasi.
                </p>
            </div>
        </div>

        <?php require BASE_PATH . '/app/Views/partials/service.php'; ?>


    </div>
</section>



<!-- 3 -->
<section id="projek" class="py-5 min-vh-100 d-flex align-items-center">
    <div class="container py-5">

        <div class="d-flex align-items-center gap-2 mb-3">
            <span class="about-line d-inline-block"></span>
            <span class="text-uppercase fw-semibold small head-label-text golden-text">Featured Projects</span>
        </div>

        <div class="row align-items-end mb-5">
            <div class="col-lg-6">
                <h2 class="fw-bold lh-sm mb-0 primary-text">
                    Proyek <span class="golden-text">Unggulan</span><br>
                    Yang Telah <span class="text-dark">Kami Selesaikan</span>
                </h2>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0">
                <p class="text-muted col-lg-8 fs-6 mb-0">
                    Setiap proyek adalah cerminan dedikasi kami dalam menghadirkan
                    desain interior terbaik untuk klien kami.
                </p>
            </div>
        </div>

        <?php require BASE_PATH . '/app/Views/partials/carousel.php'; ?>

    </div>
</section>