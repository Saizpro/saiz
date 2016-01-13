<?php /* Smarty version Smarty-3.1.19, created on 2015-12-15 11:27:29
         compiled from "C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25971566feb1120ffb7-69686831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f41a793ebc57b789a622744d24ab3b072d074166' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1450175050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25971566feb1120ffb7-69686831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566feb11213e32_08765165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566feb11213e32_08765165')) {function content_566feb11213e32_08765165($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
