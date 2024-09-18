<?php include("includes/data.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $account_page_title ?></title>
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
                <?php include("includes/action.php") ?>
                <?php if($is_valid == true) { ?>
                    <div class="col-lg-6 m-auto">
                        <div class="custom-card">
                            <div class="card pt-5 pb-5 shadow-lg rounded-3 border-0">
                                <img src="<?php echo $user_img ?>" class="card-img-top rounded-top w-50 m-auto" alt="Card Image">
                                <div class="card-body p-4 d-flex flex-wrap justify-content-between">
                                    <?php foreach($user_info as $title => $text) { ?>
                                        <div>
                                            <h5 class="card-title text-capitalize text-primary fw-bold">
                                                <?php echo $title ?>
                                            </h5>
                                            <p class="card-text text-secondary"><?php echo $text ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="card-footer bg-transparent border-top-0 m-auto p-0">
                                    <a href="#" class="btn btn-primary btn-block"><?php echo $more_text; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>