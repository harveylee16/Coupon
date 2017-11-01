<?php
/* Smarty version 3.1.30, created on 2017-11-01 02:53:56
  from "C:\xampp\htdocs\Coupon\site\templates\master.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f929349603b7_00842642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5064deaae2dc457a6f97394a44a1b0b47f9d63f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Coupon\\site\\templates\\master.tpl',
      1 => 1509472442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f929349603b7_00842642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295659f92934950f95_38036864', "head");
?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">PRODUCT</a></li>
        <li><a href="#">COUPON</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1710959f929349589a3_55701138', "content");
?>

</body>
</html><?php }
/* {block "head"} */
class Block_295659f92934950f95_38036864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" type="" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="public/css/stylelogin.css">
    
    <?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1710959f929349589a3_55701138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
