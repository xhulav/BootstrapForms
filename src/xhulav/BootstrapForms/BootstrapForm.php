<?php

namespace xhulav\BootstrapForms;

use Nette\Forms\Form;
use xhulav\BootstrapForms\Rendering\BootstrapFormRenderer;

class BootstrapForm extends Form
{
	// input sizes
	const INPUT_SM = 'sm';
	const INPUT_MD = 'md';
	const INPUT_LG = 'lg';

	const BTN_SIZE_XS = 'btn-xs';
	const BTN_SIZE_SM = 'btn-sm';
	const BTN_SIZE_LG = 'btn-lg';

	const BTN_DISPLAY_INLINE = 'inline';
	const BTN_DISPLAY_BLOCK = 'block';
	const BTN_DISPLAY_SEPARATED = 'separated';

	const BTN_TYPE_DEFAULT = 'btn-default';
	const BTN_TYPE_PRIMARY = 'btn-primary';
	const BTN_TYPE_SUCCESS = 'btn-success';
	const BTN_TYPE_INFO = 'btn-info';
	const BTN_TYPE_WARNING = 'btn-warning';
	const BTN_TYPE_DANGER = 'btn-danger';

	public function __construct($name = NULL)
	{
		parent::__construct($name);

		$this->setRenderer(new BootstrapFormRenderer());
	}

	use BootstrapControls;

}
