<?php //netteCache[01]000392a:2:{s:4:"time";s:21:"0.27158900 1367100972";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:70:"C:\wamp\www\eclipse\nette.sazkari2\sandbox\app\templates\@layout.latte";i:2;i:1367089826;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\wamp\www\eclipse\nette.sazkari2\sandbox\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'y2602a2rs8')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbeac56934de_title')) { function _lbeac56934de_title($_l, $_args) { extract($_args)
?>PolickaTipLiga<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb682e0ca568_head')) { function _lb682e0ca568_head($_l, $_args) { extract($_args)
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
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/tinymce/tinymce.runner.js"></script>

    <!-- Le styles -->
    <link href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/screen.css" type="text/css" />
    <link rel="stylesheet" media="print" href="<?php echo htmlSpecialChars($basePath) ?>/css/print.css" />
    <style type="text/css">
      body {
        padding-top: 41px;
        background-color: #5d654e;
        background-image: url('<?php echo Nette\Templating\Helpers::escapeCss($basePath) ?>/images/forweb/background_line.gif');
        background-repeat: repeat-x;
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

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"> 
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'menu', $template->getParameters()) ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TIP <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">Vyber soutěž</li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:tipy")) ?>">Tipuj</a></li>
                  <li class="nav-header">Pavouk</li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:pavoukplayoff")) ?>">Liga - play off</a></li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:pavoukpohar")) ?>">Pohár</a></li>
                  <li class="nav-header">Statistiky</li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:tabulkaligy")) ?>">Tabulka ligy</a></li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:rozpisliga")) ?>">Rozpis ligy</a></li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:statistika")) ?>">Statistika hráčů</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo htmlSpecialChars($_control->link("Sazkari:penezenka")) ?>">Peněženka</a></li>
                </ul>
              </li>
            </ul><div class="linebutton">
<?php if ($user->isLoggedIn()): ?>
                    <button type="button" onClick=parent.location='<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("Sign:out"), ENT_NOQUOTES) ?>' class="btn">Odhlásit se</button>
<?php else: ?>
                    <button type="button" onClick=parent.location='<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("Sign:in"), ENT_NOQUOTES) ?>' class="btn">Přihlásit se</button>
                    <button type="button" onClick=parent.location='<?php echo Nette\Templating\Helpers::escapeHtml($_control->link("Homepage:pridatUzivatele"), ENT_NOQUOTES) ?>' class="btn">Registrovat</button>
<?php endif ?>
              </div>
      </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    
      <headerline></headerline>
      <header></header>
      <content>
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
      </content>
      <footer>
        <h6>&copy; Sazkari 2013</h6>
      </footer>
      <footerline></footerline>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-button.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/bootstrap-typeahead.js"></script>

</body>
</html>
