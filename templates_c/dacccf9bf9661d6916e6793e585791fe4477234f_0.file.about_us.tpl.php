<?php
/* Smarty version 3.1.33, created on 2019-06-11 03:54:04
  from 'C:\xampp\htdocs\smarty_site_lessons\templates\about_us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cff09bc1dacb3_85645503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacccf9bf9661d6916e6793e585791fe4477234f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons\\templates\\about_us.tpl',
      1 => 1560217931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./menus/about_us.html' => 1,
    'file:body_down_base.tpl' => 1,
  ),
),false)) {
function content_5cff09bc1dacb3_85645503 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
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
