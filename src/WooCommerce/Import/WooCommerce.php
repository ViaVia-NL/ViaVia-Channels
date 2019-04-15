<?php

namespace ViaVia\Channels\WooCommerce\Import;

use ViaVia\SDK\Connection;
use ViaVia\SDK\ViaVia;
use ViaVia\Channels\Api\Import\ImportChannelInterface;
use ViaVia\Channels\Api\Import\ImportConfig;
use Automattic\WooCommerce\Client;

class WooCommerce implements ImportChannelInterface
{
	protected $scope;

	protected $viavia;

	protected $importConfig;

	protected $client;

	public function __construct($scope)
	{
		$this->scope = $scope;

		$connection = new Connection();
		$this->viavia = new ViaVia($connection);
		$this->importConfig = new ImportConfig();
	}

	public function getChannelName()
	{
		return 'WooCommerce';
	}

	public function getChannelDescription()
	{
		return 'WooCommerce is an open-source e-commerce plugin for WordPress';
	}

	/**
	 * Data needed from the client
	 */
	public function getConfig()
	{
		$this->importConfig->addConfigPossibility(['label' => 'Url', 'key' => 'url'])
			->addConfigPossibility(['label' => 'Consumer key', 'key' => 'consumer_key', 'hint' => 'You can generate these here: WooCommerce > Settings > API > Keys/Apps'])
			->addConfigPossibility(['label' => 'Consumer secret', 'key' => 'consumer_secret']);

		return $this->importConfig;
	}

	public function getAvailableProductMappings()
	{
		$this->client = new Client(
			$this->importConfig->getConfigValue($this->getChannelName(), 'url'),
			$this->importConfig->getConfigValue($this->getChannelName(), 'consumer_key'),
			$this->importConfig->getConfigValue($this->getChannelName(), 'consumer_secret'),
			[
				'wp_api' => true,
				'version' => 'wc/v3'
			]
		);
		$attributes = $this->client->get('products/attributes');
		$keys = [];

		foreach ($attributes as $attribute) {
			$keys[] = $attribute->name;
		}

		return $keys;
	}

}