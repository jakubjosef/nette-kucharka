<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.10807400 1366967580";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:79:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Sazkari\penezenka.latte";i:2;i:1366239468;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Sazkari\penezenka.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'i1nu7h13g1')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb1000c580a6_menu')) { function _lb1000c580a6_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb184c5ec0ca_content')) { function _lb184c5ec0ca_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Peněženka</legend>
        <table>
            <thead>
            <tr>
                <th>Jméno:</th>
                <th>Příjmení:</th>
                <th>Přezdívka:</th>
                <th>Zůstatek:</th>
                <th>Stav:</th>
            </tr>
            </thead>
            <tbody>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): ?>
                <tr>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->jmeno, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->prijmeni, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->zustatek, ENT_NOQUOTES) ?></td>
                    <td>
<?php if ($uzivatel->zustatek == 0): ?>
                            <tag class="none">-</tag>
<?php elseif ($uzivatel->zustatek < 0): ?>
                            <tag class="wrong">Dluží</tag>
<?php elseif ($uzivatel->zustatek > 0): ?>
                            <tag class="right">Nabito</tag>
<?php endif ?>
                    </td>
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