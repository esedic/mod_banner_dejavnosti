<?php
/**
 * @package    mod_banner_dejavnosti
 *
 * @author     Elvis Sedić <elvis@spletodrom.si>
 * @copyright  Spletodrom
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://www.spletodrom.si
 */

defined('_JEXEC') or die;
?>

<div class="banner-activity<?php echo ' '.$moduleclass_sfx; ?>">
	<div class="uk-height-xlarge uk-background-cover uk-flex" uk-parallax="bgy: -200" style="background-image: url('<?php echo $image; ?>');">
		<div class="uk-overlay uk-overlay-medium uk-position-large uk-position-center-left uk-padding-medium">
			<h1 class="uk-animation-medium" uk-scrollspy="cls: uk-animation-slide-left; delay: 200"><?php echo $title; ?></h1>
			<blockquote class="uk-animation-medium" uk-scrollspy="cls: uk-animation-slide-left; delay: 400">
				<?php echo $quote; ?>
			</blockquote>
			<div class="banner-icon-wrapper" uk-scrollspy="cls: uk-animation-slide-bottom; delay: 600">
				<a class="uk-float-right bounce uk-icon-button uk-icon-link" href="#main" uk-icon="icon: chevron-down; ratio: 2" uk-scroll></a>
			</div>
		</div>
	</div>
</div>