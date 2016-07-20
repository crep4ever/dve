<?php
/**
 * Plugin plxMySocialButtons
 *
 * facebook : http://developers.facebook.com/docs/reference/plugins/like/
 * twitter : https://twitter.com/about/resources/tweetbutton
 * google+1 : http://www.google.com/webmasters/+1/button/
 *
 **/
class plxMySocialButtons extends plxPlugin {

	protected $callable = false;

	/**
	 * Constructeur de la classe
	 *
	 * @param	default_lang	langue par défaut
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function __construct($default_lang) {

		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);

		# déclaration des hooks
		$this->addHook('ThemeEndBody', 'ThemeEndBody');
		$this->addHook('MySocialButtons', 'MySocialButtons');
		$this->addHook('MySocialButtonsStatic', 'MySocialButtonsStatic');
	}

	/**
	 * Méthode qui ajoute l'appel des API des réseaux sociaux
	 *
	 * @return	stdio
	 * @author	Stephane F, aruhuno
	 **/
	public function ThemeEndBody() {
		if(!$this->callable) return;
?>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="http://connect.facebook.net/fr_FR/all.js#xfbml=1"></script>
<script type="text/javascript">
	window.___gcfg = {lang: '<?php echo "<?php \$plxShow->defaultLang() ?>"?>'};
	(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
</script>
<?php
	}

	/**
	 * Méthode qui affiche les boutons sociaux sur une page statique
	 *
	 * @return	stdio
	 * @author	Stephane F, aruhuno
	 **/
	public function MySocialButtons() {
		$this->callable = true;
	?>
		<div class="social-buttons">
			<div id="fb-root"></div>
			<div><div class="g-plus" data-action="share" data-annotation="none" data-href="<?php echo "<?php \$plxShow->artUrl() ?>" ?>"></div></div>
			<div><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo "<?php \$plxShow->artUrl() ?>" ?>" data-lang="fr" data-count="none">Tweeter</a></div>
			<div class="fb-like" data-href="<?php echo "<?php \$plxShow->artUrl() ?>" ?>" data-send="false" data-layout="button_count" data-width="20" data-show-faces="false"></div>
		</div>

	<?php
	}

	/**
	 * Méthode qui affiche les boutons sociaux
	 *
	 * @return	stdio
	 * @author	Stephane F, Etienne R
	 **/
	public function MySocialButtonsStatic() {
		$this->callable = true;
	?>
		<div class="social-buttons">
			<div id="fb-root"></div>
			<div><div class="g-plus" data-action="share" data-annotation="none" data-href="<?php echo "<?php \$plxShow->staticUrl() ?>" ?>"></div></div>
			<div><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo "<?php \$plxShow->staticUrl() ?>" ?>" data-lang="fr" data-count="none">Tweeter</a></div>
			<div class="fb-like" data-href="<?php echo "<?php \$plxShow->staticUrl() ?>" ?>" data-send="false" data-layout="button_count" data-width="20" data-show-faces="false"></div>
		</div>

	<?php
	}
}
?>