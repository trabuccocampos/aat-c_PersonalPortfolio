<?php snippet('header') ?>

  <main class="main profile" role="main" id="pjax-container">

    <div class="text">
      <section class="profile__intro">
        <h1 class="project__title fades"><?php echo $page->title()->html() ?></h1>
        <article class="profile__share fades">
          <?php echo $page->text()->kirbytext() ?>
        </article>
      </section>

      <section class="profile__about">
        <article class="profile__about--do fades">
          <h2>What I do</h2>
          <?php echo $page->aboutDo()->kirbytext() ?>
        </article>
        <article class="profile__about--what fades">
          <h2>Who I am</h2>
          <?php echo $page->aboutAm()->kirbytext() ?>
        </article>
      </section>


      <section class="profile__credits">
        <figure class="profile__credits--img fades">
          <img src="<?php echo $page->image('profile_aa.jpg')->url() ?>" alt="Andrea A. Trabucco-Campos" />
        </figure>
        <article class="profile__credits--type fades">
          <?php echo $page->creditsType()->kirbytext() ?>
          <br>
          <?php echo $page->creditsBuild()->kirbytext() ?>
        </article>
      </section>
    </div>

  </main>

<?php snippet('footer') ?>
