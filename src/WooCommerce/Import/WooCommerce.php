<?php

namespace ViaVia\Channels\WooCommerce\Import;

use ViaVia\Channels\Api\Import\ImportChannelInterface;

class WooCommerce implements ImportChannelInterface
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