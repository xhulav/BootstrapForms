<?php

namespace xhulav\BootstrapForms;

use Nette\Forms\Container;
use Nette\Forms\Controls\Button;
use Nette\Forms\Controls\SelectBox;
use Nette\Forms\Controls\SubmitButton;
use Nette\Forms\Controls\TextInput;
use xhulav\BootstrapForms\Controls\BootstrapButton;
use xhulav\BootstrapForms\Controls\BootstrapSelectBox;
use xhulav\BootstrapForms\Controls\BootstrapSubmitButton;
use xhulav\BootstrapForms\Controls\BootstrapTextInput;
use xhulav\BootstrapForms\Controls\IconButton;
use xhulav\BootstrapForms\Controls\PlainText;

trait BootstrapControls
{
	protected $inputSize = IBootstrapForm::INPUT_MD;


	/**
	 * Adds naming container to the form.
	 * @param string|int $name
	 * @return BootstrapContainer
	 */
	public function addContainer($name): Container
	{
		$control = new BootstrapContainer();
		$control->currentGroup = $this->currentGroup;
		return $this[$name] = $control;
	}

	/**
	 * @param $size
	 */
	public function setDefaultInputSize($size)
	{
		$this->inputSize = $size;
	}

	/**
	 * @param string $name
	 * @param string $label
	 * @param int $cols
	 * @param int $maxLength
	 * @return BootstrapTextInput
	 */
	public function addText($name, $label = NULL, $cols = NULL, $maxLength = NULL): TextInput
	{
		$control = new BootstrapTextInput($label, $maxLength);
		$control->setAttribute('size', $cols);
		$control->setInputSize($this->inputSize);
		return $this[$name] = $control;
	}

	/**
	 * @param string $name
	 * @param string $label
	 * @param int $cols
	 * @param int $maxLength
	 * @return BootstrapTextInput
	 */
	public function addPassword($name, $label = NULL, $cols = NULL, $maxLength = NULL): TextInput
	{
		$control = new BootstrapTextInput($label, $maxLength);
		$control->setAttribute('size', $cols);
		$control->setInputSize($this->inputSize);
		return $this[$name] = $control->setType('password');
	}

	/**
	 *
	 * @param string $name
	 * @param string $label
	 * @param array $items
	 * @param int $size
	 * @return BootstrapSelectBox
	 */
	public function addSelect($name, $label = NULL, array $items = NULL, $size = NULL): SelectBox
	{
		$control = new BootstrapSelectBox($label, $items);
		$control->setInputSize($this->inputSize);
		if ($size > 1) {
			$control->setAttribute('size', (int)$size);
		}
		return $this[$name] = $control;
	}

	/**
	 * @param string $name
	 * @param string $caption
	 * @return BootstrapSubmitButton
	 */
	public function addSubmit($name, $caption = NULL): SubmitButton
	{
		return $this[$name] = new BootstrapSubmitButton($caption);
	}

	/**
	 * @param string $name
	 * @param string $caption
	 * @return IconButton
	 */
	public function addIconButton($name, $caption = null): Button
	{
		return $this[$name] = new IconButton($caption);
	}

	/**
	 * @param $name
	 * @param null $caption
	 * @return BootstrapButton
	 */
	public function addButton($name, $caption = NULL): Button
	{
		return $this[$name] = new BootstrapButton($caption);
	}

	/**
	 * @param string $name
	 * @param string $label
	 * @param bool $multiple
	 * @return IconButton
	 */
	public function addUploadButton($name, $label = NULL, $multiple = FALSE): Button
	{
		parent::addUpload($name, null, $multiple)->getControlPrototype()->class[] = 'hidden attached-to-button';
		return $this->addIconButton($name . 'Btn', $label)->setButtonType(IBootstrapForm::BTN_DISPLAY_SEPARATED)->addClass('btn-uploader')->setOmitted(TRUE);
	}

	/**
	 * @param string $name
	 * @param string $label
	 * @return IconButton
	 */
	public function addMultiUploadButton($name, $label = NULL): Button
	{
		parent::addMultiUpload($name, null)->getControlPrototype()->class[] = 'hidden attached-to-button';
		return $this->addIconButton($name . 'Btn', $label)->setButtonType(IBootstrapForm::BTN_DISPLAY_SEPARATED)->addClass('btn-uploader')->setOmitted(TRUE);
	}

	/**
	 * @param $name
	 * @param string|null $label
	 * @param $text
	 * @return PlainText
	 */
	public function addPlainText($name, string $label = null, $text): PlainText
	{
		return $this[$name] = new PlainText($label, $text);
	}

	/**
	 * Ajax form shortcut
	 */
	public function ajaxForm()
	{
		$this->getElementPrototype()->class[] = 'ajax';
	}
}