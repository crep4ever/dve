<?php include(dirname(__FILE__).'/header.php'); ?>

<main class="main grid" role="main">

  <div class="col lrg-8 med-12 sml-12">

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
            <a href="<?php $plxShow->artUrl(); ?>#comments"><?php $plxShow->artNbCom(); ?></a>
          </div>
        </small>
      </header>

      <section>
        <div class="image align-center center-and-crop "><?php $plxShow->artThumbnail(); ?></div>
        <br style="clear: both" />
        <?php $plxShow->artContent(); ?>
      </section>

      <section class="album">
        <?php eval($plxShow->callHook('ArtgalerieDisplay')); ?>
      </section>
    </article>

    <?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

    <section class="article comments">
      <?php include(dirname(__FILE__).'/commentaires.php'); ?>
    </section>

  </div>

  <?php include(dirname(__FILE__).'/sidebar.php'); ?>

</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
