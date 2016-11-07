<?php
// source: C:\xampp\htdocs\nette_doctrine\app\presenters/templates/@layout.latte

class Template53b1b71ef4352004ef0b659d2114e21f extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('89dffd44f5', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lb2f10f87f55_head')) { function _lb2f10f87f55_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb3a219ee757_scripts')) { function _lb3a219ee757_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//nette.github.io/resources/js/netteForms.min.js"></script>
        <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/main.js"></script>
<?php
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
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Nette Doctrine 2 blog</title>

        <link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/style.css">
        <link rel="shortcut icon" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico">
        <meta name="viewport" content="width=device-width">
        <?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>

    </head>
    <body>
        <div id="container">

<?php if (count($flashes) > 0) { ?>
                <div id="flashes">
                    <div class="text">
<?php $iterations = 0; foreach ($flashes as $flash) { ?>                        <div<?php if ($_l->tmp = array_filter(array('flash', $flash->type))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>>
                            <?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?>

                        </div>
<?php $iterations++; } ?>
                    </div>
                </div>
<?php } ?>

            <div id="header">
                <div id="logo">
                    <h1>Blog system</h1>
                </div>
                <div id="userInfo">
<?php if ($user->isLoggedIn()) { ?>
                        <?php echo Latte\Runtime\Filters::escapeHtml($template->translate("common.loggedAs"), ENT_NOQUOTES) ?>
: <?php echo Latte\Runtime\Filters::escapeHtml($userEntity->name, ENT_NOQUOTES) ?>

<?php } ?>
                </div>
                <div id="menu">
                    <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($template->translate("menu.homepage"), ENT_NOQUOTES) ?></a>
<?php if (!$user->isLoggedIn()) { ?>
                        <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Sign:up"), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($template->translate("menu.signUp"), ENT_NOQUOTES) ?></a>
<?php } ?>
                </div>

            </div>
            <div id="content">
<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ?>
            </div>
            <div id="footer">
                <div class="text">
                    &copy; Ondřej Večerek
                </div>
            </div>
        </div>

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>
    </body>
</html>
<?php
}}