<?php include(dirname(__FILE__).'/header.php'); ?>

<main class="main grid wrapper" role="main">

  <section class="col lrg-8 med-12 sml-12">

    <ul class="repertory menu breadcrumb">
      <li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
      <li>
        <?php $plxShow->catName(); ?>
        <?php $plxShow->catDescription(' : #cat_description'); ?>
      </li>
    </ul>

    <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

      <article class="article single" role="article" id="post-<?php echo $plxShow->artId(); ?>">

        <header>
          <h1>
            <?php $plxShow->artTitle(); ?>
          </h1>
          <small>
            <div class="left icon fa-user">
              <?php $plxShow->artAuthor() ?>
            </div>
            <div class="left icon fa-calendar">
              <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
            </div>
            <div class="left icon fa-tags">
              <?php $plxShow->artCat() ?>
            </div>
            <div class="left icon fa-comments">
              <?php $plxShow->artNbCom(); ?>
            </div>
          </small>
        </header>

        <section class="grid">
          <div class="col lrg-3 med-3 sml-12">
            <div class="align-center"><?php $plxShow->artThumbnail(); ?></div>
          </div>
          <div class="col lrg-9 med-9 sml-12 content">
            <?php $plxShow->artChapo(); ?>
          </div>
        </section>

      </article>

    <?php endwhile; ?>

    <nav class="pagination text-center">
      <?php $plxShow->pagination(); ?>
    </nav>

  </section>

  <?php include(dirname(__FILE__).'/sidebar.php'); ?>

</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
