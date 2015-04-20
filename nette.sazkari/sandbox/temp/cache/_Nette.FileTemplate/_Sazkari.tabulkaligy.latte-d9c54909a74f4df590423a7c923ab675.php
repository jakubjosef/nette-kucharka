<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.43841200 1367101023";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\wamp\www\eclipse\nette.sazkari2\sandbox\app\templates\Sazkari\tabulkaligy.latte";i:2;i:1367071890;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari2\sandbox\app\templates\Sazkari\tabulkaligy.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9hv6g8ghh9')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb755b5eb2ab_menu')) { function _lb755b5eb2ab_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbbc5aa4143e_content')) { function _lbbc5aa4143e_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Tabulka ligy</legend>
    <table>
            <thead>
            <tr>
                <th colspan="1">&nbsp;</th>
                <th>Tipér</th>
                <th>Zápasů</th>
                <th>Výher</th>
                <th>Remízy</th>
                <th>Prohry</th>
                <th>Bodů</th>
                <th>Dal</th>
                <th>Dostal</th>
            </tr>
            </thead>
            <caption>"Skupina Davida Bystroně (Jih) A"</caption>
            <tbody>
<?php for ($iterator = 1; $iterator <7; $iterator++): ?>
                    <tr>
                        <td><?php echo Nette\Templating\Helpers::escapeHtml($iterator, ENT_NOQUOTES) ?>.</td>
                        <td>Tůca</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
<?php endfor ?>
            </tbody>
    </table>
    <table>
            <thead>
            <tr>
                <th colspan="1">&nbsp;</th>
                <th>Tipér</th>
                <th>Zápasů</th>
                <th>Výher</th>
                <th>Remízy</th>
                <th>Prohry</th>
                <th>Bodů</th>
                <th>Dal</th>
                <th>Dostal</th>
            </tr>
            </thead>
            <caption>"Skupina Romana Bednáře (Východ) B"</caption>
            <tbody>
<?php for ($iterator = 1; $iterator <7; $iterator++): ?>
                    <tr>
                        <td><?php echo Nette\Templating\Helpers::escapeHtml($iterator, ENT_NOQUOTES) ?>.</td>
                        <td>Pítrs</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
<?php endfor ?>
            </tbody>
    </table>
    <table>
            <thead>
            <tr>
                <th colspan="1">&nbsp;</th>
                <th>Tipér</th>
                <th>Zápasů</th>
                <th>Výher</th>
                <th>Remízy</th>
                <th>Prohry</th>
                <th>Bodů</th>
                <th>Dal</th>
                <th>Dostal</th>
            </tr>
            </thead>
            <caption>"Skupina Jendy Šimáka (Sever) C"</caption>
            <tbody>
<?php for ($iterator = 1; $iterator <7; $iterator++): ?>
                    <tr>
                        <td><?php echo Nette\Templating\Helpers::escapeHtml($iterator, ENT_NOQUOTES) ?>.</td>
                        <td>Bobeš</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
<?php endfor ?>
            </tbody>
    </table>
    <table>
            <thead>
            <tr>
                <th colspan="1">&nbsp;</th>
                <th>Tipér</th>
                <th>Zápasů</th>
                <th>Výher</th>
                <th>Remízy</th>
                <th>Prohry</th>
                <th>Bodů</th>
                <th>Dal</th>
                <th>Dostal</th>
            </tr>
            </thead>
            <caption>"Skupina Martina Fenina (Západ) D"</caption>
            <tbody>
<?php for ($iterator = 1; $iterator <7; $iterator++): ?>
                    
<?php if ($iterator == 1): ?>
                            <tr class="prvniflek">
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($iterator, ENT_NOQUOTES) ?>.</td>
                                <td>Kebe</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
<?php elseif ($iterator == 2 || $iterator == 3): ?>
                            <tr class="druhyflek">
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($iterator, ENT_NOQUOTES) ?>.</td>
                                <td>Kebe</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
<?php else: ?>
                            <tr>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($iterator, ENT_NOQUOTES) ?>.</td>
                                <td>Kebe</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
<?php endif ?>
                    </tr>
<?php endfor ?>
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