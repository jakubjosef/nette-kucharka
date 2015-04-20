<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.36737100 1367053597";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:61:"C:\wamp\www\nette\sandbox\app\templates\Admin\penezenka.latte";i:2;i:1366829224;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Admin\penezenka.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ig5q09twp5')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content1
//
if (!function_exists($_l->blocks['content1'][] = '_lb3319a22f67_content1')) { function _lb3319a22f67_content1($_l, $_args) { extract($_args)
?><fieldset>
<?php $iterations = 0; foreach ($flashes as $flash): ?>
        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
    <legend>Penezenka</legend>
    <table>
        <thead>
        <tr>
            <th>Jméno</th>
            <th>Příjmení</th>
            <th>Zůstatek</th>
            <th colspan="1">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): ?>
            <tr>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->jmeno, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->prijmeni, ENT_NOQUOTES) ?></td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->zustatek, ENT_NOQUOTES) ?></td>
                <td><a href="<?php echo htmlSpecialChars($_control->link("Admin:upravPenezenku", array($uzivatel->id))) ?>">Upravit</a></td>
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