<?php

namespace xhulav\BootstrapForms;

trait TButton
{
    protected $size;
    protected $type = IBootstrapForm::BTN_TYPE_DEFAULT;
    protected $display = IBootstrapForm::BTN_DISPLAY_SEPARATED;

    public function addClass($class)
    {
        $this->getControlPrototype()->class[] = $class;

        return $this;
    }

    public function getButtonSize()
    {
        return $this->size;
    }

    public function getButtonType()
    {
        return $this->type;
    }

    public function setButtonSize($size)
    {
        $this->size = $size;

        return $this;
    }

    public function setButtonType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function setButtonDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    public function getButtonDisplay()
    {
        return $this->display;
    }
}