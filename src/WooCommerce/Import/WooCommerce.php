<?php

namespace ViaVia\Channels\WooCommerce\Import;

use ViaVia\Channels\Api\Import\ImportChannelInterface;
use ViaVia\Channels\Api\Import\ImportConfig;

class WooCommerce implements ImportChannelInterface
{
	public function getChannelName()
	{
		return "WooCommerce";
	}

	public function getChannelDescription()
	{
		return "WooCommerce is an open-source e-commerce plugin for WordPress";
	}

	public function getConfig()
	{
		$config = new ImportConfig();
		$config->addConfigPossibility(['label' => 'url', 'key' => 'url'])
			->addConfigPossibility(['label' => 'Consumer key', 'key' => 'consumer_key', 'hint' => 'You can generate these here: WooCommerce > Settings > API > Keys/Apps'])
			->addConfigPossibility(['label' => 'Consumer secret', 'key' => 'consumer_secret']);

		return $config;
	}

}