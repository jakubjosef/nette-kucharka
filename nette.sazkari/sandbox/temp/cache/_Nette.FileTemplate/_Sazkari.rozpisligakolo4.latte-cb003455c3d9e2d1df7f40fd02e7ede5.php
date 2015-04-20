<?php //netteCache[01]000391a:2:{s:4:"time";s:21:"0.48850500 1366363149";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"C:\wamp\www\nette\sandbox\app\templates\Sazkari\rozpisligakolo4.latte";i:2;i:1366362523;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Sazkari\rozpisligakolo4.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6q4ydmoukk')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lba39938980c_menu')) { function _lba39938980c_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbccd9f0bc2a_content')) { function _lbccd9f0bc2a_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Rozpis ligy - 4. kolo</legend>
    <table>
            <thead>
                <tr>
                    <th colspan="10">Vyber kolo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
<?php for ($iterator = 1;$iterator <11;$iterator++): ?>
                    <td><a href="<?php echo htmlSpecialChars($_control->link("rozpisligakolo".$iterator)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($iterator, ENT_NOQUOTES) ?>. kolo  </a></td>
<?php endfor ?>
                </tr>
            </tbody>
            

    </table>
    <table>
            <thead>
            <tr>
                <th colspan="2">4. kolo</th>
                <th colspan="5">7.4.2013</th>
            </tr>
            </thead>
            <tbody>
<tr class="rozpis"><td>A1</td><td>A3</td><td></td><td></td><td></td><td>:</td><td></td></tr>
<tr class="rozpis"><td>A2</td><td>A6</td><td></td><td></td><td></td><td>:</td><td></td></tr>
<tr class="rozpis"><td>A4</td><td>A5</td><td></td><td></td><td></td><td>:</td><td></td></tr>

<tr><td>B1</td><td>B3</td><td></td><td></td><td></td><td>:</td><td></td></tr>
<tr><td>B2</td><td>B6</td><td></td><td></td><td></td><td>:</td><td></td></tr>
<tr><td>B4</td><td>B5</td><td></td><td></td><td></td><td>:</td><td></td></tr>

<tr class="rozpis"><td>C1</td><td>C3</td><td></td><td></td><td></td><td>:</td><td></td></tr>
<tr class="rozpis"><td>C2</td><td>C6</td><td></td><td></td><td></td><td>:</td><td></td></tr>
<tr class="rozpis"><td>C4</td><td>C5</td><td></td><td></td><td></td><td>:</td><td></td></tr>

<tr><td>D1</td><td>D3</td><td></td><td></td><td></td><td>:</td><td></td></tr>
<tr><td>D2</td><td>D6</td><td></td><td></td><td></td><td>:</td><td></td></tr>
<tr><td>D4</td><td>D5</td><td></td><td></td><td></td><td>:</td><td></td></tr>

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