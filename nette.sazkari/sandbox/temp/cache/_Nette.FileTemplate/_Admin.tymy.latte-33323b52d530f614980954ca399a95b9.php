<?php //netteCache[01]000394a:2:{s:4:"time";s:21:"0.24314000 1366967668";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:72:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\tymy.latte";i:2;i:1366905872;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\tymy.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'z09s6w5aru')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content1
//
if (!function_exists($_l->blocks['content1'][] = '_lb7f62a1d5bd_content1')) { function _lb7f62a1d5bd_content1($_l, $_args) { extract($_args)
?><fieldset>
<?php $iterations = 0; foreach ($flashes as $flash): ?>
        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
    <legend>Týmy</legend>
    <a href="<?php echo htmlSpecialChars($_control->link("Admin:pridatTym")) ?>">Přidat nový tým</a>
    <table>
        <thead>
        <tr>
            <th>Sport:</th>
            <th>Název týmu:</th>
            <th colspan="2">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
<?php $iterations = 0; foreach ($tymy as $tym): ?>
            <tr>
                <td>
<?php if ($tym->id_sportu == 0): ?>
                    Fotbal
<?php else: ?>
                    Hokej
<?php endif ?>
                </td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($tym->nazev, ENT_NOQUOTES) ?></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:upravTym", array($tym->id))) ?>">Upravit</a></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:smazTym", array($tym->id))) ?>" onClick="return confirm('Opravdu smazat tento tým?');">Smazat</a></td>
            </tr>
<?php $iterations++; endforeach ?>
        </tbody>
        
    </table>
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