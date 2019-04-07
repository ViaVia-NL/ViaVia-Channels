<?php

namespace ViaVia\Channels\WooCommerce\Export;

class Config
{
	public function getConfigPossibilities()
	{
		return array('url', 'consumer_key', 'consumer_secret');
	}
}