<?php

namespace Itsaninho\Logger\Facades;

use Illuminate\Support\Facades\Facade;

Class Logger extends Facade{

	protected static function getFacadeAccessor()
	{
		return 'logger';
	}
}