<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.22230500 1367522538";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"C:\wamp\www\nette\sandbox\app\templates\Admin\zapasy.latte";i:2;i:1367240701;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Admin\zapasy.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9l9a9ht6i7')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content1
//
if (!function_exists($_l->blocks['content1'][] = '_lb1d863791a8_content1')) { function _lb1d863791a8_content1($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Zápasy</legend>
    <a href="<?php echo htmlSpecialChars($_control->link("Admin:pridatZapas")) ?>">Přidat zápas</a>
    <table>
        
        <thead>
        <tr>
            <th colspan="5">&nbsp;</th>
            <th class="textcenter" colspan="2">Handicap</th>
            <th class="textcenter" colspan="3">Výsledek</th>
            <th colspan="2">&nbsp;</th>
        </tr>    
        <tr>
            <th>Kolo</th>
            <th>Sport</th>
            <th>Domácí</th>
            <th>Hosté</th>
            <th>Datum</th>
            <th>Domácí</th>
            <th>Hosté</th>
            <th>Domácí</th>
            <th>Hosté</th>
            <th>Celkem</th>
            <th colspan="2">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
<?php $iterations = 0; foreach ($zapasy as $zapas): ?>
            <tr>
                
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->kola->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->sporty->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->domaci->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->hoste->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($zapas->datum, 'd.m.Y'), ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->handicap_domacich, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->handicap_hostu, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->vysledek_domacich, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->vysledek_hostu, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->vysledek, ENT_NOQUOTES) ?></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:upravZapas", array($zapas->id))) ?>">Upravit</a></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:smazZapas", array($zapas->id))) ?>" onClick="return confirm('Opravdu smazat zápas?');">Smazat</a></td>
            </tr>
<?php $iterations++; endforeach ?>
        </tbody>
    </table>
<?php if (!$pageNavigator->first): ?>
    <a class="txtCenter" href="<?php echo htmlSpecialChars($_control->link("this", array('page'=>$pageNavigator->page-1))) ?>"><< Předchozí  </a>
<?php endif ;if (!$pageNavigator->last): ?>
    <a class="txtCenter" href="<?php echo htmlSpecialChars($_control->link("this", array('page'=>$pageNavigator->page+1))) ?>">  Další >></a>
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