<?php

namespace xhulav\BootstrapForms\Rendering;

use Nette\Forms\Container;
use Nette\Forms\ControlGroup;
use Nette\Forms\Controls\Checkbox;
use Nette\Forms\Controls\CheckboxList;
use Nette\Forms\Controls\HiddenField;
use Nette\Forms\Controls\MultiSelectBox;
use Nette\Forms\Controls\RadioList;
use Nette\Forms\Controls\TextArea;
use Nette\Forms\Controls\UploadControl;
use Nette\Forms\Form;
use Nette\Forms\Rendering\DefaultFormRenderer;
use Nette\InvalidArgumentException;

use xhulav\BootstrapForms\IBootstrapForm;
use xhulav\BootstrapForms\IButton;
use xhulav\BootstrapForms\ITextBasedControl;


class BootstrapFormRenderer extends DefaultFormRenderer
{
	protected $formType;

	/**
	 * Overide wrappers settings
	 */
	function __construct()
	{
		$this->wrappers['controls']['container'] = NULL;
		$this->wrappers['pair']['container'] = 'div class=form-group';
		$this->wrappers['pair']['.error'] = 'has-error';
		$this->wrappers['control']['container'] = NULL;
		$this->wrappers['label']['container'] = NULL;
		$this->wrappers['control']['description'] = 'span class=help-block';
		$this->wrappers['control']['errorcontainer'] = 'span class=help-block';
	}


	/**
	 * @param Form $form
	 * @param string|null $mode
	 * @return string
	 */
	public function render(Form $form, string $mode = NULL): string
	{

		if ($this->formType) {
			$form->getElementPrototype()->class[] = $this->formType;
		}

		foreach ($form->getControls() as $control) {

			if ($control instanceof ITextBasedControl) {
				$control->getControlPrototype()->class[] = 'form-control';
			} elseif ($control instanceof MultiSelectBox || $control instanceof TextArea) {
				$control->getControlPrototype()->class[] = 'form-control';
			} elseif ($control instanceof Checkbox || $control instanceof CheckboxList || $control instanceof RadioList) {
				$control->getSeparatorPrototype()->setName('div')->addClass($control->getControlPrototype()->type);
			} elseif ($control instanceof IButton) {
				$control->addClass('btn');
				$control->addClass($control->getButtonType());
				$control->addClass($control->getButtonSize());
				$control->getHtmlId(); // initialization of button ID

				switch ($control->getButtonDisplay()) {
					case IBootstrapForm::BTN_DISPLAY_BLOCK:
						$control->addClass('btn-block');
						break;
					case IBootstrapForm::BTN_DISPLAY_SEPARATED:
						$control->addClass('btn-separated');
						break;
				}

			} elseIf ($control instanceof HiddenField) {
				$control->getHtmlId(); // initialization of hidden field ID
			}
		}

		return parent::render($form, $mode);
	}

	/**
	 * Renders group of controls.
	 * @param Container|ControlGroup
	 * @return string
	 */
	public function renderControls($parent): string
	{
		if (!($parent instanceof Container || $parent instanceof ControlGroup)) {
			throw new InvalidArgumentException('Argument must be instance of Nette\Forms\Container or Nette\Forms\ControlGroup.');
		}

		$items = array();
		foreach ($parent->getControls() as $control) { // do not render them yet
			if (!$control->getOption('rendered') && ($control instanceof UploadControl)) {
				$control->setOption('rendered', true);
				$items[] = $control;
			}
		}

		$s = parent::renderControls($parent);

		foreach ($items as $control) {
			$control->setOption('rendered', false);
		}

		return $s;
	}

	/**
	 * Renders form end.
	 * @return string
	 */
	public function renderEnd(): string
	{
		$s = '';
		foreach ($this->form->getControls() as $control) {
			if (($control instanceof HiddenField || $control instanceof UploadControl) && !$control->getOption('rendered')) {
				$s .= $control->getControl();
			}
		}
		if (iterator_count($this->form->getComponents(TRUE, 'Nette\Forms\Controls\TextInput')) < 2) {
			$s .= '<!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->';
		}
		if ($s) {
			$s = $this->getWrapper('hidden container')->setHtml($s) . "\n";
		}

		return $s . $this->form->getElementPrototype()->endTag() . "\n";
	}

}