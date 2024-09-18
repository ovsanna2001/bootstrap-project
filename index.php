<?php include("includes/data.php") ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $home_page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="d-flex flex-column">
    <header>
      <?php include("includes/menu.php") ?>
      <section id="carousel-section">
        <div class="container m-auto">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <?php echo $buttons; ?>
            </div>
            <div class="carousel-inner">
              <?php foreach ($home_slider_images as $i => $img): 
                  if($i == 0) {
                    $is_active = "active";
                  } else {
                    $is_active = "";
                  }
                ?>
                <div class="carousel-item <?php echo $is_active ?>">
                  <img src="<?php echo $img ?>" class="d-block w-md-100 rounded-5" alt="img <?php echo $i ?>">
                  <div class="carousel-caption d-none d-md-block border border-5 rounded position-absolute top-50">
                    <h5 class="carousel-desc"><?php echo $home_carusel_descs[$i]; ?></h5>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
            <!-- Optional: Carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
  </header>
  <main class="pt-5 pb-5">
    <section>
      <div class="container m-auto">
        <h1 class="text-center"><?php echo $h1_text ?></h1>
        <div class="row mt-5">
          <div class="col-lg-5 col-md-6 col-12 mx-auto">
            <h2 class="text-center"><?php echo $about_title ?></h2>
            <p class="text-justify"><?php echo $about_desc1 ?></p>
          </div>
          <div class="col-lg-5 col-md-6 col-12 mx-auto">
            <p class="pt-5"><?php echo $about_desc2 ?></p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-5 pb-5">
        <h2 class="text-center"><?php echo $service_title ?></h2>
        <?php foreach ($services_titles as $i => $title): 
            if($i % 2 == 0) {
              $is_reverse = "flex-row-reverse";
            } else {
              $is_reverse = "";
            }
        ?>
          <div class="row mt-5 align-items-center justify-content-between <?php echo  $is_reverse?>">
            <div class="col-lg-5 col-md-6 col-12 mb-3">
              <img src="<?php echo $services_imgs[$i] ?>" alt="service<?php echo $i  ?>" class="w-100 rounded-5">
            </div>
            <div class="col-lg-5 col-md-6 col-12 custom-card border border-light border-5 rounded-5 pt-2 pb-2 shadow-lg mb-3">
              <h3><?php echo $title ?></h3>
              <p class="text-justify"><?php echo $services_descs[$i] ?></p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  </main>
    <?php include("includes/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>