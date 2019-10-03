<?php

include_once('../vendor/autoload.php');
include_once('BootstrapForm.php');

use Nette\Forms\Form;
use xhulav\BootstrapForms\IBootstrapForm;
use xhulav\BootstrapForms\Rendering\BootstrapHorizontalFormRenderer;
use xhulav\BootstrapForms\Rendering\BootstrapInlineFormRenderer;

$formDefault = new BootstrapForm();
$formDefault->addText('text', 'Text input');
$formDefault->addPassword('password', 'Password input');
$formDefault->addTextArea('textarea', 'Text area');
$formDefault->addHidden('hidden');
$formDefault->addCheckbox('checkbox', 'Checkbox');
$formDefault->addRadioList('radiolist', 'Radio list', array('One', 'Two', 'Three'));
$formDefault->addCheckboxList('checkboxlist', 'Checkbox list', array('One', 'Two', 'Three'));
$formDefault->addSelect('select', 'Select', array('One', 'Two', 'Three'));
$formDefault->addMultiSelect('multiselect', 'Multi select', array('One', 'Two', 'Three'));
$formDefault->addButton('button', 'Button');
$formDefault->addSubmit('submit', 'Submit');

$formExtensions = new BootstrapForm();
$formExtensions->setRenderer(new BootstrapHorizontalFormRenderer());
$formExtensions->addPlainText('plaintext', 'Plain text', 'Lorem ipsum...');
$formExtensions->addIconButton('iconbutton', 'Icon button')->setIcon('fa fa-plane')->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_SEPARATED);
$formExtensions->addUploadButton('upload', 'Upload');
$formExtensions->addMultiUploadButton('multiupload', 'Multi upload');

$formBase = new BootstrapForm();
$formBase->addText('username', 'Username')->addRule(Form::FILLED, 'Please enter your username.');
$formBase->addPassword('password', 'Password')->setIconSuffix('fa fa-lock')->addRule(Form::FILLED, 'Please enter your password.');
$formBase->addSubmit('submit', 'Login')->setButtonType(IBootstrapForm::BTN_TYPE_PRIMARY);

$formHorizontal = new BootstrapForm();
$formHorizontal->setRenderer(new BootstrapHorizontalFormRenderer());
$formHorizontal->addText('username', 'Username')->addRule(Form::FILLED, 'Please enter your username.');
$formHorizontal->addPassword('password', 'Password')->setIconSuffix('fa fa-lock')->addRule(Form::FILLED, 'Please enter your password.');
$formHorizontal->addSubmit('submit', 'Login')->setButtonType(IBootstrapForm::BTN_TYPE_PRIMARY);

$formInline = new BootstrapForm();
$formInline->setRenderer(new BootstrapInlineFormRenderer());
$formInline->addText('username', 'Username')->addRule(Form::FILLED, 'Please enter your username.');
$formInline->addPassword('password', 'Password')->setIconSuffix('fa fa-lock')->addRule(Form::FILLED, 'Please enter your password.');
$formInline->addSubmit('submit', 'Login')->setButtonType(IBootstrapForm::BTN_TYPE_PRIMARY);

$formButtons = new BootstrapForm();
$formButtons->setRenderer(new BootstrapHorizontalFormRenderer());
$formButtons->addButton('btncolor1', 'Button danger')->setButtonType(IBootstrapForm::BTN_TYPE_DANGER);
$formButtons->addButton('btncolor2', 'Button default')->setButtonType(IBootstrapForm::BTN_TYPE_DEFAULT);
$formButtons->addButton('btncolor3', 'Button info')->setButtonType(IBootstrapForm::BTN_TYPE_INFO);
$formButtons->addButton('btncolor4', 'Button primary')->setButtonType(IBootstrapForm::BTN_TYPE_PRIMARY);
$formButtons->addButton('btncolor5', 'Button success')->setButtonType(IBootstrapForm::BTN_TYPE_SUCCESS);
$formButtons->addButton('btncolor6', 'Button warning')->setButtonType(IBootstrapForm::BTN_TYPE_WARNING);
$formButtons->addButton('btninline1', 'Inline button')->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_INLINE);
$formButtons->addButton('btninline2', 'Inline button')->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_INLINE);
$formButtons->addButton('btn1', 'Default button XS')->setButtonSize(IBootstrapForm::BTN_SIZE_XS);
$formButtons->addButton('btn2', 'Default button SM')->setButtonSize(IBootstrapForm::BTN_SIZE_SM);
$formButtons->addButton('btn3', 'Default button');
$formButtons->addButton('btn4', 'Default button LG')->setButtonSize(IBootstrapForm::BTN_SIZE_LG);
$formButtons->addButton('btnblock1', 'Default block button XS')->setButtonSize(IBootstrapForm::BTN_SIZE_XS)->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_BLOCK);
$formButtons->addButton('btnblock2', 'Default block button SM')->setButtonSize(IBootstrapForm::BTN_SIZE_SM)->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_BLOCK);
$formButtons->addButton('btnblock3', 'Default block button')->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_BLOCK);
$formButtons->addButton('btnblock4', 'Default block button LG')->setButtonSize(IBootstrapForm::BTN_SIZE_LG)->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_BLOCK);
$formButtons->addIconButton('btnicon1', 'Glyphicon')->setGlyphicon('wrench')->setButtonSize(IBootstrapForm::BTN_SIZE_LG)->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_BLOCK);
$formButtons->addIconButton('btnicon2', 'Font Awesome')->setIcon('fa fa-gear')->setButtonSize(IBootstrapForm::BTN_SIZE_LG)->setButtonDisplay(IBootstrapForm::BTN_DISPLAY_BLOCK);

$formInputs = new BootstrapForm();
$formInputs->setRenderer(new BootstrapHorizontalFormRenderer());
$formInputs->addText('input1', 'Small input')->setInputSize(IBootstrapForm::INPUT_SM);
$formInputs->addText('input2', 'Default input')->setInputSize(IBootstrapForm::INPUT_MD);
$formInputs->addText('input3', 'Large input')->setInputSize(IBootstrapForm::INPUT_LG);
$formInputs->addText('input4')->setPrefix('prefix')->setSuffix('suffix');
$formInputs->addText('input5')->setIconPrefix('fa fa-plane')->setGlypiconSuffix('wrench');
$formInputs->addPassword('inputpass1', 'Small password input')->setInputSize(IBootstrapForm::INPUT_SM);
$formInputs->addPassword('inputpass2', 'Default password input')->setInputSize(IBootstrapForm::INPUT_MD);
$formInputs->addPassword('inputpass3', 'Large password input')->setInputSize(IBootstrapForm::INPUT_LG);
$formInputs->addPassword('inputpass4')->setPrefix('prefix')->setSuffix('suffix');
$formInputs->addPassword('inputpass5')->setIconPrefix('fa fa-plane')->setGlypiconSuffix('wrench');
$formInputs->addSelect('select1', 'Select', array('One', 'Two', 'Three'))->setInputSize(IBootstrapForm::INPUT_SM);
$formInputs->addSelect('select2', 'Select', array('One', 'Two', 'Three'))->setInputSize(IBootstrapForm::INPUT_MD);
$formInputs->addSelect('select3', 'Select', array('One', 'Two', 'Three'))->setInputSize(IBootstrapForm::INPUT_LG);
$formInputs->addSelect('select4', 'Select', array('One', 'Two', 'Three'))->setPrefix('prefix')->setSuffix('suffix');
$formInputs->addSelect('select5', 'Select', array('One', 'Two', 'Three'))->setIconPrefix('fa fa-plane')->setGlypiconSuffix('wrench');

$registerDef = new Form();
$registerDef->addText('email','E-mail: ');
$registerDef->addPassword('passwd', 'Password: ');
$registerDef->addPassword('passwd2', 'Confirm password: ');
$registerDef->addCheckbox('box', 'Subscribe to newsletter');
$registerDef->addSubmit('submit', 'Register');

$registerBoot = new BootstrapForm();
$registerBoot->setRenderer(new BootstrapHorizontalFormRenderer());
$registerBoot->addText('email','E-mail: ');
$registerBoot->addPassword('passwd', 'Password: ');
$registerBoot->addPassword('passwd2', 'Confirm password: ');
$registerBoot->addCheckbox('box', 'Subscribe to newsletter');
$registerBoot->addSubmit('submit', 'Register');

?>
<!doctype html>
<html>
<head>
    <title>Bootstrap form example</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-forms.css">
</head>
<body>

<div class="jumbotron">
    <div class="container">
        <h1>Bootstrap forms example</h1>
    </div>
</div>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#form-default" data-toggle="tab">Default items</a></li>
        <li><a href="#form-extensions" data-toggle="tab">Form extensions</a></li>
        <li><a href="#form-layouts" data-toggle="tab">Form layouts</a></li>
        <li><a href="#form-buttons" data-toggle="tab">Form buttons</a></li>
        <li><a href="#form-text-inputs" data-toggle="tab">Text inputs</a></li>
        <li><a href="#form-compare" data-toggle="tab">Comparison</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="form-default">
            <h1>Default items from Nette forms</h1>
            <br><br>
            <?php echo $formDefault ?>
        </div>
        <div class="tab-pane" id="form-extensions">
            <h1>New items added to Nette forms</h1>
            <br><br>
            <?php echo $formExtensions ?>
        </div>
        <div class="tab-pane" id="form-layouts">
            <h1>Inline form</h1>
            <br><br>
            <?php echo $formInline ?>
            <h1>Horizontal form</h1>
            <br><br>
            <?php echo $formHorizontal ?>
            <h1>Default (wide) form</h1>
            <br><br>
            <?php echo $formBase ?>
        </div>
        <div class="tab-pane" id="form-buttons">
            <h1>Buttons features</h1>
            <br><br>
            <?php echo $formButtons ?>
        </div>
        <div class="tab-pane" id="form-text-inputs">
            <h1>Input and Selectbox features</h1>
            <br><br>
            <?php echo $formInputs ?>
        </div>
        <div class="tab-pane" id="form-compare">
            <h1>Comparison</h1>
            <br><br>
            <?php echo $registerDef ?>
            <br><br><br><br>
            <?php echo $registerBoot ?>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/live-form-validation.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-forms.js"></script>
<script>
    LiveForm.setOptions({
        messageParentClass: "form-group"
    });
</script>

</body>
</html>
