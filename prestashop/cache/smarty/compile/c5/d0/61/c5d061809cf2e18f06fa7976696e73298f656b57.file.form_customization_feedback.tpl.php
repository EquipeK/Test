<?php /* Smarty version Smarty-3.1.19, created on 2016-01-05 18:35:07
         compiled from "C:\wamp\www\prestashop_1.6.1.3_fr\prestashop\admin\themes\default\template\controllers\orders\form_customization_feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29471568bfecb2d7831-18323884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5d061809cf2e18f06fa7976696e73298f656b57' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop_1.6.1.3_fr\\prestashop\\admin\\themes\\default\\template\\controllers\\orders\\form_customization_feedback.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29471568bfecb2d7831-18323884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'customization_errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568bfecb3121c6_07615154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568bfecb3121c6_07615154')) {function content_568bfecb3121c6_07615154($_smarty_tpl) {?>
<html>
<head>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
		<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>
</head>
<body>
	<script type="text/javascript">
		var id_selected_product = parent.$('#id_product option:selected').val();

		parent.$('#products_err', window.parent.document).html('<?php echo $_smarty_tpl->tpl_vars['customization_errors']->value;?>
');
		parent.$('#id_product option[value="'+id_selected_product+'"]').attr('selected', true);
		parent.$('#id_product').change();

		<?php if ($_smarty_tpl->tpl_vars['customization_errors']->value) {?>
			parent.customization_errors = true;
		<?php } else { ?>
			parent.customization_errors = false;
		<?php }?>

		parent.customizationProductListener();
	</script>
	</body>
</html>
<?php }} ?>
