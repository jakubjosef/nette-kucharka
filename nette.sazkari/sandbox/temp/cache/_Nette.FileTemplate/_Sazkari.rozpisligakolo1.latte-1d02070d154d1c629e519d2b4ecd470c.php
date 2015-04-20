<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.55636400 1367149415";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Sazkari\rozpisligakolo1.latte";i:2;i:1367082456;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\Sazkari\rozpisligakolo1.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6rkfp0vuxp')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lbfa5049332e_menu')) { function _lbfa5049332e_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2124312b93_content')) { function _lb2124312b93_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Rozpis ligy - 1. kolo</legend>
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
                    <th colspan="2">1. kolo</th>
<?php $iterations = 0; foreach ($kola as $kolo): ?>
                    <th colspan="5"><?php echo Nette\Templating\Helpers::escapeHtml($template->date($kolo->zacatek_kola, 'd.m.Y'), ENT_NOQUOTES) ?>
. - .<?php echo Nette\Templating\Helpers::escapeHtml($template->date($kolo->konec_kola, 'd.m.Y'), ENT_NOQUOTES) ?></th>
<?php $iterations++; endforeach ?>
            </tr>
            </thead>
            <tbody>
<?php $a1 = 0 ;$a2 = 0 ;$a3 = 0 ;$a4 = 0 ;$a5 = 0 ;$a6 = 0 ;$b1 = 0 ;$b2 = 0 ;$b3 = 0 ;$b4 = 0 ;$b5 = 0 ;$b6 = 0 ;$c1 = 0 ;$c2 = 0 ;$c3 = 0 ;$c4 = 0 ;$c5 = 0 ;$c6 = 0 ;$d1 = 0 ;$d2 = 0 ;$d3 = 0 ;$d4 = 0 ;$d5 = 0 ;$d6 = 0 ?>
                
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 1): ?>
<tr class="rozpis"><td>A1</td><td>A6</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 6): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 1): ?>
 <?php $a1+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a1, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 6): ?>
 <?php $a6+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a6, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 2): ?>
<tr class="rozpis"><td>A2</td><td>A5</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 5): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 2): ?>
 <?php $a2+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a2, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 5): ?>
 <?php $a5+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a5, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 3): ?>
<tr class="rozpis"><td>A3</td><td>A4</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 4): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 3): ?>
 <?php $a3+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a3, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 4): ?>
 <?php $a4+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a4, ENT_NOQUOTES) ?></td></tr>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 7): ?>
<tr><td>B1</td><td>B6</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 12): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 7): ?>
 <?php $b1+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b1, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 12): ?>
 <?php $b6+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b6, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 8): ?>
<tr><td>B2</td><td>B5</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 11): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 8): ?>
 <?php $b2+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b2, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 11): ?>
 <?php $b5+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b5, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 9): ?>
<tr><td>B3</td><td>B4</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 10): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 9): ?>
 <?php $b3+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b3, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 10): ?>
 <?php $b4+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b4, ENT_NOQUOTES) ?></td></tr>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 13): ?>
<tr class="rozpis"><td>C1</td><td>C6</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 18): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 13): ?>
 <?php $c1+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c1, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 18): ?>
 <?php $c+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c6, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 14): ?>
<tr class="rozpis"><td>C2</td><td>C5</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 17): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 14): ?>
 <?php $c2+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c2, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 17): ?>
 <?php $c5+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c5, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 15): ?>
<tr class="rozpis"><td>C3</td><td>C4</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 16): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 15): ?>
 <?php $c3+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c3, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 16): ?>
 <?php $c4+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c4, ENT_NOQUOTES) ?></td></tr>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 19): ?>
<tr><td>D1</td><td>D6</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 24): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 19): ?>
 <?php $d1+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d1, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 24): ?>
 <?php $d+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d6, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 20): ?>
<tr><td>D2</td><td>D5</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 23): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 20): ?>
 <?php $d2+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d2, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 23): ?>
 <?php $d5+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d5, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 21): ?>
<tr><td>D3</td><td>D4</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == 22): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 21): ?>
 <?php $d3+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d3, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->id_uzivatele == 22): ?>
 <?php $d4+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d4, ENT_NOQUOTES) ?></td></tr>

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