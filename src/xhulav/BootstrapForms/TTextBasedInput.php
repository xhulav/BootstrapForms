<?php

namespace xhulav\BootstrapForms;

use Nette\Utils\Html;

trait TTextBasedInput
{
    protected $prefix;
    protected $suffix;
    protected $inputSize;
    protected $inputGroupClasses = array();

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getSuffix()
    {
        return $this->suffix;
    }

    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function setGlyphiconPrefix($glyphicon)
    {
        $icon = "glyphicon glyphicon-$glyphicon";

        return $this->setIconPrefix($icon);
    }

    public function setIconPrefix($icon)
    {
        $element = $this->createIconElement($icon);

        return $this->setPrefix($element);
    }

    public function setGlypiconSuffix($glyphicon)
    {
        $icon = "glyphicon glyphicon-$glyphicon";

        return $this->setIconSuffix($icon);
    }

    public function setIconSuffix($icon)
    {
        $element = $this->createIconElement($icon);

        return $this->setSuffix($element);
    }

    public function hasGroupAddon()
    {
        return ($this->prefix || $this->suffix);
    }

    public function getInputSize()
    {
        return $this->inputSize;
    }

    public function setInputSize($inputSize)
    {
        $this->inputSize = $inputSize;

        return $this;
    }

    public function setPlaceholder($placeholder)
    {
        $this->getControlPrototype()->addAttributes(array('placeholder' => $placeholder));

        return $this;
    }

    public function addClassToInputGroup($class)
    {
        $this->inputGroupClasses[] = $class;

        return $this;
    }

    public function getInputGroupClasses()
    {
        return $this->inputGroupClasses;
    }

    /**
     * Generates control's HTML element.
     * @return Html
     */
    public function getControl()
    {
        if ($this->hasGroupAddon()) {
            $groupAddon = Html::el('div');
            $groupAddon->class[] = 'input-group';
            switch ($this->getInputSize()) {
                case BootstrapForm::INPUT_SM:
                    $groupAddon->class[] = 'input-group-sm';
                    break;
                case BootstrapForm::INPUT_LG:
                    $groupAddon->class[] = 'input-group-lg';
                    break;
            }
            foreach ($this->getInputGroupClasses() as $groupClass) {
                $groupAddon->class[] = $groupClass;
            }
            if ($this->getPrefix()) {
                $prefix = Html::el('span');
                $prefix->class[] = 'input-group-addon';
                $prefix->add($this->getPrefix());

                $groupAddon->add($prefix);
            }
            $groupAddon->add(parent::getControl());
            if ($this->getSuffix()) {
                $sufix = Html::el('span');
                $sufix->class[] = 'input-group-addon';
                $sufix->add($this->getSuffix());

                $groupAddon->add($sufix);
            }

            return $groupAddon;

        } else {
            switch ($this->getInputSize()) {
                case BootstrapForm::INPUT_SM:
                    $this->getControlPrototype()->class[] = 'input-sm';
                    break;
                case BootstrapForm::INPUT_LG:
                    $this->getControlPrototype()->class[] = 'input-lg';
                    break;
            }
        }

        return parent::getControl();
    }

    protected function createIconElement($icon)
    {
        $element = Html::el('i');
        $element->class[] = $icon;

        return $element;
    }
}