<?php //netteCache[01]000397a:2:{s:4:"time";s:21:"0.99551300 1367184159";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:75:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\novinky.latte";i:2;i:1366973748;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\novinky.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6r2dl60ii2')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content1
//
if (!function_exists($_l->blocks['content1'][] = '_lb011f6e4486_content1')) { function _lb011f6e4486_content1($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Novinky</legend>
    
<?php $iterations = 0; foreach ($flashes as $flash): ?>
        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
    <a href="<?php echo htmlSpecialChars($_control->link("Admin:pridatNovinku")) ?>">Přidat novinku</a>
    <table>
        
        <thead>
        <tr>
            <th>Text</th>
            <th>Datum</th>
            <th colspan="2">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
<?php $iterations = 0; foreach ($news as $novinka): ?>
            <tr>
                <td><?php echo $template->truncate($novinka->text, 40, "...") ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($novinka->datetime, 'd.m.Y H:i:s'), ENT_NOQUOTES) ?></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:upravNovinku", array($novinka->id))) ?>">Upravit</a></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:smazNovinku", array($novinka->id))) ?>" onClick="return confirm('Opravdu smazat novinku?');">Smazat</a></td>
            </tr>
<?php $iterations++; endforeach ?>
        </tbody>
    </table>
        
<?php if (!$pageNavigator->first): ?>
    <a class="textcenter" href="<?php echo htmlSpecialChars($_control->link("this", array('page'=>$pageNavigator->page-1))) ?>"><< Předchozí  </a>
<?php endif ;if (!$pageNavigator->last): ?>
    <a class="textcenter" href="<?php echo htmlSpecialChars($_control->link("this", array('page'=>$pageNavigator->page+1))) ?>">  Další >></a>
<?php endif ?>
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