<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	public function templatePrepareFilters($template)
	{
		$template->registerFilter(new Nette\Templating\Filters\Haml);
		$template->registerFilter(new Nette\Latte\Engine);
	}
}
