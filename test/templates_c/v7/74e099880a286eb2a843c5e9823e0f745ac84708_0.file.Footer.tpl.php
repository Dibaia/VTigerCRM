<?php
/* Smarty version 4.5.3, created on 2024-07-21 09:26:29
  from '/var/www/html/vtigercrm82/layouts/v7/modules/Vtiger/Footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
  'version' => '4.5.3',
  'unifunc' => 'content_669cd4457ccb04_26335214',
  'has_nocache_code' => false,
  'file_dependency' =>
  array(
    '74e099880a286eb2a843c5e9823e0f745ac84708' =>
    array(
      0 => '/var/www/html/vtigercrm82/layouts/v7/modules/Vtiger/Footer.tpl',
      1 => 1721553536,
      2 => 'file',
    ),
  ),
  'includes' =>
  array(
  ),
), false)) {
    function content_669cd4457ccb04_26335214(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<footer class="app-footer">
	<p>
		Powered by Kadira CRM - <?php echo $_smarty_tpl->tpl_vars['VTIGER_VERSION']->value;?>
&nbsp;&nbsp;© 2004 - <?php echo date('Y');?>
&nbsp;&nbsp;
		<a href="//www.vtiger.com" target="_blank">Vtiger</a>&nbsp;|&nbsp;
		<a href="https://www.vtiger.com/privacy-policy" target="_blank">Privacy Policy</a>
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div id="maxListFieldsSelectionSize" class="hide noprint"><?php echo $_smarty_tpl->tpl_vars['MAX_LISTFIELDS_SELECTION_SIZE']->value;?>
</div>
<div class="modal myModal fade"></div>
<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'JSResources.tpl' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
        ?>
</body>

</html>
<?php }
    }
