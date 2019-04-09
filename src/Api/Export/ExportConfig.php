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
}