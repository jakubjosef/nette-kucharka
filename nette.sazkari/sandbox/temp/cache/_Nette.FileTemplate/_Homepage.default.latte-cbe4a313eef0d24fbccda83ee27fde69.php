<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.86661400 1367777904";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Homepage\default.latte";i:2;i:1367165376;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'qq4fg7bput')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb3752ab4e45_menu')) { function _lb3752ab4e45_menu($_l, $_args) { extract($_args)
?>  <li class="active"><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Úvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lba325a51feb_content')) { function _lba325a51feb_content($_l, $_args) { extract($_args)
?>  <fieldset>
      <legend>Úvodní strana</legend>
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
if (!function_exists($_l->blocks['scripts'][] = '_lb9561c4d63c_scripts')) { function _lb9561c4d63c_scripts($_l, $_args) { extract($_args)
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'scripts', get_defined_vars()) ?>

<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbfa8857c533_head')) { function _lbfa8857c533_head($_l, $_args) { extract($_args)
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