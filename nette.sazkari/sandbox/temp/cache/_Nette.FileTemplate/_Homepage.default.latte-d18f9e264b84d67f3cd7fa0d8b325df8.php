<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.08625700 1367100971";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:79:"C:\wamp\www\eclipse\nette.sazkari2\sandbox\app\templates\Homepage\default.latte";i:2;i:1367088452;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari2\sandbox\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '66ngqwiqn0')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lbeeaa5e78e8_menu')) { function _lbeeaa5e78e8_menu($_l, $_args) { extract($_args)
?>  <li class="active"><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb66f2499df4_content')) { function _lb66f2499df4_content($_l, $_args) { extract($_args)
?>  <fieldset>
<?php $iterations = 0; foreach ($flashes as $flash): ?>
        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
      <legend>Úvodní strana</legend>
      <a href="<?php echo htmlSpecialChars($_control->link("Homepage:upravUzivatele")) ?>">Uzivatel</a>
<?php $iterations = 0; foreach ($uvod as $uvod1): ?>
        <?php echo $uvod1->text ?>

        Dne: <time><?php echo Nette\Templating\Helpers::escapeHtml($template->date($uvod1->datum, 'j.n.Y'), ENT_NOQUOTES) ?></time>
        </p>
<?php $iterations++; endforeach ?>
</fieldset>
<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb4ad4c6808f_scripts')) { function _lb4ad4c6808f_scripts($_l, $_args) { extract($_args)
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'scripts', get_defined_vars()) ?>

<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb9927fab074_head')) { function _lb9927fab074_head($_l, $_args) { extract($_args)
;
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
call_user_func(reset($_l->blocks['menu']), $_l, get_defined_vars())  ?>
  
<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>
        
<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
     


<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 