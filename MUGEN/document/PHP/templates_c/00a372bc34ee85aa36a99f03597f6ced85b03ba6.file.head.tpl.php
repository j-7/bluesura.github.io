<?php /* Smarty version Smarty-3.1.12, created on 2016-07-24 17:14:52
         compiled from "F:\bluesura\Dropbox\Public\www\mugen.github.io\MUGEN\document\Template\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311035794f78ca758a4-59740298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00a372bc34ee85aa36a99f03597f6ced85b03ba6' => 
    array (
      0 => 'F:\\bluesura\\Dropbox\\Public\\www\\mugen.github.io\\MUGEN\\document\\Template\\head.tpl',
      1 => 1469380387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311035794f78ca758a4-59740298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5794f78cb20c79_52964466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5794f78cb20c79_52964466')) {function content_5794f78cb20c79_52964466($_smarty_tpl) {?>  <meta charset="UTF-8" />
  <meta http-equiv="Content-Language" content="ja">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- （*´ω｀*）＜ソースコードを見るなんてえっちぃ人ですね！ -->

<?php if ($_smarty_tpl->tpl_vars['content']->value['page']['level']=="1"){?>
  <title>Name = sura</title>
<?php }elseif($_smarty_tpl->tpl_vars['content']->value['page']['level']=="2"){?>
  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['page_title'], ENT_QUOTES, 'ISO-8859-1', true);?>
 - Name = sura</title>
<?php }elseif($_smarty_tpl->tpl_vars['content']->value['page']['level']=="3"){?>
  <title><?php echo $_smarty_tpl->tpl_vars['content']->value['page_subtitle'];?>
 <?php if ($_smarty_tpl->tpl_vars['content']->value['page']['category'][1]){?>【<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['page']['category'][1], ENT_QUOTES, 'ISO-8859-1', true);?>
】 <?php }?>| <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['page_title'], ENT_QUOTES, 'ISO-8859-1', true);?>
 - Name = sura</title>
<?php }?>
  <link rel="fluid-icon" href="/media/img/icon-512x512.png" title="MUGEN">
  <link rel="shortcut icon" href="/media/img/favicon.png" type="image/png">
  <link rel="icon" sizes="128x128" href="/media/img/icon-128x128.png">
  <link rel="apple-touch-icon" sizes="128x128" href="/media/img/icon-128x128.png">
  <link rel="apple-touch-icon-precomposed" sizes="128x128" href="/media/img/icon-128x128.png">
  <link rel="icon" sizes="192x192" href="/media/img/icon-192x192.png">
  <meta name="msapplication-TileImage" content="/media/img/icon-512x512.png">

  <link rel="mask-icon" href="/media/img/infinite-M.svg" color="#1E88E5">
  <link rel="icon" type="image/x-icon" href="/media/img/favicon.png">

  <!-- 「チェス盤を引っくり返す！」 -->
  <meta name="theme-color" content="#1E88E5">
  <meta name="msapplication-TileColor" content="#1E88E5">
  <meta name="robots" content="INDEX,FOLLOW" />
  <meta name="viewport" content="width=device-width" />
  <meta name="author" content="sura" />
  <meta name="generator" content="Smarty" />
  <meta name="description" content="" />
  <meta name="keywords" content="MUGEN, M.U.G.E.N, むげん, 無限, 夢幻" />
  <meta name="mobile-web-app-capable" content="yes">
  <!-- 「駄目ね、全然駄目だわ」 -->



  <link rel="author" title="sura" href="https://twitter.com/bluesura" />
  <link href="https://github.com/bluesura/bluesura.github.io/commits/master.atom" rel="alternate" title="ATOM" type="application/atom+xml" />

  <link rel="stylesheet" href="/lib/css/material.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  <script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="/lib/js/code.min.js"></script>
  <script type="text/javascript" src="/lib/js/js-ctrl.js"></script>
  <script type="text/javascript" src="/lib/js/jquery.touchSwipe.min.js"></script>
  <script type="text/javascript" src="/lib/js/isMobile.min.js"></script>
<?php }} ?>