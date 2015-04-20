<?php //netteCache[01]000402a:2:{s:4:"time";s:21:"0.02191200 1367001039";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:80:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\pridatRozpis.latte";i:2;i:1366126764;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\pridatRozpis.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'xn7eji833g')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content1
//
if (!function_exists($_l->blocks['content1'][] = '_lbd66c132f1b_content1')) { function _lbd66c132f1b_content1($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Novinky - přidat</legend>
<?php $_ctrl = $_control->getComponent("addRozpisForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</fieldset>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = "../@layoutAdmin.latte"; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
 if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content1']), $_l, get_defined_vars()) ; 