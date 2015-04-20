<?php //netteCache[01]000396a:2:{s:4:"time";s:21:"0.51392100 1367001033";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\rozpis.latte";i:2;i:1366903788;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\rozpis.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 've12j9e27y')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content1
//
if (!function_exists($_l->blocks['content1'][] = '_lb3da6e18e8b_content1')) { function _lb3da6e18e8b_content1($_l, $_args) { extract($_args)
?><fieldset>
<?php $iterations = 0; foreach ($flashes as $flash): ?>
        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
    <legend>Rozpis</legend>
        <a href="<?php echo htmlSpecialChars($_control->link("Admin:pridatRozpis")) ?>">Přidat další řádek</a>
    <table>
        <thead>
        <tr>
            <th>Kolo</th>
            <th>Liga</th>
            <th>Pohár</th>
            <th colspan="2">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
<?php $iterations = 0; foreach ($rozpisy as $rozpis): ?>
            <tr>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($rozpis->kolo, ENT_NOQUOTES) ?>.</td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($rozpis->liga, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($rozpis->pohar, ENT_NOQUOTES) ?></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:upravRozpis", array($rozpis->id))) ?>">Upravit</a></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:smazRozpis", array($rozpis->id))) ?>" onClick="return confirm('Opravdu smazat tento řádek?');">Smazat</a></td>
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