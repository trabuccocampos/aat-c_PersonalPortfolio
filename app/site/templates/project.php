<?php snippet('header') ?>

  <main class="main project" role="main" id="pjax-container">

    <section class="project__basics">
      <h1 class="project__title fades"><?php echo $page->title()->html() ?></h1>
      <time class="project__date fades" datetime="<?php echo $page->date('Y') ?>"><?php echo $page->date('Y') ?></time>
      <div class="project__meta fades">
        <?php foreach($page->categories()->split(',') as $category): ?>
          <span class="project__category project__category--<?php echo $category ?>"><?php echo $category ?></span>
        <?php endforeach ?>
      </div>
      <h2 class="project__subtitle fades"><?php echo $page->intro()->kirbytext() ?></h2>
      <article class="project__scroll fades">
        <p>&darr; Scroll to view the project &darr;</p>
      </article>
    </section>

    <figure class="fades project__cover--wrapper">
      <img class="project__cover" src="<?php if($coverImg = $page->cover()->toFile()): ?><?php echo $coverImg->url(); ?><?php endif ?>" alt="">
    </figure>

    <article class="project__details text">
      <div class="project__details--row">
        <div class="project__details--brief fades">
          <h3>Brief</h3>
          <?php echo $page->brief()->kirbytext() ?>
        </div>
        <div class="project__details--concept fades">
          <h3>Concept</h3>
          <?php echo $page->concept()->kirbytext() ?>
        </div>
      </div>
      <div class="project__details--row">
        <div class="project__details--clien fades">
          <h3>Client</h3>
          <?php echo $page->client()->kirbytext() ?>
        </div>
        <div class="project__details--team fades">
          <h3>Team</h3>
          <?php echo $page->team()->kirbytext() ?>
        </div>
        <div class="project__details--role fades">
          <h3>Role</h3>
          <!-- <?php echo html($page->role()) ?> -->
          <ul>
            <?php foreach($page->role()->split(',') as $role): ?>
              <li><?php echo $role ?></li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="project__details--typefaces fades">
          <h3>Typefaces</h3>
          <?php echo $page->typefaces()->kirbytext() ?>
        </div>
      </div>
    </article>

    <?php if($page->featured_video()->isNotEmpty()): ?>
      <div class="featured_video">
        <?= $page->featured_video()->oembed() ?>
      </div>
    <?php endif; ?>

    <?php
    $filenames = $page->photos()->split(',');
     if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
     $files = call_user_func_array(array($page->files(), 'find'), $filenames); ?>
    <?php foreach($files as $file): ?>
     <figure class="img--layzr project__img">
       <img src="<?php echo url('assets/images/img_loader.gif') ?>" data-layzr="<?php echo $file->url() ?>" alt="Project image by Trabucco-Campos">
     </figure>
     <?php endforeach ?>

     <script type="text/javascript">
         var layzr = new Layzr({
          callback: function() {
           this.classList.add('fades');
          }
        });
     </script>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev pjax" href="<?php echo $prev->url() ?>">
        previous
        <h4><?php echo $prev->title() ?></h4>
      </a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next pjax" href="<?php echo $next->url() ?>">next
        <h4><?php echo $next->title() ?></h4>
      </a>
      <?php endif ?>
    </nav>

    <section class="works">
      <?php snippet('works') ?>
    </section>
  </main>

<?php snippet('footer') ?>
