<?php if (!defined('PLX_ROOT')) exit; ?>

<footer class="footer" role="contentinfo">
  <div class="logos grid">
    <div class ="item col lrg-2 med-2 sml-5">
      <a href="http://ville-fontaine.fr" rel="nofollow">
        <img src="data/medias/logos/fontaine.png" alt="Ville de Fontaine" title="Ville de Fontaine" />
      </a>
    </div>

    <div class ="item col lrg-2 med-2 sml-5">
      <a href="http://www.sassenage.fr" rel="nofollow">
        <img src="data/medias/logos/sassenage.png" alt="Ville de Sassenage" title="Ville de Sassenage" />
      </a>
    </div>

    <div class ="item col lrg-2 med-2 sml-5">
      <a href="http://www.ffcam.fr" rel="nofollow">
        <img src="data/medias/logos/ffcam.png" alt="FFCAM" title="FFCAM" />
      </a>
    </div>

    <div class ="item col lrg-2 med-2 sml-5">
      <a href="http://www.ffme.fr" rel="nofollow">
        <img src="data/medias/logos/ffme.png" alt="FFME" title="FFME" />
      </a>
    </div>

    <div class ="item col lrg-2 med-2 sml-5">
      <a href="http://www.auvieuxcampeur.fr" rel="nofollow">
        <img src="data/medias/logos/vieux-campeur.png" alt="Au vieux campeur" title="Au vieux campeur" />
      </a>
    </div>
  </div>

  <ul class="credits horizontal">
    <li>&copy; 2016 <?php $plxShow->mainTitle('link'); ?></li>
    <li>Réalisation&nbsp;: <a href="http://www.rgoffe.org" title="Romain Goffe">Romain Goffe</a></li>
    <li><?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a></li>
    <li class="icon fa-lock"><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
  </ul>
</footer>

</body>

</html>
