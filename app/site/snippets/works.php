<h2 class="projects__title fades">
  <?php echo page('works')->tagline()->text() ?>
</h2>

<ol class="projects__list">
  <?php foreach(page('works')->children()->visible()->limit(9) as $project): ?>
  <li class="fades">
    <a href="<?php echo $project->url() ?>" class="project__link pjax" data-hover="<?php if($coverImg = $project->cover()->toFile()): ?><?php echo $coverImg->url(); ?><?php endif ?>">

      <?php foreach($project->categories()->split(',') as $category): ?>
        <span class="project__category project__category--<?php echo $category ?>"><?php echo $category ?></span>
      <?php endforeach ?>

      <h3 class="project__intro">
        <?php echo $project->intro()->text() ?>
      </h3>
      <div class="project__date">
      <time datetime="<?php echo $page->date('Y') ?>">
        <?php echo $project->date('Y') ?>
      </time>
    </div>
    </a>
  </li>
  <?php endforeach ?>
</ol>

<script type="text/javascript">
// Dynamic Hover States
$('.project__link').hover( function() {
    var $hover = $(this).attr('data-hover');
    $('body').css({"background-image":"url(" + $hover + ")"});

}).mouseleave(function(){
  $('body').css({"background-image":"none"});
});
$('.project__link').click( function() {
    $('body').css("background-image", "none");
});
</script>
