<?php
global $plxShow;

function staticUrl($p_static_id)
{
  global $plxMotor;
  echo $plxMotor->urlRewrite('?static' . $p_static_id . '/' . $plxMotor->aStats[$p_static_id]['url']);
}

?>

<!-- *********************************************************************** -->
<nav class="dark">
  <h1>Accès rapide aux sections</h1>
  <ul>
    <li><a href="<?php $plxShow->urlRewrite('#activites') ?>">Activités&nbsp;escalade</a></li>
    <li><a href="<?php $plxShow->urlRewrite('#stages') ?>">Stages</a></li>
    <li><a href="<?php $plxShow->urlRewrite('#formations') ?>">Formations</a></li>
    <li><a href="<?php $plxShow->urlRewrite('#historique') ?>">Historique</a></li>
    <li><a href="<?php $plxShow->urlRewrite('#membres') ?>">Les&nbsp;membres</a></li>
  </ul>
</nav>

<!-- *********************************************************************** -->
<section>
  <a class="anchor" id="activites"></a>
  <h2>Activités escalade</h2>



  <div class="grid">
    <div class="col lrg-6 med-6 sml-12">
      <h3>Progression/Loisirs</h3>
        <h4>Jeunes Loisirs</h4>
        <p>
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum."
        </p>

        <p class="button">Plus d'infos</p>

        <h4>Cours adultes</h4>
        <p>
          "Lorem ipsum dolor sit
          amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum."
        </p>
        <p class="button">Plus d'infos</p>

        <h4>Pratique libre</h4>
        <p>

Les murs d'escalade de deux gymnases - Gérard-Philipe à Fontaine et Fleming à Sassenage - sont accessibles plusieurs soirs par semaine en pratique libre.

Les séances de Pratique Libre Adultes sont réservées aux grimpeurs autonomes en salle : pour s'inscrire, il est obligatoire de joindre ce document signée au dossier d'inscription.


        </p>
        <p class="button">Plus d'infos</p>

Autres consignes : Chaque membre du club
- dispose de son propre matériel (baudrier, chaussons, système d'assurage)
- dispose de sa licence et de sa "ficelle", lors des séances de pratique libre
- accède à la salle en chaussures de sport propres (ou se déchausser au vestiaire)
- plie et range la corde utilisée à la fin de sa séance 

    </div>

    <div class="col lrg-6 med-6 sml-12">
      <h3>Entraînement/Compétition</h3>


        <h4>Entrainement compétition</h4>

        <p>
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint
          occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum."
        </p>
        <p class="button">Plus d'infos</p>

        <h4>Groupe élite</h4>
        <p>
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident,
          sunt in culpa qui officia deserunt mollit anim id est
          laborum."
        </p>
        <p class="button">Plus d'infos</p>

        <h4>Sections sportives</h4>
        <p>
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum."
        </p>
        <p class="button">Plus d'infos</p>


    </div>

  </div>
</section>

<!-- *********************************************************************** -->
<section class="grid">

  <div class="col lrg-6 med-6 sml-12">
    <a class="anchor" id="stages"></a>
    <h2>Stages</h2>

    <ul>
      <li>Mini-Stages Enfants</li>
      <li>Stage Multi-Activités</li>
      <li>Stage Orpierre</li>
      <li>Stage Rodellar</li>
      <li>Stage Adultes </li>
    </ul>
  </div>

  <div class="col lrg-6 med-6 sml-12">
    <a class="anchor" id="formations"></a>
    <h2>Formations</h2>

      <h3>Autonomie falaise</h3>
      <p>
        Pour participer aux sorties Pratique Libre Adultes Falaise&nbsp;:
        ce document est à lire soigneusement et à rendre obligatoirement aux
        Responsables Pratique Libre Falaise avant le début de la première séance.
      </p>
      <p class="button icon fa-download center">Engagement autonomie falaise</p>

      <h3>Grande voie</h3>

  </div>

</section>

<!-- *********************************************************************** -->
<section class="grid">
  <a class="anchor" id="historique"></a>
  <h2>Historique</h2>

  <div class="col lrg-8 med-8 sml-12">
    <p>
      Le club Drac Vercors Escalade a été fondé en juillet 2007 sous le nom
      de CAF Fontaine en Montagne avec pour objectif de faire découvrir
      le monde et la pratique de l'escalade.
      La pratique au club s'est développée depuis avril 2008 suite à
      l'inauguration du nouveau gymnase Gérard-Philipe de la ville.
    </p>

    <p>
      Le club est ouvert à tous : enfants, adolescents et adultes...
      Il est ouvert à tous les habitants de Fontaine, Sassenage, Saint-Egrève,
      Saint-Martin Le Vinoux, Grenoble, Seyssinet, ainsi qu'à tous les habitants
      de l'agglomération Grenobloise. L'activité du club est centrée sur
      l'escalade mais d'autres activités de montagne peuvent également se développer.
      À ce jour, les membres actifs du club - une vingtaine de bénévoles et deux
      salariés brevetés d'État - accueillent près de 200 adhérents de tous âges.
    </p>
    <p>
      Le développement du club Drac Vercors Escalade a permis de mettre en place différentes activités&nbsp;:
    </p>
    <ul>
      <li>Soutien et entraînement pour les compétiteurs</li>
      <li>Ateliers découverte escalade enfants, adolescents, adultes</li>
      <li>Cours de pratique et de perfectionnement jeunes et adultes</li>
      <li>Création de deux sections sportives au collège Gérard-Philippe de Fontaine et au Collège Chartreuse de St Martin-le-Vinoux</li>
    </ul>
  </div>

  <div class="col lrg-4 med-4 sml-12">
    <h3>Le mot du prez</h3>
    <blockquote>
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
      do eiusmod tempor incididunt ut labore et dolore magna
      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
      ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
      aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia
      deserunt mollit anim id est laborum."
    </blockquote>
  </div>

</section>


  <!-- *********************************************************************** -->
  <section>
    <a class="anchor" id="membres"></a>
    <h2>Les membres</h2>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('011') ?> >
        <img src="data/medias/membres/antoine-chaninet.jpg" alt="Antoine Chaninet" />
        <h5>Antoine Chaninet</h5>
        <h6>Membre du comité directeur</h6>
      </a>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('010') ?> >
        <img src="data/medias/membres/christelle-garnier.jpg" alt="Christelle Garnier" />
        <h5>Christelle Garnier</h5>
        <h6>Trésorière</h6>
      </a>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('012') ?> >
        <img src="data/medias/membres/christophe-guillen.jpg" alt="Christophe Guillen" />
        <h5>Christophe Guillen</h5>
        <h6>Président</h6>
      </a>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('017') ?> >
        <img src="data/medias/membres/fabien-viguier.jpg" alt="Fabien Viguier" />
        <h5>Fabien Viguier</h5>
        <h6>Vice-Président </h6>
      </a>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('016') ?> >
        <img src="data/medias/membres/florence-pesselon.jpg" alt="Florence Pesselon" />
        <h5>Florence Pesselon</h5>
        <h6>Responsable Pratique Libre</h6>
      </a>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('015') ?> >
        <img src="data/medias/membres/karim-lhoste.jpg" alt="Karim Lhoste" />
        <h5>Karim Lhoste</h5>
        <h6>Secrétaire</h6>
      </a>
    </div>


    <div class="member item align-center col lrg-1 med-3 sml-6">
      <img src="data/medias/membres/default.png" alt="Léa Catalfo" />
      <h5>Léa Catalfo</h5>
      <h6>Trésorière Adjointe</h6>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('013') ?> >
        <img src="data/medias/membres/sylvain-lande.jpg" alt="Sylvain Lande" />
        <h5>Sylvain Lande</h5>
        <h6>Trésorier-adjoint </h6>
      </a>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('014') ?> >
        <img src="data/medias/membres/viviane-leguy.jpg" alt="Viviane Leguy" />
        <h5>Viviane Leguy</h5>
        <h6>Secrétaire Adjointe - Responsable Formation</h6>
      </a>
    </div>



    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('019') ?> >
        <img src="data/medias/membres/colas-robert.jpg" alt="Colas Robert" />
        <h5>Colas Robert</h5>
        <h6>Entraineur</h6>
      </a>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <img src="data/medias/membres/mickael-guilbaud.jpg" alt="Mickaël Guilbaud" />
      <h5>Mickaël Guilbaud</h5>
      <h6>Entraineur</h6>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <img src="data/medias/membres/manon-boulle.jpg" alt="Manon Boulle" />
      <h5>Manon Boulle</h5>
    </div>


    <div class="member item align-center col lrg-1 med-3 sml-6">
      <img src="data/medias/membres/clemence-domingo.jpg" alt="Clémence Domingo" />
      <h5>Clémence Domingo</h5>
    </div>

    <div class="member item align-center col lrg-1 med-3 sml-6">
      <a href=<?php staticUrl('018') ?> >
        <img src="data/medias/membres/audrey-maingue.jpg" alt="Audrey Maingue" />
        <h5>Audrey Maingue</h5>
      </a>
    </div>

    <br style="clear: both" />

  </section>