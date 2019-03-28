<?php

namespace ViaVia\Channels\Api\Import;

interface CustomerInterface
{
	public function importCustomers();

	public function getAvailableFields();
}