<?php //netteCache[01]000391a:2:{s:4:"time";s:21:"0.94269000 1367518513";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"C:\wamp\www\nette\sandbox\app\templates\Homepage\upravUzivatele.latte";i:2;i:1367164676;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Homepage\upravUzivatele.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'arqs8jxbv1')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lbe94951cf42_menu')) { function _lbe94951cf42_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Contact:")) ?>">Kontakt</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe7cc11439a_content')) { function _lbe7cc11439a_content($_l, $_args) { extract($_args)
?>  <fieldset>
      <legend>Upravit uživatele</legend>
<?php $_ctrl = $_control->getComponent("registraceForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
  </fieldset>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['menu']), $_l, get_defined_vars()) ; call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 