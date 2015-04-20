<?php //netteCache[01]000394a:2:{s:4:"time";s:21:"0.19186400 1367785331";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:72:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\kola.latte";i:2;i:1367318942;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\kola.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'mup0ieunnb')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content1
//
if (!function_exists($_l->blocks['content1'][] = '_lb4e5e4d8416_content1')) { function _lb4e5e4d8416_content1($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Kola</legend>
        <a href="<?php echo htmlSpecialChars($_control->link("Admin:pridatKolo")) ?>">Přidat kolo</a>
    <table>
        <thead>
        <tr>
            <th>Liga</th>
            <th>Název kola</th>
            <th>Začátek kola</th>
            <th>Konec kola</th>
            <th colspan="3">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
<?php $iterations = 0; foreach ($kola as $kolo): ?>
            <tr>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($kolo->ligy->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($kolo->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($kolo->zacatek_kola, 'd.m.Y'), ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($kolo->konec_kola, 'd.m.Y'), ENT_NOQUOTES) ?></td>
<?php if ($today>$kolo->konec_kola && $kolo->vyplaceno==0): ?>
                    <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:zavriKolo", array($kolo->id))) ?>" onClick="return confirm('Opravdu uzavřít toto kolo?\nBudou vyhodnoceny všechny vsazené tikety!')">Zavřít</a></td>
                <?php else: ?><td></td>
<?php endif ?>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:upravKolo", array($kolo->id))) ?>">Upravit</a></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:smazKolo", array($kolo->id))) ?>" onClick="return confirm('Opravdu smazat toto kolo?');">Smazat</a></td>
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