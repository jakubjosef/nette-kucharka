<?php //netteCache[01]000397a:2:{s:4:"time";s:21:"0.85827300 1366097283";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:75:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\kontakt.latte";i:2;i:1366048202;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Admin\kontakt.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'pywa9jc57u')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content1
//
if (!function_exists($_l->blocks['content1'][] = '_lbf92e3bb375_content1')) { function _lbf92e3bb375_content1($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Kontakt</legend>
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