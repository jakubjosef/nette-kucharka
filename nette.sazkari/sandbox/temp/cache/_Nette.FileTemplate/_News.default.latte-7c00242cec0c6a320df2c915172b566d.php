<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.39514800 1364339232";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"C:\wamp\www\nette\sandbox\app\templates\News\default.latte";i:2;i:1364339230;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\News\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jesz1nkqgv')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb687e75531d_menu')) { function _lb687e75531d_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Uvod</a></li>
  <li class="active"><a href="<?php echo htmlSpecialChars($_control->link("News:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Contact:")) ?>">Kontakt</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5b7cd0ac99_content')) { function _lb5b7cd0ac99_content($_l, $_args) { extract($_args)
?><h1>Aktuality</h1>
<?php $iterations = 0; foreach ($news as $new): ?>
<p><time><?php echo Nette\Templating\Helpers::escapeHtml($template->date($new->datetime, 'j/n/Y - H:i'), ENT_NOQUOTES) ?></time></br>
         <?php echo Nette\Templating\Helpers::escapeHtml($new->text, ENT_NOQUOTES) ?></p>
<?php $iterations++; endforeach ?>

<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbd398fecb13_scripts')) { function _lbd398fecb13_scripts($_l, $_args) { extract($_args)
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'scripts', get_defined_vars()) ?>

<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lba73693d170_head')) { function _lba73693d170_head($_l, $_args) { extract($_args)
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
call_user_func(reset($_l->blocks['menu']), $_l, get_defined_vars()) ; call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>
        
<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
     


<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 