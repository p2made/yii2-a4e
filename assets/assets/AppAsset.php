<?php
/**
 * AppAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * assets\assets\AppAsset::register($this);
 *
 * or specify as a dependency with...
 *     'assets\assets\AppAsset',
 */

namespace assets\assets;

class AppAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@assets/assets/lib',
			'css' => [
				'css/full.min.css',
			],
			'js' => [],
		],

		'depends' => [
			'p2made\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
