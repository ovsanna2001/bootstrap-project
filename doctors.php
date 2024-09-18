<?php include("includes/data.php");?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $doc_page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="d-flex flex-column">
    <header>
      <?php include("includes/menu.php") ?>
    </header>
    <main class="pt-5 pb-5">
      <section id="first-section">
        <div class="container">
          <div class="row justify-content-center">
            <?php  foreach($doctors as $data){ ?>
              <div class="card mb-3 ms-3 p-0 custom-card col-lg-4 col-md-3 col-sm-12">
                  <img src="<?php echo $data['image'] ?>" class="card-img-top w-100" alt="doctor<?php echo $data['id'] ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $data['name'] ?></h5>
                    <p class="card-text"><?php echo $data['desc'] ?></p>
                    <a href="single.php?id=<?php echo $data['id'] ?>" class="btn btn-outline-info">More About Doctor</a>
                  </div>
                </div>
            <?php }?>
          </div>
        </div>
      </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>