<?php
global $plxShow;

/**
* Display the url of a given static page
* Example:
*  <a href=<?php staticUrl('001') ?> >Link to static page 1</a>
*/
function staticUrl($p_static_id)
{
  global $plxMotor;
  echo $plxMotor->urlRewrite('?static' . $p_static_id . '/' . $plxMotor->aStats[$p_static_id]['url']);
}

?>

<section class="banner grid" role="banner">
  <h1>Drac Vercors Escalade</h1>

  <div class="item col lrg-3 med-12 sml-12">
    <div class="image">
      <img src="data/medias/dve.png" alt="Drac Vercors Escalade"/>
    </div>
  </div>

  <div class="item col lrg-8 med-10 sml-12">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut
      aliquip ex ea commodo consequat. Duis aute irure dolor in
      reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
      pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
      culpa qui officia deserunt mollit anim id est laborum.
    </p>

  </div>

  <div class="item col lrg-1 med-1 sml-12">
    <aside>
      <h1>Social networks</h1>
      <ul class="social">
        <li>
          <a class="icon fa-facebook-square fa-2x" href="https://www.facebook.com/Drac-Vercors-Escalade-160141077367724/?fref=ts"></a>
        </li>
        <li>
          <a class="icon fa-google-plus-square fa-2x" href="https://plus.google.com/106253265394319628557"></a>
        </li>
        <li>
          <a class="icon fa-rss-square fa-2x" href=<?php staticUrl('020') ?> ></a>
        </li>
        <li>
          <a class="icon fa-envelope-square fa-2x" href=<?php staticUrl('005') ?> ></a>
        </li>
      </ul>
    </aside>
  </div>

  <br style="clear: both" />

  <ul class="actions">
    <li><a href=<?php staticUrl('008') ?> class="button special fixed">Adhérer au club</a></li>
    <li><a href=<?php staticUrl('002') ?> class="button fixed">En savoir plus</a></li>
    <li><a href=<?php staticUrl('023') ?> class="button fixed">Voir le calendrier</a></li>
  </ul>

</section>

<section class="light new-highlight">
  <h1>À la une</h1>

  <div class="col lrg-9 med-8 sml-12">
    <div class="grid">
      <?php
      // Display the 2 last articles of the category "À la une"
      $nbArticles = 2;
      $category = '004';

      $format  = '<div class="col lrg-6 med-6 sml-12">';
      $format .= '<article class="article single">';
      $format .= '<header>';
      $format .= '<div class="image center-and-crop">#art_thumbnail</div>';
      $format .= '<div class="title">';
      $format .= '<a class="icon fa-angle-double-right" href="#art_url">Lire la suite</a>';
      $format .= '<h1>#art_title</h1>';
      $format .= '#art_chapo(400)';
      $format .= '</div>';
      $format .= '</header>';
      $format .= '</article>';
      $format .= '</div>';

      $plxShow->lastArtList($format, $nbArticles, $category);
      ?>
    </div>
  </div>

  <div class="col lrg-2 med-2 sml-12">
    <section class="light newsletter">
      <h1>Newsletter</h1>

      <form action="newsletter-subscribe.php" method="post">
        <fieldset>
          <input class="fixed" type="email" id="email" name="email" placeholder="name@provider.com" required>
        </fieldset>

        <a href="newsletter-subscribe.php"  class="button special fixed">S'abonner</a>

      </form>

      <a class="more" href=<?php staticUrl('009') ?> >Voir les newsletters précédentes</a>

    </section>
  </div>

</section>

<br style="clear: both" />

<nav class="dark">
  <h1>L'actualité du club</h1>

  <ul>
    <?php $plxShow->catList('', '<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name (#art_nb)</a></li>') ?>
  </ul>
</nav>

<br style="clear: both" />

<section class="light grid preview">
  <h1>Derniers articles</h1>

  <?php
  // Display a quick preview of the last 12 articles
  $nbArticles = 12;

  $format  = '<div class="item col lrg-3 med-6 sml-12">';
  $format .= '<article title="#art_title">';
  $format .= '<div class="image center-and-crop background">';
  $format .= '<a href="#art_url" title="#art_title">';
  $format .= '#art_thumbnail';
  $format .= '</a>';
  $format .= '<div class="date icon fa-calendar">#art_date</div>';
  $format .= '<div class="category">#cat_list</div>';
  $format .= '</div>';
  $format .= '<a href="#art_url" title="#art_title">';
  $format .= '<h3>#art_title</h3>';
  $format .= '</a>';
  $format .= '</article>';
  $format .= '</div>';

  $plxShow->lastArtList($format, $nbArticles);
  ?>

</section>
