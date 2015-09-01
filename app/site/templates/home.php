<?php snippet('header') ?>

  <main class="main" role="main" id="pjax-container">
    <section class="intro">
      <article><h1 class="intro__opening fades"><?php echo $page->text()->kirbytext() ?></h1></article>
    </section>
    <section class="works">
      <?php snippet('works') ?>
    </section>
  </main>

<?php snippet('footer') ?>
