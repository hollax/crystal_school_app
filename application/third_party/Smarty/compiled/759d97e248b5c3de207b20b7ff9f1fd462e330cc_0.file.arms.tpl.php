<?php /* Smarty version 3.1.27, created on 2017-02-01 16:49:54
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\school\arms.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13506589203a247f241_90379830%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '759d97e248b5c3de207b20b7ff9f1fd462e330cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\school\\arms.tpl',
      1 => 1485964172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13506589203a247f241_90379830',
  'variables' => 
  array (
    'school_arms' => 0,
    'arm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589203a31f3a91_65684552',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589203a31f3a91_65684552')) {
function content_589203a31f3a91_65684552 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13506589203a247f241_90379830';
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
        <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['school_arms']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['arm'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['arm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arm']->value) {
$_smarty_tpl->tpl_vars['arm']->_loop = true;
$foreach_arm_Sav = $_smarty_tpl->tpl_vars['arm'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['arm']->value->name;?>
 </td>
                        <td>
                            <a href="<?php echo site_url("school/edit_arm/".((string)$_smarty_tpl->tpl_vars['arm']->value->schoolarm_id));?>
"
                               class="btn-form-modal btn btn-default"
                               data-url="<?php echo site_url("school/edit_arm/".((string)$_smarty_tpl->tpl_vars['arm']->value->schoolarm_id));?>
"
                               
                               >Edit</a>
                            <a href="<?php echo site_url("school/delete_arm/".((string)$_smarty_tpl->tpl_vars['arm']->value->schoolarm_id));?>
"  
                               class="btn btn-danger"
                               >Delete</a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['arm'] = $foreach_arm_Sav;
}
?>
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
               
            </div>
           
            <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
        </form>
    </div>
</div><?php }
}
?>