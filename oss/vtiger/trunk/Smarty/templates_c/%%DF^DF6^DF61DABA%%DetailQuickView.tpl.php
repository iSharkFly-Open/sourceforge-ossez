<?php /* Smarty version 2.6.18, created on 2010-04-20 23:28:04
         compiled from modules/Tooltip/DetailQuickView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'vtiger_imageurl', 'modules/Tooltip/DetailQuickView.tpl', 5, false),)), $this); ?>
<script language="JavaScript" type="text/javascript" src="modules/Tooltip/TooltipSettings.js"></script>
<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="98%">
<tbody><tr>
	<td valign="top"><img src="<?php echo vtiger_imageurl('showPanelTopLeft.gif', $this->_tpl_vars['THEME']); ?>
"></td>
	<td valign="top" width="100%">
	<div align=center>
		<table border=0 cellspacing=0 cellpadding=5 width=100% class="settingsSelUITopLine">
		</table>
		
		<table border=0 cellspacing=0 cellpadding=5 width=100% class="tableHeading">
		<tr>
			<td class="small" align=right width="100%">
				<input title="edit" class="crmButton small edit" type="button" name="edit" onClick="displayEditView(<?php echo $this->_tpl_vars['FIELDID']; ?>
);" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON']; ?>
">
			</td>
		</tr>
		</table>
		
		<div id="<?php echo $this->_tpl_vars['module']; ?>
_fields" style="display:block">	
	 	<table cellspacing=0 cellpadding=5 width=100% class="listTable small">
			<tr>
        	<td valign=top width="25%" >
        	<?php if ($this->_tpl_vars['COUNT'] == 0): ?>
        		No Fields Selected.
        		</td>
        	<?php else: ?>
				<?php $_from = $this->_tpl_vars['LABELS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['itr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['itr']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label']):
        $this->_foreach['itr']['iteration']++;
?>
					<?php $this->assign('count', $this->_foreach['itr']['iteration']); ?>
					<table border=0 cellspacing=0 cellpadding=5 width=100% class=small>
						<tr>
							<td width="25%" onMouseOver="this.className='prvPrfHoverOn';" onMouseOut="this.className='prvPrfHoverOff';">
								<table cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<img src="<?php echo vtiger_imageurl('prvPrfSelectedTick.gif', $this->_tpl_vars['THEME']); ?>
">
										&nbsp;
									</td>
									<td>
										<?php echo $this->_tpl_vars['label']; ?>

									</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					</td>
					<td>
					<?php if ($this->_tpl_vars['count'] % 4 == 0): ?>
						</td></tr><tr><td>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
			</td>
	        </tr>
        </table>
		</div>
		</form>
		</div>
	</td>
	<td valign="top">
		<img src="<?php echo vtiger_imageurl('showPanelTopRight.gif', $this->_tpl_vars['THEME']); ?>
">
	</td>
	</tr>
</tbody>
</table>