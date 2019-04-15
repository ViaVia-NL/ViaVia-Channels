<?php

namespace ViaVia\Channels\Api\Export;

interface ExportChannelInterface
{
	public function __construct($scope);

	public function getChannelName();

	public function getChannelDescription();

	public function getConfig();
}