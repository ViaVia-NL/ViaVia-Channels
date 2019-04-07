<?php

namespace ViaVia\Channels\WooCommerce\Export;

use ViaVia\Channels\Api\Export\ExportChannelInterface;
use ViaVia\Channels\WooCommerce\Export\Config;

class WooCommerce implements ExportChannelInterface
{
	public function getChannelName()
	{
		return "WooCommerce";
	}

	public function getChannelDescription()
	{
		return "WooCommerce is an open-source e-commerce plugin for WordPress. It is designed for small to large-sized online merchants using WordPress.";
	}

	public function getConfig()
	{
		return new Config;
	}
}