<?php /* Smarty version Smarty-3.1.12, created on 2017-08-05 09:26:38
         compiled from "D:\Dropbox\Public\www\mugen.github.io\MUGEN\document\Template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4931056735985732e750194-86372374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046548a6689e958d2d57c692163590b943790566' => 
    array (
      0 => 'D:\\Dropbox\\Public\\www\\mugen.github.io\\MUGEN\\document\\Template\\header.tpl',
      1 => 1501917983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4931056735985732e750194-86372374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5985732e778836_18317679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5985732e778836_18317679')) {function content_5985732e778836_18317679($_smarty_tpl) {?><header id="blog-title" class="header">
	<div id="blog-title-inner">

		<div id="blog-title-content">
			<h1 id="title"><a href="./">
				<?php if ($_smarty_tpl->tpl_vars['content']->value['page_title']==''){?><?php echo $_smarty_tpl->tpl_vars['content']->value['site_name'];?>
<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['content']->value['page_title'];?>

			</a></h1>

			<div id="blog-description"><div class="notice">MUGENで良いキャラを作るポイントは…　<span title="小技とかメモの書き方とか色々参考になります。">「良いキャラのソースコードを読む」</span>-><span title="コピーすることは悪いことじゃない。良いコードを手際よく使いまわすのはいいプログラマーの証。">「コピペ」</span>-><span title="解らなければ掲示板で相談！">「記述を理解」</span>-><span title="その記述が絶対にいいわけではない。車輪の再発明。">「自分でアレンジ」</span></div></div>
		</div>
	</div>
  <div id="menu"><a href="javascript:void(0);" id="js-ctrl"<i class="fa fa-bars"></i></a></div>
</header><?php }} ?>