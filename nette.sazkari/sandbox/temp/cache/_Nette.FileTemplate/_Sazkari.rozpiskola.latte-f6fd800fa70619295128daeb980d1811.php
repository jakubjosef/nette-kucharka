<?php //netteCache[01]000386a:2:{s:4:"time";s:21:"0.90095900 1367589747";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:64:"C:\wamp\www\nette\sandbox\app\templates\Sazkari\rozpiskola.latte";i:2;i:1367589735;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Sazkari\rozpiskola.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'rzv59te6ap')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lb1d92b111da_menu')) { function _lb1d92b111da_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb53ba9fdc2_content')) { function _lbb53ba9fdc2_content($_l, $_args) { extract($_args)
?><fieldset>
    <legend>Rozpis ligy - <?php echo Nette\Templating\Helpers::escapeHtml($kolo->nazev, ENT_NOQUOTES) ?></legend>
    <table>
            <thead>
                <tr>
                    <th colspan="10">Vyber kolo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
<?php $i = 1 ;$iterations = 0; foreach ($kola as $kolo2): if ($i <= 10): ?>
                         <td><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:rozpisKola", array($kolo2->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($kolo2->nazev, ENT_NOQUOTES) ?> </a></td>
<?php endif ;$i++ ;$iterations++; endforeach ?>
                </tr>
            </tbody>
            

    </table>
    <table>
            <thead>
            <tr>
                    <th colspan="2"><?php echo Nette\Templating\Helpers::escapeHtml($kolo->nazev, ENT_NOQUOTES) ?></th>
                    <th colspan="5"><?php echo Nette\Templating\Helpers::escapeHtml($template->date($kolo->zacatek_kola, 'd.m.Y'), ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($template->date($kolo->konec_kola, 'd.m.Y'), ENT_NOQUOTES) ?></th>
            </tr>
            </thead>
            <tbody>
<?php $a1 = 1 ;$a2 = 1 ;$a3 = 1 ;$a4 = 0 ;$a5 = 0 ;$a6 = 0 ;$b1 = 1 ;$b2 = 1 ;$b3 = 1 ;$b4 = 0 ;$b5 = 0 ;$b6 = 0 ;$c1 = 1 ;$c2 = 1 ;$c3 = 1 ;$c4 = 0 ;$c5 = 0 ;$c6 = 0 ;$d1 = 1 ;$d2 = 1 ;$d3 = 1 ;$d4 = 0 ;$d5 = 0 ;$d6 = 0 ?>
                
<?php if ($kolo->nazev == "1. kolo"): $nazevkola = "1. kolo" ;$P1 = 1 ;$P2 = 6 ;$P3 = 2 ;$P4 = 5 ;$P5 = 3 ;$P6 = 4 ?>
                
<?php $P7 = 7 ;$P8 = 12 ;$P9 = 8 ;$P10 = 11 ;$P11 = 9 ;$P12 = 10 ?>
                
<?php $P13 = 13 ;$P14 = 18 ;$P15 = 14 ;$P16 = 17 ;$P17 = 15 ;$P18 = 16 ?>
                
<?php $P19 = 19 ;$P20 = 24 ;$P21 = 20 ;$P22 = 23 ;$P23 = 21 ;$P24 = 22 ?>
                
<?php $N1 = "A1" ;$N2 = "A6" ;$N3 = "A2" ;$N4 = "A5" ;$N5 = "A3" ;$N6 = "A4" ?>
                
<?php $N7 = "B1" ;$N8 = "B6" ;$N9 = "B2" ;$N10 = "B5" ;$N11 = "B3" ;$N12 = "B4" ?>
                
<?php $N13 = "C1" ;$N14 = "C6" ;$N15 = "C2" ;$N16 = "C5" ;$N17 = "C3" ;$N18 = "C4" ?>
                
<?php $N19 = "D1" ;$N20 = "D6" ;$N21 = "D2" ;$N22 = "D5" ;$N23 = "D3" ;$N24 = "D4" ;endif ;if ($kolo->nazev == "2. kolo"): $nazevkola = "2. kolo" ;$P1 = 1 ;$P2 = 5 ;$P3 = 2 ;$P4 = 4 ;$P5 = 3 ;$P6 = 6 ?>
                
<?php $P7 = 1+6 ;$P8 = 5+6 ;$P9 = 2+6 ;$P10 = 4+6 ;$P11 = 3+6 ;$P12 = 6+6 ?>
                
<?php $P13 = 1+12 ;$P14 = 5+12 ;$P15 = 2+12 ;$P16 = 4+12 ;$P17 = 3+12 ;$P18 = 6+12 ?>
                
<?php $P19 = 1+18 ;$P20 = 5+18 ;$P21 = 2+18 ;$P22 = 4+18 ;$P23 = 3+18 ;$P24 = 6+18 ?>
                
<?php $N1 = "A1" ;$N2 = "A5" ;$N3 = "A2" ;$N4 = "A4" ;$N5 = "A3" ;$N6 = "A6" ?>
                
<?php $N7 = "B1" ;$N8 = "B5" ;$N9 = "B2" ;$N10 = "B4" ;$N11 = "B3" ;$N12 = "B6" ?>
                
<?php $N13 = "C1" ;$N14 = "C5" ;$N15 = "C2" ;$N16 = "C4" ;$N17 = "C3" ;$N18 = "C6" ?>
                
<?php $N19 = "D1" ;$N20 = "D5" ;$N21 = "D2" ;$N22 = "D4" ;$N23 = "D3" ;$N24 = "D6" ;endif ;if ($kolo->nazev == "3. kolo"): $nazevkola = "3. kolo" ;$P1 = 1 ;$P2 = 4 ;$P3 = 2 ;$P4 = 3 ;$P5 = 5 ;$P6 = 6 ?>
                
<?php $P7 = 1+6 ;$P8 = 4+6 ;$P9 = 2+6 ;$P10 = 3+6 ;$P11 = 5+6 ;$P12 = 6+6 ?>
                
<?php $P13 = 1+12 ;$P14 = 4+12 ;$P15 = 2+12 ;$P16 = 3+12 ;$P17 = 5+12 ;$P18 = 6+12 ?>
                
<?php $P19 = 1+18 ;$P20 = 4+18 ;$P21 = 2+18 ;$P22 = 3+18 ;$P23 = 5+18 ;$P24 = 6+18 ?>
                
<?php $N1 = "A1" ;$N2 = "A4" ;$N3 = "A2" ;$N4 = "A3" ;$N5 = "A5" ;$N6 = "A6" ?>
                
<?php $N7 = "B1" ;$N8 = "B4" ;$N9 = "B2" ;$N10 = "B3" ;$N11 = "B5" ;$N12 = "B6" ?>
                
<?php $N13 = "C1" ;$N14 = "C4" ;$N15 = "C2" ;$N16 = "C3" ;$N17 = "C5" ;$N18 = "C6" ?>
                
<?php $N19 = "D1" ;$N20 = "D4" ;$N21 = "D2" ;$N22 = "D3" ;$N23 = "D5" ;$N24 = "D6" ;endif ;if ($kolo->nazev == "4. kolo"): $nazevkola = "4. kolo" ;$P1 = 1 ;$P2 = 3 ;$P3 = 2 ;$P4 = 6 ;$P5 = 4 ;$P6 = 5 ?>
                
<?php $P7 = 1+6 ;$P8 = 3+6 ;$P9 = 2+6 ;$P10 = 6+6 ;$P11 = 4+6 ;$P12 = 5+6 ?>
                
<?php $P13 = 1+12 ;$P14 = 3+12 ;$P15 = 2+12 ;$P16 = 6+12 ;$P17 = 4+12 ;$P18 = 5+12 ?>
                
<?php $P19 = 1+18 ;$P20 = 3+18 ;$P21 = 2+18 ;$P22 = 6+18 ;$P23 = 4+18 ;$P24 = 5+18 ?>
                
<?php $N1 = "A1" ;$N2 = "A3" ;$N3 = "A2" ;$N4 = "A6" ;$N5 = "A4" ;$N6 = "A5" ?>
                
<?php $N7 = "B1" ;$N8 = "B3" ;$N9 = "B2" ;$N10 = "B6" ;$N11 = "B4" ;$N12 = "B5" ?>
                
<?php $N13 = "C1" ;$N14 = "C3" ;$N15 = "C2" ;$N16 = "C6" ;$N17 = "C4" ;$N18 = "C5" ?>
                
<?php $N19 = "D1" ;$N20 = "D3" ;$N21 = "D2" ;$N22 = "D6" ;$N23 = "D4" ;$N24 = "D5" ;endif ;if ($kolo->nazev == "5. kolo"): $nazevkola = "5. kolo" ;$P1 = 1 ;$P2 = 2 ;$P3 = 3 ;$P4 = 5 ;$P5 = 4 ;$P6 = 6 ?>
                
<?php $P7 = 1+6 ;$P8 = 2+6 ;$P9 = 3+6 ;$P10 = 5+6 ;$P11 = 4+6 ;$P12 = 6+6 ?>
                
<?php $P13 = 1+12 ;$P14 = 2+12 ;$P15 = 3+12 ;$P16 = 5+12 ;$P17 = 4+12 ;$P18 = 6+12 ?>
                
<?php $P19 = 1+18 ;$P20 = 2+18 ;$P21 = 3+18 ;$P22 = 5+18 ;$P23 = 4+18 ;$P24 = 6+18 ?>
                
<?php $N1 = "A1" ;$N2 = "A2" ;$N3 = "A3" ;$N4 = "A5" ;$N5 = "A4" ;$N6 = "A6" ?>
                
<?php $N7 = "B1" ;$N8 = "B2" ;$N9 = "B3" ;$N10 = "B5" ;$N11 = "B4" ;$N12 = "B6" ?>
                
<?php $N13 = "C1" ;$N14 = "C2" ;$N15 = "C3" ;$N16 = "C5" ;$N17 = "C4" ;$N18 = "C6" ?>
                
<?php $N19 = "D1" ;$N20 = "D2" ;$N21 = "D3" ;$N22 = "D5" ;$N23 = "D4" ;$N24 = "D6" ;endif ;if ($kolo->nazev == "6. kolo"): $nazevkola = "6. kolo" ;$P1 = 6 ;$P2 = 1 ;$P3 = 5 ;$P4 = 2 ;$P5 = 4 ;$P6 = 3 ?>
                
<?php $P7 = 6+6 ;$P8 = 1+6 ;$P9 = 5+6 ;$P10 = 2+6 ;$P11 = 4+6 ;$P12 = 3+6 ?>
                
<?php $P13 = 6+12 ;$P14 = 1+12 ;$P15 = 5+12 ;$P16 = 2+12 ;$P17 = 4+12 ;$P18 = 3+12 ?>
                
<?php $P19 = 6+18 ;$P20 = 1+18 ;$P21 = 5+18 ;$P22 = 2+18 ;$P23 = 4+18 ;$P24 = 3+18 ?>
                
<?php $N1 = "A6" ;$N2 = "A1" ;$N3 = "A5" ;$N4 = "A2" ;$N5 = "A4" ;$N6 = "A3" ?>
                
<?php $N7 = "B6" ;$N8 = "B1" ;$N9 = "B5" ;$N10 = "B2" ;$N11 = "B4" ;$N12 = "B3" ?>
                
<?php $N13 = "C6" ;$N14 = "C1" ;$N15 = "C5" ;$N16 = "C2" ;$N17 = "C4" ;$N18 = "C3" ?>
                
<?php $N19 = "D6" ;$N20 = "D1" ;$N21 = "D5" ;$N22 = "D2" ;$N23 = "D4" ;$N24 = "D3" ;endif ;if ($kolo->nazev == "7. kolo"): $nazevkola = "7. kolo" ;$P1 = 5 ;$P2 = 1 ;$P3 = 4 ;$P4 = 2 ;$P5 = 6 ;$P6 = 3 ?>
                
<?php $P7 = 5+6 ;$P8 = 1+6 ;$P9 = 4+6 ;$P10 = 2+6 ;$P11 = 6+6 ;$P12 = 3+6 ?>
                
<?php $P13 = 5+12 ;$P14 = 1+12 ;$P15 = 4+12 ;$P16 = 2+12 ;$P17 = 6+12 ;$P18 = 3+12 ?>
                
<?php $P19 = 5+18 ;$P20 = 1+18 ;$P21 = 4+18 ;$P22 = 2+18 ;$P23 = 6+18 ;$P24 = 3+18 ?>
                
<?php $N1 = "A5" ;$N2 = "A1" ;$N3 = "A4" ;$N4 = "A2" ;$N5 = "A6" ;$N6 = "A3" ?>
                
<?php $N7 = "B5" ;$N8 = "B1" ;$N9 = "B4" ;$N10 = "B2" ;$N11 = "B6" ;$N12 = "B3" ?>
                
<?php $N13 = "C5" ;$N14 = "C1" ;$N15 = "C4" ;$N16 = "C2" ;$N17 = "C6" ;$N18 = "C3" ?>
                
<?php $N19 = "D5" ;$N20 = "D1" ;$N21 = "D4" ;$N22 = "D2" ;$N23 = "D6" ;$N24 = "D3" ;endif ;if ($kolo->nazev == "8. kolo"): $nazevkola = "8. kolo" ;$P1 = 4 ;$P2 = 1 ;$P3 = 3 ;$P4 = 2 ;$P5 = 6 ;$P6 = 5 ?>
                
<?php $P7 = 4+6 ;$P8 = 1+6 ;$P9 = 3+6 ;$P10 = 2+6 ;$P11 = 6+6 ;$P12 = 5+6 ?>
                
<?php $P13 = 4+12 ;$P14 = 1+12 ;$P15 = 3+12 ;$P16 = 2+12 ;$P17 = 6+12 ;$P18 = 5+12 ?>
                
<?php $P19 = 4+18 ;$P20 = 1+18 ;$P21 = 3+18 ;$P22 = 2+18 ;$P23 = 6+18 ;$P24 = 5+18 ?>
                
<?php $N1 = "A4" ;$N2 = "A1" ;$N3 = "A3" ;$N4 = "A2" ;$N5 = "A6" ;$N6 = "A5" ?>
                
<?php $N7 = "B4" ;$N8 = "B1" ;$N9 = "B3" ;$N10 = "B2" ;$N11 = "B6" ;$N12 = "B5" ?>
                
<?php $N13 = "C4" ;$N14 = "C1" ;$N15 = "C3" ;$N16 = "C2" ;$N17 = "C6" ;$N18 = "C5" ?>
                
<?php $N19 = "D4" ;$N20 = "D1" ;$N21 = "D3" ;$N22 = "D2" ;$N23 = "D6" ;$N24 = "D5" ;endif ;if ($kolo->nazev == "9. kolo"): $nazevkola = "9. kolo" ;$P1 = 3 ;$P2 = 1 ;$P3 = 6 ;$P4 = 2 ;$P5 = 5 ;$P6 = 4 ?>
                
<?php $P7 = 3+6 ;$P8 = 1+6 ;$P9 = 6+6 ;$P10 = 2+6 ;$P11 = 5+6 ;$P12 = 4+6 ?>
                
<?php $P13 = 3+12 ;$P14 = 1+12 ;$P15 = 6+12 ;$P16 = 2+12 ;$P17 = 5+12 ;$P18 = 4+12 ?>
                
<?php $P19 = 3+18 ;$P20 = 1+18 ;$P21 = 6+18 ;$P22 = 2+18 ;$P23 = 5+18 ;$P24 = 4+18 ?>
                
<?php $N1 = "A3" ;$N2 = "A1" ;$N3 = "A6" ;$N4 = "A2" ;$N5 = "A5" ;$N6 = "A4" ?>
                
<?php $N7 = "B3" ;$N8 = "B1" ;$N9 = "B6" ;$N10 = "B2" ;$N11 = "B5" ;$N12 = "B4" ?>
                
<?php $N13 = "C3" ;$N14 = "C1" ;$N15 = "C6" ;$N16 = "C2" ;$N17 = "C5" ;$N18 = "C4" ?>
                
<?php $N19 = "D3" ;$N20 = "D1" ;$N21 = "D6" ;$N22 = "D2" ;$N23 = "D5" ;$N24 = "D4" ;endif ;if ($kolo->nazev == "10. kolo"): $nazevkola = "10. kolo" ;$P1 = 2 ;$P2 = 1 ;$P3 = 5 ;$P4 = 3 ;$P5 = 6 ;$P6 = 4 ?>
                
<?php $P7 = 2+6 ;$P8 = 1+6 ;$P9 = 5+6 ;$P10 = 3+6 ;$P11 = 6+6 ;$P12 = 4+6 ?>
                
<?php $P13 = 2+12 ;$P14 = 1+12 ;$P15 = 5+12 ;$P16 = 3+12 ;$P17 = 6+12 ;$P18 = 4+12 ?>
                
<?php $P19 = 2+18 ;$P20 = 1+18 ;$P21 = 5+18 ;$P22 = 3+18 ;$P23 = 6+18 ;$P24 = 4+18 ?>
                
<?php $N1 = "A2" ;$N2 = "A1" ;$N3 = "A5" ;$N4 = "A3" ;$N5 = "A6" ;$N6 = "A4" ?>
                
<?php $N7 = "B2" ;$N8 = "B1" ;$N9 = "B5" ;$N10 = "B3" ;$N11 = "B6" ;$N12 = "B4" ?>
                
<?php $N13 = "C2" ;$N14 = "C1" ;$N15 = "C5" ;$N16 = "C3" ;$N17 = "C6" ;$N18 = "C4" ?>
                
<?php $N19 = "D2" ;$N20 = "D1" ;$N21 = "D5" ;$N22 = "D3" ;$N23 = "D6" ;$N24 = "D4" ;endif ?>
            
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P1): ?>
<tr class="rozpis"><td><?php echo Nette\Templating\Helpers::escapeHtml($N1, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($N2, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P2): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P1 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $a1+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a1, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P2 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $a6+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a6, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P3): ?>
<tr class="rozpis"><td><?php echo Nette\Templating\Helpers::escapeHtml($N3, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($N4, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P4): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P3 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $a2+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a2, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P4 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $a5+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a5, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P5): ?>
<tr class="rozpis"><td><?php echo Nette\Templating\Helpers::escapeHtml($N5, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($N6, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P6): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P5 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $a3+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a3, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P6 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $a4+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($a4, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P7): ?>
<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($N7, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($N8, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P8): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P7 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $b1+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b1, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P8 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $b6+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b6, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P9): ?>
<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($N9, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($N10, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P10): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P9 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $b2+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b2, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P10 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $b5+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b5, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P11): ?>
<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($N11, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($N12, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P12): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P11 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $b3+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b3, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P12 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $b4+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($b4, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P13): ?>
<tr class="rozpis"><td><?php echo Nette\Templating\Helpers::escapeHtml($N13, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($N14, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P14): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P13 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $c1+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c1, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P14 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $c+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c6, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P15): ?>
<tr class="rozpis"><td><?php echo Nette\Templating\Helpers::escapeHtml($N15, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($N16, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P16): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P15 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $c2+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c2, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P16 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $c5+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c5, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P17): ?>
<tr class="rozpis"><td><?php echo Nette\Templating\Helpers::escapeHtml($N17, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($N18, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P18): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P17 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $c3+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c3, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P18 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $c4+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($c4, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P19): ?>
<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($N19, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($N20, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P20): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P19 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $d1+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d1, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P20 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $d+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d6, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P21): ?>
<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($N21, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($N22, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P22): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P21 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $d2+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d2, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P22 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $d5+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d5, ENT_NOQUOTES) ?></td></tr>
<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P23): ?>
<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($N23, ENT_NOQUOTES) ?></td><td><?php echo Nette\Templating\Helpers::escapeHtml($N24, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($uzivatele as $uzivatel): if ($uzivatel->id_skupiny == $P24): ?>
<td><?php echo Nette\Templating\Helpers::escapeHtml($uzivatel->nick, ENT_NOQUOTES) ?>
</td><?php endif ;$iterations++; endforeach ?>

<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P23 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
 <?php $d3+=1 ;endif ;$iterations++; endforeach ?><td><?php echo Nette\Templating\Helpers::escapeHtml($d3, ENT_NOQUOTES) ?></td><td>:</td>
<?php $iterations = 0; foreach ($tipy as $tip): if (($tip->tip == $tip->vysledek) AND $tip->uzivatele_id == $P24 AND $tip->zapasy->kola->nazev == $nazevkola): ?>
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