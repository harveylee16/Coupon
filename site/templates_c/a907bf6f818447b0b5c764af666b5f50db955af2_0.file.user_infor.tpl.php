<?php
/* Smarty version 3.1.30, created on 2017-11-01 05:05:45
  from "C:\xampp\htdocs\Coupon_new\site\templates\user_infor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f9481927cf48_73934113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a907bf6f818447b0b5c764af666b5f50db955af2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Coupon_new\\site\\templates\\user_infor.tpl',
      1 => 1509462880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:master.tpl' => 1,
  ),
),false)) {
function content_59f9481927cf48_73934113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205059f94819275531_82496921', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_205059f94819275531_82496921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['str']->value != null) {?>
        <p class="main-center" ><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</p>
    <?php }?>
    <div class="row main">
        <div class="main-login main-center">
            <h3>CUSTOMER INFORMATION</h3>
            <form class="" method="post" action="index.php?c=user&a=bill" name="">

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="cols-sm-2 control-label">Your Address</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="address" id="address"  placeholder="Enter your address"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="coupon" class="cols-sm-2 control-label">ID Coupon</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="coupon" id="coupon"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="VERIFY">
                </div>

            </form>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
