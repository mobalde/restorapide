<?php

namespace App\PlatformBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppPlatformBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
