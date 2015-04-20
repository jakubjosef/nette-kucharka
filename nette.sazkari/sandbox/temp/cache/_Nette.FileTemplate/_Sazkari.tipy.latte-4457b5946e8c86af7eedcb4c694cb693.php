<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.04393600 1367534660";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"C:\wamp\www\nette\sandbox\app\templates\Sazkari\tipy.latte";i:2;i:1367240918;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Sazkari\tipy.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'yjfxhstd0o')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lbe8e904c833_menu')) { function _lbe8e904c833_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb50ea06fc9f_content')) { function _lb50ea06fc9f_content($_l, $_args) { extract($_args)
?>  <fieldset>
      <legend>Tipy - <?php echo Nette\Templating\Helpers::escapeHtml($kolo->nazev, ENT_NOQUOTES) ?></legend>
      <div class="leftpanel">
<?php $iterations = 0; foreach ($kola as $kolo2): ?>
            <a href="<?php echo htmlSpecialChars($_control->link("Sazkari:tipy", array($kolo2->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($kolo2->nazev, ENT_NOQUOTES) ?></a>
<?php $iterations++; endforeach ?>
      </div>
      <div class="tipy">
    <table>
        <thead>
        <tr>
            <th>Sport</th>
            <th>Domácí</th>
            <th>Hosté</th>
            <th>Datum</th>
        </tr>
        </thead>
        <tbody>
<?php $iterations = 0; foreach ($zapasy as $zapas): ?>
            <tr>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->sporty->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->domaci->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($zapas->hoste->nazev, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($zapas->datum, 'd.m.Y'), ENT_NOQUOTES) ?></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:zapas", array($zapas->id))) ?>">detail</a></td>
       
            </tr>
<?php $iterations++; endforeach ?>
        </tbody>
    </table>
      </div>
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