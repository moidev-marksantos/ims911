<?php /* Smarty version Smarty-3.1.7, created on 2021-03-19 08:33:04
         compiled from "/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/HelpDesk/Print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152654323260503daf3082d8-51690905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0590b65f093429c2291275f82e60f9be5280350c' => 
    array (
      0 => '/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/HelpDesk/Print.tpl',
      1 => 1616142224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152654323260503daf3082d8-51690905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60503daf31b52',
  'variables' => 
  array (
    'TICKET_DETAILS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60503daf31b52')) {function content_60503daf31b52($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/radifjev/bayan911.com/sbmademo/libraries/Smarty/libs/plugins/modifier.date_format.php';
?><html>

<head>
    <title>Incident Report | <?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['title'];?>
</title>
    <link REL="SHORTCUT ICON" HREF="favicon.png">
</head>
<!-- onLoad="JavaScript:window.print()" -->
<style>
    body {
        font-family: 'OpenSans-Regular', sans-serif;
        font-size: 12px;
        font-weight: normal;
        font-style: normal;
        font-kerning: normal;
        color: #000;
        text-align: left;
    }
</style>

<body onLoad="JavaScript:window.print()">
    <table style="width: 100%;">
        <tr>
            <td style="text-align: left;"><img src="https://bayan911.com/sbmademo/test/logo/sbma_logo_standard.png" style="width: 100px;"></td>
            <td style="text-align: left;">
                Republic of the Philippines <br>
                Province of Zambales <br>
                City of Subic <br>
                Subic Bay Metropolitan Authority
            </td>
        </tr>
    </table>
    <br>
    <div style="border-top: 3px solid #1e4d7e;"></div>
    <h1 style="text-align:center;">TICKET REPORT</h1>
    <div style="width: 100%; display:flex;">
        <div style="width: 100%;">
            <table style="width: 100%;">
                <tr>
                    <td><b>REPORTED BY:</b></td>
                    <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['reported_by'];?>
</td>
                    <td><b>DATE REPORTED:</b></td>
                    <td style="text-align: left;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['createdtime'],"%B %e, %Y %I:%M %p");?>
</td>
                </tr>
                <tr>
                    <td><b>REPORTED TO:</b></td>
                    <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['reported_to'];?>
</td>
                    <td><b>TICKET NO:</b></td>
                    <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['ticket_no'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div style="background-color: #1e4d7e; color: #fff;">
        <h3 style="text-align: center; padding-top:5px; padding-bottom: 5px;">TICKET INFORMATION</h3>
    </div>
    <div style="width: 100%; display:flex;">
        <div style="width: 100%;">
            <table style="width: 100%;">
                <tr>
                    <td><b>CATEGORY</b></td>
                    <td>:</td>
                    <td style="text-align: left;"> <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['incidenttype'], 'UTF-8');?>
</td>
                </tr>
                <tr></tr>
                <tr>
                    <td><b>DATE INCIDENT</b></td>
                    <td>:</td>
                    <td style="text-align: left;"><?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['createdtime'],"%B %e, %Y %I:%M %p"), 'UTF-8');?>
</td>
                </tr>
                <tr></tr>
                <tr>
                    <td><b>LOCATION</b></td>
                    <td>:</td>
                    <td style="text-align: left; text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['location'];?>
</td>
                </tr>
                <tr></tr>
                <tr>
                    <td><b>NEAREST LANDMARK</b></td>
                    <td>:</td>
                    <td style="text-align: left;"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['nearest_landmark'], 'UTF-8');?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div style="width: 100%; display:flex;">
        <div style="width: 100%;">
            <table style="width: 100%;">
                <tr>
                    <td><b>DESCRIPTION:</b></td>
                </tr>
                <tr></tr>
                <tr>
                    <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['description'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <br />
</body>

</html><?php }} ?>