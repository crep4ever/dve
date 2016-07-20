<?php
global $plxShow;

function staticUrl($p_static_id)
{
  global $plxMotor;
  echo $plxMotor->urlRewrite('?static' . $p_static_id . '/' . $plxMotor->aStats[$p_static_id]['url']);
}

?>

<section class="grid">

<div class="col lrg-6 med-6 sml-12">
<h2>Inscriptions 2016</h2>

<p class="important">Attention, seuls les dossiers complets seront acceptés.</p>
<p>Documents à fournir&nbsp;:</p>

<ul>
<li>Fiche d'adhésion (disponible sur place ou en téléchargement sur ce site)</li>
<li> Certificat médical</li>
<li> Règlement intérieur</li>
<li> Chèque d'adhésion</li>
</ul>

<p>Pour les compétiteurs, pièces à fournir en plus&nbsp;:</p>
<ul>
<li> Certificat médical d'aptitude à la pratique de l'escalade en compétition</li>
<li> Charte du compétiteur signée.</li>
</ul>

<h4>Anciens adhérents</h4>

<ul>
<li>Mercredi 31 Aout 18h00/20h00 Gymnase Gérard Philipe (Fontaine)</li>
<li>Jeudi 1 septembre 18h00/20h00 Gymnase Gérard Philipe (Fontaine)</li>
</ul>

<h4>Nouveaux adhérents</h4>

<ul>
<li>Vendredi 2 septembre 18h00/20h00 Gymnase Gérard Philipe (Fontaine)</li>
<li>Samedi 3 septembre 9h00/16h00 Gymnase Jeanni Longo (Sassenage)</li>
<li>Mardi 13 septembre 18h00/20h00 Gymnase Gérard Philipe (Fontaine) </li>
</ul>
</div>

<div class="col lrg-6 med-6 sml-12">
<h2>Plannings 2016</h2>


      <p><a href=<?php staticUrl('021') ?> class="button">Groupe Entraînement / Compétition</a></p>
      <p><a href=<?php staticUrl('022') ?> class="button">Groupe Loisir</a></p>

</div>

</section>