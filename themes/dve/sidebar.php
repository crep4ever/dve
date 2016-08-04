<?php if(!defined('PLX_ROOT')) exit; ?>

<aside class="aside col sml-12 med-12 lrg-4" role="complementary">
  <h3>
    <?php $plxShow->lang('CATEGORIES'); ?>
  </h3>

  <ul class="cat-list unstyled-list">
    <?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a>&nbsp;(#art_nb)</li>'); ?>
  </ul>

  <h3>
    <?php $plxShow->lang('LATEST_ARTICLES'); ?>
  </h3>

  <ul class="lastart-list unstyled-list">
    <?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>', 10); ?>
  </ul>

  <h3>
    <?php $plxShow->lang('LATEST_COMMENTS'); ?>
  </h3>

  <ul class="lastcom-list unstyled-list">
    <?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>', 10); ?>
  </ul>

</aside>
