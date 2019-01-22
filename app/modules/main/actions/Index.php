<?php

namespace app\modules\main\actions;

use jugger\Action;

class Index extends Action
{
	public function runInternal()
	{
		return "hello world";
	}
}
