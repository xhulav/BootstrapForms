<?php

namespace xhulav\BootstrapForms;

use Nette\Utils\Html;

trait TIconButton
{
    public function setGlyphicon($glyphicon) {
        $icon = "glyphicon glyphicon-$glyphicon";

        return $this->setIcon($icon);
    }

    public function setIcon($iconClass) {
        $icon = Html::el('i');
        $icon->class[] = $iconClass;

        $caption = Html::el('span');
        $caption->setText(' ' . $this->getControlPrototype()->getText());

        $this->getControlPrototype()->insert(0, $icon, true);
        $this->getControlPrototype()->insert(1, $caption, true);

        return $this;
    }
}