<?php /* Smarty version 3.1.27, created on 2017-01-22 21:38:22
         compiled from "C:\xampp\htdocs\nyra_cms\application\views\themes\crystalhills\partials\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:220755885c0fe720512_19375953%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '743d7b604b4caec212e1e88f07eb6b49a6553d2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\views\\themes\\crystalhills\\partials\\header.tpl',
      1 => 1485160490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220755885c0fe720512_19375953',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5885c0fe7344b1_41037394',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5885c0fe7344b1_41037394')) {
function content_5885c0fe7344b1_41037394 ($_smarty_tpl) {
if (!is_callable('smarty_function_page_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.page_title.php';
if (!is_callable('smarty_function_meta_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.meta_tags.php';
if (!is_callable('smarty_function_link_tags')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.link_tags.php';
if (!is_callable('smarty_function_header_style_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_style_hooks.php';
if (!is_callable('smarty_function_header_script_hooks')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.header_script_hooks.php';

$_smarty_tpl->properties['nocache_hash'] = '220755885c0fe720512_19375953';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom styles for this template -->
    <title><?php echo smarty_function_page_title(array(),$_smarty_tpl);?>
</title>   
    <?php echo smarty_function_meta_tags(array(),$_smarty_tpl);?>

    <?php echo smarty_function_link_tags(array(),$_smarty_tpl);?>

    <?php echo smarty_function_header_style_hooks(array(),$_smarty_tpl);?>
  
    <?php echo smarty_function_header_script_hooks(array(),$_smarty_tpl);?>
  	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]--><?php }
}
?>