<div id="views-bootstrap-carousel-<?php print $id ?>" class="<?php print $classes ?>" <?php print $attributes ?>>
  <?php if ($indicators): ?>
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
      <?php foreach ($rows as $key => $value): ?>
        <li data-target="#views-bootstrap-carousel-<?php print $id ?>" data-slide-to="<?php print $key ?>" class="<?php if ($key === 0) print 'active' ?>"></li>
      <?php endforeach ?>
    </ol>
  <?php endif ?>

  <!-- Carousel items -->
  <div class="carousel-inner">
    <?php foreach ($rows as $key => $row): ?>
      <div class="item <?php if ($key === 0) print 'active' ?>">
        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
          <?php print $row ?>
        </div>
      </div>
    <?php endforeach ?>
  </div>

  <?php if ($navigation): ?>
    <!-- Carousel navigation -->
    <a class="carousel-control left" href="#views-bootstrap-carousel-<?php print $id ?>" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="carousel-control right" href="#views-bootstrap-carousel-<?php print $id ?>" data-slide="next">
      <span class="icon-next"></span>
    </a>
  <?php endif ?>
</div>