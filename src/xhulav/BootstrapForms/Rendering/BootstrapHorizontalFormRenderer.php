<?php

namespace xhulav\BootstrapForms\Rendering;

class BootstrapHorizontalFormRenderer extends BootstrapFormRenderer
{
    /**
     * Overide wrappers settings
     */
    function __construct()
    {
		parent::__construct();

        $this->wrappers['control']['container'] = 'div class=col-sm-4';
        $this->wrappers['label']['container'] = 'div class="col-sm-2 control-label"';

        $this->formType = 'form-horizontal';
    }

}