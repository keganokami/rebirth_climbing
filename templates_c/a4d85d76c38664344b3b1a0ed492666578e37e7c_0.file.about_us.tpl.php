<?php
/* Smarty version 3.1.30, created on 2019-06-10 20:03:38
  from "/home/users/0/moo.jp-corocoro/web/smarty_site_lessons/templates/about_us.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cfe390a51bd82_95512240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4d85d76c38664344b3b1a0ed492666578e37e7c' => 
    array (
      0 => '/home/users/0/moo.jp-corocoro/web/smarty_site_lessons/templates/about_us.tpl',
      1 => 1560159602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./menus/about_us.html' => 1,
    'file:body_down_base.tpl' => 1,
  ),
),false)) {
function content_5cfe390a51bd82_95512240 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Smarty about_us</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./menus/about_us.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    
<?php $_smarty_tpl->_subTemplateRender("file:body_down_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
