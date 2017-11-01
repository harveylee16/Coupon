<?php
/* Smarty version 3.1.30, created on 2017-11-01 04:24:23
  from "C:\xampp\htdocs\xxx\Coupon\site\templates\master.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f93e67b15ca3_20489329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e70a382cb45f37a22b26dcc4d4878d3837776f93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xxx\\Coupon\\site\\templates\\master.tpl',
      1 => 1509472444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f93e67b15ca3_20489329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1948259f93e679a7902_89017363', "head");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84359f93e67aaeca7_77605017', "content");
?>

</body>
</html><?php }
/* {block "head"} */
class Block_1948259f93e679a7902_89017363 extends Smarty_Internal_Block
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
class Block_84359f93e67aaeca7_77605017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
