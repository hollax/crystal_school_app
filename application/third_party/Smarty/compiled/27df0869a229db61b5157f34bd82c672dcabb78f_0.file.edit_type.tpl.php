<?php /* Smarty version 3.1.27, created on 2017-02-01 18:46:47
         compiled from "C:\xampp\htdocs\crystal_school_app\application\views\expenses\edit_type.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:358858921f079c31a7_76262488%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27df0869a229db61b5157f34bd82c672dcabb78f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crystal_school_app\\application\\views\\expenses\\edit_type.tpl',
      1 => 1485971201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358858921f079c31a7_76262488',
  'variables' => 
  array (
    'expense_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58921f07a1b0b0_32402794',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58921f07a1b0b0_32402794')) {
function content_58921f07a1b0b0_32402794 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '358858921f079c31a7_76262488';
?>
 
<form method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="expensestype_name" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['expense_type']->value->expensestype_name;?>
">
    </div>
    <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
</form>
<?php }
}
?>