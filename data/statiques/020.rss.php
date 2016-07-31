<?php global $plxShow; ?>

<section>
  <div class="grid">

    <div class="col lrg-6 med-6 sml-12">
      <h3>Flux principaux</h3>
      <ul>
        <li class="icon fa-rss"><a href="feed.php?rss" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">Flux de tous les articles</a></li>
        <li class="icon fa-rss"><a href="feed.php?rss/commentaires" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">Flux de tous les commentaires</a></li>
      </ul>

      <h3>Flux partiels</h3>

      <ul>
        <?php
        ob_start();
        $plxShow->catList('', '<li class="icon fa-rss"><a href="feed.php?rss/#cat_id">Flux des articles de la catégorie <i>#cat_name</i></a></li>');
        $url = ob_get_contents();
        ob_end_clean();

        $url = str_replace("cat-", "categorie", $url);
        echo $url;
        ?>
      </ul>

    </div>

    <div class="col lrg-6 med-6 sml-12">
      <h3 class=" icon fa-info-circle">Que sont les flux RSS ?</h3>

      <p>
        Les flux RSS présentent les titres des derniers articles et commentaires publiés.
        Ils peuvent être agrégés par <a href="https://en.wikipedia.org/wiki/News_aggregator">diverses applications</a>.
      </p>
      <p>
        Ils permettent ainsi de consulter rapidement la publication des nouveaux articles d'un ensemble de sites internet sans avoir besoin
        de s'y rendre directement.
      </p>
    </div>

  </div>
</section>