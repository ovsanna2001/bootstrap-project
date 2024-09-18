<?php include("data.php") ?>
<footer class="text-bg-info mt-auto text-light">
    <div class="container d-flex flex-wrap justify-content-between align-items-center pt-3 pb-3">
        <p class="col-md-4 mb-0 text-white">© 2024 Company, Inc</p>
        <a class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none" href="index.php">
            <img src="<?php echo $logo ?>" alt="logo">
        </a>
        <ul class="nav col-md-4 justify-content-end">
        <?php foreach ($menu_items as $text => $link): ?>
            <li class="nav-item">
                <a href="<?php echo $link ?>" class="nav-link px-2 text-white"><?php echo $text ?></a>
            </li>
        <?php endforeach ?>
        </ul>
    </div>  
</footer>