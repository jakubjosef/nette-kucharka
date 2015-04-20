<?php //netteCache[01]000396a:2:{s:4:"time";s:21:"0.61103200 1367783345";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\@layoutAdmin.latte";i:2;i:1367218648;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari\sandbox\app\templates\@layoutAdmin.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 't2verx88zr')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbdff15b77cd_title')) { function _lbdff15b77cd_title($_l, $_args) { extract($_args)
?>PolickaTipLiga<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb880eb5a5e9_head')) { function _lb880eb5a5e9_head($_l, $_args) { extract($_args)
;
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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->strip($template->striptags(ob_get_clean()))  ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
<?php if (isset($robots)): ?>    <meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/tinymce/jquery.tinymce.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/tinymce/tinymce.runner.js"></script>
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/sazkari.js"></script>
    
    <!-- Le styles -->
    <link href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/screen.css" type="text/css" />
    <link rel="stylesheet" media="print" href="<?php echo htmlSpecialChars($basePath) ?>/css/print.css" />
    <style type="text/css">
      body {
          padding: 5px;
      }
      menu1{
          width: 250px;
          height: 500px;
          float: left;
          display: block;
      }
      content1{
          margin-left: 5px;
          width: 500px;
          height: 500px;
          float: left;
          display: block;
      }
      ul li {
         list-style-type: none;
         
      }
      .odhlasit{
          float: right;
      }
      
      
    </style>
    <link href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo htmlSpecialChars($basePath) ?>/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo htmlSpecialChars($basePath) ?>/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo htmlSpecialChars($basePath) ?>/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo htmlSpecialChars($basePath) ?>/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />
  
    <?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>
    <div class="container">
        <a class="odhlasit" href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Zpět na web</a><span class="odhlasit">&nbsp;|&nbsp;</span>
<?php if ($user->isLoggedIn()): ?>
              <a class="odhlasit" href="<?php echo htmlSpecialChars($_control->link("Admin:odhlasitUzivatele")) ?>">Odhlásit se</a>
<?php else: ?>
            <a class="odhlasit" href="<?php echo htmlSpecialChars($_control->link("Admin:prihlasitUzivatele")) ?>">Přihlásit se</a>
<?php endif ?>
        <h1>Administrativní část</h1>
      <menu1>
              <fieldset>
                  <legend>Stránka</legend>
                    <ul>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:uvod")) ?>">Uvodní strana</a></li>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:novinky")) ?>">Novinky</a></li>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:rozpis")) ?>">Rozpis</a></li>
                    </ul>
              </fieldset>
              <fieldset>
                  <legend>Soutež</legend>
                    <ul>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:tymy")) ?>">Týmy</a></li>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:zapasy")) ?>">Zápasy</a></li>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:kola")) ?>">Kola</a></li>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:liga")) ?>">Liga</a></li>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:pohar")) ?>">Pohar</a></li>
                        <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:penezenka")) ?>">Penezenka</a></li>
                        
                    </ul>
              </fieldset>
      </menu1>
      <content1>
<?php $iterations = 0; foreach ($flashes as $flash): ?>
        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ;Nette\Latte\Macros\UIMacros::callBlock($_l, 'content1', $template->getParameters()) ?>
        
      </content1>

    </div>
   

</body>
</html>
