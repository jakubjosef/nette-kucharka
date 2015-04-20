<?php //netteCache[01]000399a:2:{s:4:"time";s:21:"0.23469100 1367777970";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:77:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Novinky\default.latte";i:2;i:1367145786;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Novinky\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6inebuzlw7')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb38f3d7bf9b_menu')) { function _lb38f3d7bf9b_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Uvod</a></li>
  <li class="active"><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe40319cb04_content')) { function _lbe40319cb04_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Aktuality</legend>
<?php $iterations = 0; foreach ($news as $new): ?>
            <p><time><?php echo Nette\Templating\Helpers::escapeHtml($template->date($new->datetime, 'j.n.Y - H:i'), ENT_NOQUOTES) ?></time></br>
                     <?php echo $new->text ?></p>
<?php $iterations++; endforeach ;if (!$pageNavigator->first): ?>
    <a class="textcenter" href="<?php echo htmlSpecialChars($_control->link("this", array('page'=>$pageNavigator->page-1))) ?>"><< Předchozí  </a>
<?php endif ;if (!$pageNavigator->last): ?>
    <a class="textcenter" href="<?php echo htmlSpecialChars($_control->link("this", array('page'=>$pageNavigator->page+1))) ?>">  Další >></a>
<?php endif ?>
</fieldset>
<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbac3a1fda70_scripts')) { function _lbac3a1fda70_scripts($_l, $_args) { extract($_args)
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'scripts', get_defined_vars()) ?>

<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbb9316c464c_head')) { function _lbb9316c464c_head($_l, $_args) { extract($_args)
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