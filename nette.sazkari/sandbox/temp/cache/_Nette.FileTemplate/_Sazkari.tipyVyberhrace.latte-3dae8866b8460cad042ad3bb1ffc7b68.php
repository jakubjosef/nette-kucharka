<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.48489200 1367770501";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"C:\wamp\www\nette\sandbox\app\templates\Sazkari\tipyVyberhrace.latte";i:2;i:1367770499;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Sazkari\tipyVyberhrace.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'plbqeyazfo')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb31f3472d4f_menu')) { function _lb31f3472d4f_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbfea38ec62e_content')) { function _lbfea38ec62e_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Tipy</legend>
    <table>
            <thead>
                <tr>
                    <th colspan="24">Vyber hráče</th>
                </tr>
            </thead>
            <tbody>
<?php $i = 0 ?>
                <tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($i==6 OR $i==12 OR $i==18): ?>
                    </tr>
                    <tr>
                <?php endif ;$i++ ?>

                    <td><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:tipyZobraz", array($id_kola ,$uzivatel->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?> </a></td>
<?php if ($i==24): ?>
                    </tr>
<?php endif ;$iterations++; endforeach ?>
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