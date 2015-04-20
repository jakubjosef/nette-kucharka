<?php //netteCache[01]000387a:2:{s:4:"time";s:21:"0.65329800 1367762368";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:65:"C:\wamp\www\nette\sandbox\app\templates\Sazkari\tabulkaligy.latte";i:2;i:1367762344;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Sazkari\tabulkaligy.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '8ixyjm3l5k')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb073b271a59_menu')) { function _lb073b271a59_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb06df070592_content')) { function _lb06df070592_content($_l, $_args) { extract($_args)
;$a1 = 0 ;$a2 = 0 ;$a3 = 0 ;$a4 = 0 ;$a5 = 0 ;$a6 = 0 ;$b1 = 0 ;$b2 = 0 ;$b3 = 0 ;$b4 = 0 ;$b5 = 0 ;$b6 = 0 ;$c1 = 0 ;$c2 = 0 ;$c3 = 0 ;$c4 = 0 ;$c5 = 0 ;$c6 = 0 ;$d1 = 0 ;$d2 = 0 ;$d3 = 0 ;$d4 = 0 ;$d5 = 0 ;$d6 = 0 ?>
				
<?php $P1 = 1 ;$P2 = 2 ;$P3 = 3 ;$P4 = 4 ;$P5 = 5 ;$P6 = 6 ?>
                
<?php $P7 = 7 ;$P8 = 8 ;$P9 = 9 ;$P10 = 10 ;$P11 = 11 ;$P12 = 12 ?>
                
<?php $P13 = 13 ;$P14 = 14 ;$P15 = 15 ;$P16 = 16 ;$P17 = 17 ;$P18 = 18 ?>
                
<?php $P19 = 19 ;$P20 = 20 ;$P21 = 21 ;$P22 = 22 ;$P23 = 23 ;$P24 = 24 ?>
<fieldset>
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
<?php for ($i = 1; $i <7; $i++): $soucetZapasu = 0 ;$soucetVyher = 0 ;$soucetRemiz = 0 ;$soucetProher = 0 ;$bodu = 0 ;$dal = 0 ?>
				<tr>
<td><?php echo Nette\Templating\Helpers::escapeHtml($i, ENT_NOQUOTES) ?>.</td>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $i): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->uzivatele_id == $i): ?>
 <?php $soucetZapasu+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetZapasu, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND ($tip->vysledek == 1 OR $tip->vysledek == 2) AND $tip->uzivatele_id == $i): $bodu+=3 ?>
 <?php $soucetVyher+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetVyher, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND $tip->vysledek == 0 AND $tip->uzivatele_id == $i): ?>
 <?php $bodu+=1 ;$soucetRemiz+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetRemiz, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip != $tip->vysledek AND $tip->uzivatele_id == $i): ?>
 <?php $soucetProher+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetProher, ENT_NOQUOTES) ?></td>
<td><?php echo Nette\Templating\Helpers::escapeHtml($bodu, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND $tip->uzivatele_id == $i): ?>
 <?php $dal+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($dal, ENT_NOQUOTES) ?></td>
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
<?php for ($i = 7; $i <13; $i++): ?>
			 
<?php $soucetZapasu = 0 ;$soucetVyher = 0 ;$soucetRemiz = 0 ;$soucetProher = 0 ;$bodu = 0 ;$dal = 0 ?>

<tr>
<td><?php echo Nette\Templating\Helpers::escapeHtml($i, ENT_NOQUOTES) ?>.</td>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $i): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->uzivatele_id == $i): ?>
 <?php $soucetZapasu+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetZapasu, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND ($tip->vysledek == 1 OR $tip->vysledek == 2) AND $tip->uzivatele_id == $i): $bodu+=3 ?>
 <?php $soucetVyher+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetVyher, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND $tip->vysledek == 0 AND $tip->uzivatele_id == $i): ?>
 <?php $bodu+=1 ;$soucetRemiz+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetRemiz, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip != $tip->vysledek AND $tip->uzivatele_id == $i): ?>
 <?php $soucetProher+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetProher, ENT_NOQUOTES) ?></td>
<td><?php echo Nette\Templating\Helpers::escapeHtml($bodu, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND $tip->uzivatele_id == $i): ?>
 <?php $dal+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($dal, ENT_NOQUOTES) ?></td>
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
<?php for ($i = 13; $i <19; $i++): ?>
			 
<?php $soucetZapasu = 0 ;$soucetVyher = 0 ;$soucetRemiz = 0 ;$soucetProher = 0 ;$bodu = 0 ;$dal = 0 ?>

<tr>
<td><?php echo Nette\Templating\Helpers::escapeHtml($i, ENT_NOQUOTES) ?>.</td>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $i): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->uzivatele_id == $i): ?>
 <?php $soucetZapasu+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetZapasu, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND ($tip->vysledek == 1 OR $tip->vysledek == 2) AND $tip->uzivatele_id == $i): $bodu+=3 ?>
 <?php $soucetVyher+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetVyher, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND $tip->vysledek == 0 AND $tip->uzivatele_id == $i): ?>
 <?php $bodu+=1 ;$soucetRemiz+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetRemiz, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip != $tip->vysledek AND $tip->uzivatele_id == $i): ?>
 <?php $soucetProher+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetProher, ENT_NOQUOTES) ?></td>
<td><?php echo Nette\Templating\Helpers::escapeHtml($bodu, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND $tip->uzivatele_id == $i): ?>
 <?php $dal+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($dal, ENT_NOQUOTES) ?></td>
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
<?php for ($i = 19; $i <25; $i++): ?>
			 
<?php $soucetZapasu = 0 ;$soucetVyher = 0 ;$soucetRemiz = 0 ;$soucetProher = 0 ;$bodu = 0 ;$dal = 0 ?>

<tr>
<td><?php echo Nette\Templating\Helpers::escapeHtml($i, ENT_NOQUOTES) ?>.</td>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $i): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->uzivatele_id == $i): ?>
 <?php $soucetZapasu+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetZapasu, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND ($tip->vysledek == 1 OR $tip->vysledek == 2) AND $tip->uzivatele_id == $i): $bodu+=3 ?>
 <?php $soucetVyher+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetVyher, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND $tip->vysledek == 0 AND $tip->uzivatele_id == $i): ?>
 <?php $bodu+=1 ;$soucetRemiz+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetRemiz, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip != $tip->vysledek AND $tip->uzivatele_id == $i): ?>
 <?php $soucetProher+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($soucetProher, ENT_NOQUOTES) ?></td>
<td><?php echo Nette\Templating\Helpers::escapeHtml($bodu, ENT_NOQUOTES) ?></td>
<?php $iterations = 0; foreach ($tipy as $tip): if ($tip->tip == $tip->vysledek AND $tip->uzivatele_id == $i): ?>
 <?php $dal+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($dal, ENT_NOQUOTES) ?></td>
<td>0</td>
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