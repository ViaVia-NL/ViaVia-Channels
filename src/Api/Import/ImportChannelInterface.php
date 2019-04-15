<?php

namespace ViaVia\Channels\Api\Import;

interface ImportChannelInterface
{
	public function __construct($scope);

	public function getChannelName();

	public function getChannelDescription();

	public function getConfig();

	public function getAvailableProductMappings();
}