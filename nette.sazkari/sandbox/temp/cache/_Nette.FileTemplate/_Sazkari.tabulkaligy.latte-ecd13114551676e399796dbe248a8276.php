<?php //netteCache[01]000403a:2:{s:4:"time";s:21:"0.43643700 1367867446";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Sazkari\tabulkaligy.latte";i:2;i:1367867442;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Sazkari\tabulkaligy.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '1mor4ze1v7')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb17fac79d15_menu')) { function _lb17fac79d15_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb3bece10b79_content')) { function _lb3bece10b79_content($_l, $_args) { extract($_args)
?>  <fieldset>
      <legend>Tabulky ligy</legend>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($skupiny) as $skupina): ?>
    <table>
            <thead>
            <caption><?php echo Nette\Templating\Helpers::escapeHtml($skupina["nazev"], ENT_NOQUOTES) ?></caption>
            <tr>
                <th>&nbsp;</th>
                <th>Tipér</th>
                <th>Zápasů</th>
                <th>Výher</th>
                <th>Remízy</th>
                <th>Prohry</th>
                <th>Bodů</th>
            </tr>
            </thead>
            <tbody>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($skupina["radky"]) as $radek): ?>
                <tr>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($iterator->counter, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($radek->uzivatel, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($radek->zapasy, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($radek->vyhry, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($radek->remizy, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($radek->prohry, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($radek->body, ENT_NOQUOTES) ?></td>
                </tr>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
            </tbody>
    </table>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
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