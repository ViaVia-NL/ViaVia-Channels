<?php

namespace ViaVia\Channels;

class Channels
{
	public function getImportChannels()
	{
		return [
			\ViaVia\Channels\WooCommerce\Import\WooCommerce::class,
		];
	}

	public function getExportChannels()
	{
		return [
			\ViaVia\Channels\WooCommerce\Export\WooCommerce::class
		];
	}
}