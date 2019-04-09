<?php

namespace ViaVia\Channels\WooCommerce\Export;

use ViaVia\Channels\Api\Export\ExportChannelInterface;
use ViaVia\Channels\Api\Export\ExportConfig;

class WooCommerce implements ExportChannelInterface
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
		$config = new ExportConfig();
		$config->addConfigPossibility(['label' => 'url', 'key' => 'url'])
			->addConfigPossibility(['label' => 'Consumer key', 'key' => 'consumer_key', 'hint' => 'You can generate these here: WooCommerce > Settings > API > Keys/Apps'])
			->addConfigPossibility(['label' => 'Consumer secret', 'key' => 'consumer_secret']);

		return $config;
	}
}