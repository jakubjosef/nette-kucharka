<?php //netteCache[01]000386a:2:{s:4:"time";s:21:"0.81655200 1367766655";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"C:\wamp\www\nette\sandbox\app\templates\Sazkari\statistika.latte";i:2;i:1367766651;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Sazkari\statistika.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'y89528pdlb')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb3ca8d57df2_menu')) { function _lb3ca8d57df2_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2715e7974d_content')) { function _lb2715e7974d_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Statistika hráčů</legend>
    <table>
            <thead>
            <tr>
				<th>Pořadí:</th>
                <th>Jméno:</th>
                <th>Příjmení:</th>
                <th>Přezdívka:</th>
                <th>Úspěšnost:</th>
            </tr>
            </thead>
            <tbody>
<?php $i = 1 ;$iterations = 0; foreach ($uzivatele as $uzivatel): ?>
                <tr>
<?php $pocet = 1 ;$uspesnost = 0 ;$pocetZapasu = 1 ?>
					
					<td><?php echo Nette\Templating\Helpers::escapeHtml($i, ENT_NOQUOTES) ?>.</td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->jmeno, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->prijmeni, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->uzivatele_id == $i): $pocetZapasu++ ;endif ?>

<?php if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $i): ?> <?php $pocet+=1 ;endif ?>

<?php $iterations++; endforeach ;if (($pocetZapasu > 1)): $uspesnost = (($pocet-1)/($pocetZapasu-1))*100 ?>
 <?php else: ?>

<?php $uspesnost = (($pocet)/($pocetZapasu))*100 ;endif ?><td><?php echo Nette\Templating\Helpers::escapeHtml(round($uspesnost,2), ENT_NOQUOTES) ?> %</td>                    
<?php $i++ ?>
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