<?php snippet('header') ?>

  <main class="main" role="main" id="pjax-container">

    <div class="text">
      <h1 class="project__title fades"><?php echo $page->title()->html() ?></h1>

      <div class="fades">
      <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>

  </main>

<?php snippet('footer') ?>
