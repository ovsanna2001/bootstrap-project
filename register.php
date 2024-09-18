<?php include("includes/data.php");?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $reg_page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="d-flex flex-column">
    <header>
      <?php include("includes/menu.php") ?>
    </header>
    <main class="pt-5 pb-5">
      <section id="first-section">
        <div class="container border border-light border-5 rounded-5 pt-2 pb-2 bg-primary-subtle shadow-lg">
          <h1>Registration Form</h1>
          <form action="myaccount.php" method="post">
            <div class="mb-3">
              <label for="fullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 row form-group">
                <label for="year" class="form-label">Date of birth</label>
                <div class="col-lg-4">
                  <select name="year" id="year" class="form-select">
                    <option value="">Select Year</option>
                    <?php  for($i=1900; $i<=2015; $i++){ ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-lg-4">
                  <select name="day" id="day" class="form-select">
                    <option value="">Select Day</option>
                    <?php  for($i=1; $i<=31; $i++){ ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-lg-4">
                  <select name="month" id="month" class="form-select">
                    <option value="">Select Month</option>
                    <?php  foreach($months as $i => $month) { ?>
                      <option value="<?php echo $i+1; ?>"><?php echo $month; ?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
            </div>
            <div class="mb-3 form-group">
              <label for="gender" class="form-label">Gender</label>
              <label class="d-block">
                <input type="radio" class="form-check-input" id="exampleCheck1" name="gender" value="Male"> Male
              </label>
              <label class="d-block">
                <input type="radio" class="form-check-input" id="exampleCheck2" name="gender" value="Female"> Female
              </label>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Submit</button>
          </form>
        </div>
      </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>