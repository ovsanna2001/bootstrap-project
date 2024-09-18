<?php include("data.php") ?>
<nav class="navbar navbar-expand-lg text-bg-info shadow-sm" id="navbar-container">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="<?php echo $logo?>" alt="logo">
    </a>
    <!-- Toggle button for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible navbar content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php foreach ($menu_items as $text => $link): ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo $link ?>"><?php echo $text ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</nav>

