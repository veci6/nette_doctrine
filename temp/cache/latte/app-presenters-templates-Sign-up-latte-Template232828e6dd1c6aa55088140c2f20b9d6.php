<?php
// source: C:\xampp\htdocs\nette_doctrine\app\presenters/templates/Sign/up.latte

class Template232828e6dd1c6aa55088140c2f20b9d6 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('e472291487', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbe21f386f17_content')) { function _lbe21f386f17_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h2><?php echo Latte\Runtime\Filters::escapeHtml($template->translate("sign.up.header"), ENT_NOQUOTES) ?></h2>
<?php $_l->tmp = $_control->getComponent("signUpForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
<br>
<?php echo Latte\Runtime\Filters::escapeHtml($template->translate("sign.up.nameMayContainLetters"), ENT_NOQUOTES) ?>
: a-z A-Z 0-9<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}