<?php /* Smarty version Smarty-3.1.7, created on 2022-10-03 14:20:14
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/HelpDesk/Nueva.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1064053085619ee8b534dc30-91416304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f348264cb6843197acbaeae0264d513991abc59' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/HelpDesk/Nueva.tpl',
      1 => 1664777981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1064053085619ee8b534dc30-91416304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619ee8b53702c',
  'variables' => 
  array (
    'TICKET_DETAILS' => 0,
    'USER_MODEL' => 0,
    'DOCUMENT_LIST' => 0,
    'MEDIA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619ee8b53702c')) {function content_619ee8b53702c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/bayan911/libraries/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/opt/lampp/htdocs/bayan911/libraries/Smarty/libs/plugins/modifier.replace.php';
?><html>

<head>
    <title>INCIDENT SUMMARY REPORT | <?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['ticket_no'];?>
</title>
    <link REL="SHORTCUT ICON" HREF="favicon.png">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;           
            font-weight: normal;
            font-style: normal;
            font-kerning: normal;
            color: #000;
            text-align: left;
        }

        #reportdata {
            border-collapse: collapse;
            width: 100%;
            padding-top: 10px;
        }

        #reportdata td, #reportdata th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #reportdata th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #032e61;
            color: white;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body onLoad="JavaScript:window.print()">
    <table style="width: 100%;">
        <tr>
            <td style="text-align: left;"><img src="test/logo/Sbma_logo_standard_no_boarder.png" style="width: 110px;"></td>
            <td style="text-align: left;">
                <span style="font-weight: bold;"> Republic of the Philippines </span><br>
                <span style="text-transform: uppercase;font-weight: bold; font-size: large; font-family: Oswald,'OpenSans-Semibold', 'Helvetica Neue', Helvetica, sans-serif;">Subic Bay Metropolitan Authority</span><br>
                <span style="font-weight: bold;">Bldg. 229 Waterfront Road, Subic Bay Freeport Zone, Philippines.</span><br>                
                <span style="font-size: 11px;">SBMA 911 CONTACT CENTER</span><br>
				<span style="font-size: 11px;">Voice: +6347 252 4000 | Fax: +6347 252 4185 </span><br>
            </td>            
        </tr>
    </table>
    <br>
    <div style="border-top: 3px solid #032e61;"></div>
    <h2  style="text-align:center; font-weight:bold; font-size: 20px; margin-bottom: 10px; margin-top: 10px;">INCIDENT REPORT</h2>
    <div>
        <table style="width: 100%;" id="reportdata">
			<tr>
                <td><b>INCIDENT NO:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['ticket_no'], 'UTF-8');?>
</td>
            </tr>
            <tr>
                <td><b>INCIDENT TYPE:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['incidenttype'], 'UTF-8');?>
</td>
            </tr>
			<tr>
                <td><b>LOCATION:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['location'], 'UTF-8');?>
</td>
            </tr>
			<tr>
                <td><b>NEAREST LANDMARK:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['nearest_landmark'], 'UTF-8');?>
</td>
            </tr>
			<tr>
                <td><b>CALLER:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['reported_by'], 'UTF-8');?>
</td>
            </tr>
			<tr>
                <td><b>GENDER:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['gender'], 'UTF-8');?>
</td>
            </tr>
			<tr>
                <td><b>CONTACT NO:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['contact_no'], 'UTF-8');?>
</td>
            </tr>
			<tr>
                <td><b>DATE AND TIME:</b></td>                
				<td><?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['incidentdate'],"%m/%e/%Y"), 'UTF-8');?>
&nbsp;<?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['incidenttime'],"%H:%M"), 'UTF-8');?>
</td>
            </tr>
			<tr>
                <td><b>RECEIVED BY:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['reported_to'], 'UTF-8');?>
</td>
            </tr>
			<tr>
                <td><b>TIME RELAYED:</b></td>  
				<td><?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['createdtime'],"%m/%e/%Y"), 'UTF-8');?>
&nbsp;<?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['createdtime'],"%H:%M"), 'UTF-8');?>
</td>								
            </tr>
			<tr>
                <td><b>RELAYED TO:</b></td>                
				<td><?php echo smarty_modifier_replace(mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['dispatch_to'], 'UTF-8'),'|##|','<br>');?>
</td>
            </tr>
			<tr style="white-space:normal; ">
                <td><b>NARRATIVE/LOG MESSAGE:</b></td>                
				<td>
				<?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['description'];?>
 				
				<br><br>
				<?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['solution'];?>
				
				</td>
            </tr>
			<tr>
                <td><b>STATUS:</b></td>                
				<td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['status'], 'UTF-8');?>
</td>
            </tr>
        </table>
		<br>
		<br>
		<table style="width: 100%;">
			<tr>
				<td style="text-align: left;">PREPARED BY: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('first_name'), 'UTF-8');?>
&nbsp;<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('last_name'), 'UTF-8');?>
</td>
				<td style="text-align: right;">DATE PRINTED: <?php echo mb_strtoupper(smarty_modifier_date_format(time(),"%m/%e/%Y %H:%M"), 'UTF-8');?>
</td>				
			</tr>
		</table>
    </div>
    <br>
        <br>        
		<?php if (empty($_smarty_tpl->tpl_vars['DOCUMENT_LIST']->value)){?>
		<?php }else{ ?>
        <span style="font-size: 12px;"><b>MEDIA/S</b></span><br>
        <?php  $_smarty_tpl->tpl_vars['MEDIA'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MEDIA']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DOCUMENT_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MEDIA']->key => $_smarty_tpl->tpl_vars['MEDIA']->value){
$_smarty_tpl->tpl_vars['MEDIA']->_loop = true;
?>
            <img style="width: 300px; height: 300px; margin: 20px" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['attachmentsid'];?>
_<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
">
        <?php } ?>
		<?php }?>
</body>

</html><?php }} ?>