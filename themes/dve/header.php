<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
  <meta charset="<?php $plxShow->charset('min'); ?>">
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
  <meta name="description" content="Drac Vercors Escalade" />

  <meta property="og:title" content="Drac Vercors Escalade" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php $plxShow->racine(); ?>" />
  <meta property="og:image" content="<?php $plxShow->template(); ?>/img/logo.png" />

  <!--[if lte IE 8]><script src="<?php $plxShow->template(); ?>/js/html5shiv.js"></script><![endif]-->

  <title><?php $plxShow->pageTitle(); ?></title>
  <?php $plxShow->meta('description') ?>
  <?php $plxShow->meta('keywords') ?>
  <?php $plxShow->meta('author') ?>
  <link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
  <link rel="stylesheet" href="<?php $plxShow->template(); ?>/font-awesome-4.6.3/css/font-awesome.min.css" media="screen"/>
  <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css" media="screen"/>
  <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/normalize.css" media="screen"/>
  <link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css.php" media="screen"/>
  <?php $plxShow->templateCss() ?>
  <?php $plxShow->pluginsCss() ?>
  <link rel="alternate" type="application/rss+xml" title="Drac Vercors Escalade - <?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="feed.php?rss" />
  <link rel="alternate" type="application/rss+xml" title="Drac Vercors Escalade - <?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="feed.php?rss/commentaires" />

  <script src="<?php $plxShow->template(); ?>/js/jquery-3.0.0.min.js"></script>

  <link rel="stylesheet" href="<?php $plxShow->template(); ?>/jquery-ui-1.12.0/jquery-ui.min.css" media="screen"/>

  <?php if (isset($calendar) && $calendar == true) { ?>
    <link rel="stylesheet" href="<?php $plxShow->template(); ?>/fullcalendar-2.9.0/fullcalendar.min.css" media="screen"/>
    <script src="<?php $plxShow->template(); ?>/fullcalendar-2.9.0/lib/moment.min.js"></script>
    <script src="<?php $plxShow->template(); ?>/fullcalendar-2.9.0/fullcalendar.min.js"></script>
    <script src="<?php $plxShow->template(); ?>/fullcalendar-2.9.0/lang/fr.js"></script>
    <script src="<?php $plxShow->template(); ?>/fullcalendar-2.9.0/gcal.js"></script>

    <script type='text/javascript'>

    $(document).ready(function() {
      $('#calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyB0crUNeUUux1wteoUhrkgLXzc-CdoWwOU',
        events: {
          googleCalendarId: 'caf.fontaine@gmail.com'
        },
        header: {
          left: 'prev,next',
          center: 'title',
          right: 'today'
        },

        eventAfterRender: function (event, element, view) {
          var title = event.title.toLowerCase();

          if (title.indexOf('vacances') > -1 ) {
            element.css('color', '#2e3436');
            element.css('background-color', '#fcaf3e');
          }
          else if (title.indexOf('annul') > -1 || title.indexOf('ferm') > -1) {
            element.css('background-color', '#ef2929');
          }
          else if (title.indexOf('directeur') > -1) {
            element.css('background-color', '#ad7fa8');
          }
          else if (title.indexOf('pl fleming') > -1 || title.indexOf('pl flemming') > -1) {
            element.css('color', '#2e3436');
            element.css('background-color', '#8ae234');
          }
          else if (title.indexOf('pl gp') > -1 || title.indexOf('pl gérard philipe') > -1) {
            element.css('color', '#2e3436');
            element.css('background-color', '#fce94f');
          }
        },
      });
    });

    </script>
    <?php } ?>

  </head>

  <body id="top">

    <?php include_once("analyticstracking.php") ?>

    <header class="header sml-text-center med-text-left" role="banner">
      <div class="grid">
        <div class="col lrg-6 med-5 sml-12">
          <span class="image left"><img src="themes/dve/img/dve.png" alt="dve-logo-small" /></span>
          <h1 class="no-margin"><?php $plxShow->mainTitle('link'); ?></h1>
          <h2 class="h5 no-margin"><?php $plxShow->subTitle(); ?></h2>
        </div>
        <div class="col lrg-6 med-7 sml-12">
          <nav class="nav top" role="navigation">
            <h1>Menu principal</h1>
            <div class="responsive-menu med-text-right lrg-text-right">
              <label for="menu"><?php $plxShow->lang('MENU'); ?></label>
              <input type="checkbox" id="menu">
              <ul class="menu expanded">
                <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
