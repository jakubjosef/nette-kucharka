<?php //netteCache[01]000381a:2:{s:4:"time";s:21:"0.29839700 1367755648";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"C:\wamp\www\nette\sandbox\app\templates\Sazkari\zapas.latte";i:2;i:1367755644;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\nette\sandbox\app\templates\Sazkari\zapas.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '0op7gdr7nf')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block menu
//
if (!function_exists($_l->blocks['menu'][] = '_lbddcc9f7400_menu')) { function _lbddcc9f7400_menu($_l, $_args) { extract($_args)
?>  <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Uvod</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Novinky:")) ?>">Aktuality</a></li>
  <li><a href="<?php echo htmlSpecialChars($_control->link("Rozpis:")) ?>">Rozpis</a></li>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lba4394ff49f_content')) { function _lba4394ff49f_content($_l, $_args) { extract($_args)
?>  <fieldset>
      <legend>Detail zápasu</legend>
      Datum: <?php echo Nette\Templating\Helpers::escapeHtml($template->date($zapas->datum, 'd.m.Y'), ENT_NOQUOTES) ?><br />
      Kolo: <?php echo Nette\Templating\Helpers::escapeHtml($zapas->kola->nazev, ENT_NOQUOTES) ?> <br />
      Sport: <?php echo Nette\Templating\Helpers::escapeHtml($zapas->sporty->nazev, ENT_NOQUOTES) ?><br />
       <div id="MatchPreview">
          <div class="matchLine">
<?php if ($zapas->domaci->logo!=""): ?>
                <img src="<?php echo htmlSpecialChars($baseUrl) ?>/images/teams/<?php echo htmlSpecialChars($zapas->domaci->logo) ?>" />
              <?php endif ?></br>
              <font size="6px"><?php echo Nette\Templating\Helpers::escapeHtml($zapas->domaci->nazev, ENT_NOQUOTES) ?></font> <br />
              Handicap: <?php echo Nette\Templating\Helpers::escapeHtml($zapas->handicap_domacich, ENT_NOQUOTES) ?>

          </div>
          <div class="matchLine">
              <br />
              &nbsp;<font size="4px">vs.</font>&nbsp;
              <br /><br />
<?php if ($tipped): ?>
                 Tipováno: <strong><?php if ($tip->tip==1): ?>Výhra domácích<?php elseif ($tip->tip==2): ?>
Výhra hostů<?php else: ?>Remíza<?php endif ?></strong>
<?php else: if ($today<$kolo->konec_kola): ?>
                  <a href="<?php echo htmlSpecialChars($_control->link("Sazkari:tipniZapas", array($zapas->id))) ?>" class="btn">Tipni zápas</a>
<?php endif ;endif ?>
          </div>
          <div class="matchLine">
              <img n-ifset="<?php echo htmlSpecialChars($zapas->hoste->logo) ?>" src="<?php echo htmlSpecialChars($baseUrl) ?>
/images/teams/<?php echo htmlSpecialChars($zapas->hoste->logo) ?>" /></br>
              <font size="6px"><?php echo Nette\Templating\Helpers::escapeHtml($zapas->hoste->nazev, ENT_NOQUOTES) ?></font> <br />
              Handicap: <?php echo Nette\Templating\Helpers::escapeHtml($zapas->handicap_hostu, ENT_NOQUOTES) ?>

          </div>
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