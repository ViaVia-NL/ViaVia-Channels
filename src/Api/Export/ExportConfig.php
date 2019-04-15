<?php

namespace ViaVia\Channels\Api\Export;

class ExportConfig
{
	protected $configPossibilities = [];

	public function addConfigPossibility(array $config)
	{
		if(empty($config['label']) || empty($config['key'])) {
			throw new \Exception('label or key index not set');
		} else {
			$this->configPossibilities[] = $config;
		}

		return $this;
	}

	public function getPossibilities()
	{
		return $this->configPossibilities;
	}

	public function getConfigValue($channel, $key)
	{
		$configService = new \App\Service\ChannelConfigService();

		return $configService->getConfigValue($channel, $key);
	}

	public function saveConfigValue($channel, $key, $value)
	{
		$configService = new \App\Service\ChannelConfigService();

		return $configService->saveConfigValue($channel, $key, $value);
	}
}