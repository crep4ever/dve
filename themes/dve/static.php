<?php include(dirname(__FILE__).'/header.php'); ?>

	<main class="main" role="main">

			<article class="article static" role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

        <header class="main">
					<h1>
						<?php $plxShow->staticTitle(); ?>
					</h1>
				</header>

        <div class="wrapper">
          <?php $plxShow->staticContent(); ?>
        </div>
			</article>

	</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>
