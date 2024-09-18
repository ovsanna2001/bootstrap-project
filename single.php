<?php 
  include("includes/data.php");
  $id = $_GET['id'];
  $doctor = $doctors[$id];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $single_page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="d-flex flex-column">
    <header>
      <?php include("includes/menu.php") ?>
    </header>
    <main class="pt-5 pb-4">
      <section id="first-section">
        <div class="container">
          <div class="card mb-3 border border-light border-5 bg-primary-subtle shadow-lg custom-card">
            <div class="row g-0 align-items-center">
              <div class="col-md-4">
                <img src="<?php echo $doctor['image'] ?>" class="img-fluid" alt="doctor<?php echo $doctor['id'] ?>">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $doctor['name'] ?></h3>
                  <p class="card-text"><?php echo $doctor['desc'] ?></p>
                  <h5>Education</h5>
                  <p><?php echo $doctor['education'] ?></p>
                  <h5>Work Expariance</h5>
                  <p><?php echo $doctor['work_experience'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>