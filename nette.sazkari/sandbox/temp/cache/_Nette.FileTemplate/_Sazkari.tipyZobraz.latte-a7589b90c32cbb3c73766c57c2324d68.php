<?php //netteCache[01]000386a:2:{s:4:"time";s:21:"0.95308200 1367770077";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"C:\wamp\www\nette\sandbox\app\templates\Sazkari\tipyZobraz.latte";i:2;i:1367770062;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Sazkari\tipyZobraz.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd091png4zj')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb1bf7b37677_menu')) { function _lb1bf7b37677_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbfecbf12685_content')) { function _lbfecbf12685_content($_l, $_args) { extract($_args)
?>  <fieldset>
      
      <legend>Tipy - <?php echo Nette\Templating\Helpers::escapeHtml($nazevkola->nazev, ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?></legend>
      
      <table>
          <thead>
            <th>Zápas</th>
            <th>Datum a čas tipu</th>
            <th>Tip</th>
            <th>Výsledek</th>
          </thead>
          <tbody>
<?php $iterations = 0; foreach ($tipy as $tip): ?>
            <tr>
                <td><a href="<?php echo htmlSpecialChars($baseUrl) ?>/sazkari/zapas/<?php echo htmlSpecialChars($tip->zapasy->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($tip->zapasy->domaci->nazev, ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($tip->zapasy->hoste->nazev, ENT_NOQUOTES) ?></a></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($tip->timestamp, "d.m.Y H:i:s"), ENT_NOQUOTES) ?></td>
                <td>
<?php if ($tip->tip==1): ?>
                    Výhra domacích
<?php elseif ($tip->tip==2): ?>
                    Výhra hostů
<?php else: ?>
                    Remíza
<?php endif ?>
                </td>
                <td><?php if ($tip->vysledek==1): ?><tag class="right">Úspěch</tag><?php elseif ($tip->vysledek==2): ?>
<tag class="wrong">Neúspěch</tag><?php else: ?><tag class="none">Nerozhodnuto</tag><?php endif ?></td>
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