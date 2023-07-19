<?php /* Smarty version Smarty-3.1.7, created on 2021-05-31 07:30:02
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\Reports\PrintReport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136696643260b49011c5a0b9-56999535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddf23edd63d57c8f44f58dab13e39a8a85936ae7' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\Reports\\PrintReport.tpl',
      1 => 1622446198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136696643260b49011c5a0b9-56999535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60b49011cb3bb',
  'variables' => 
  array (
    'TICKET_DETAILS' => 0,
    'REPORT_NAME' => 0,
    'PRINT_DATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b49011cb3bb')) {function content_60b49011cb3bb($_smarty_tpl) {?>
<html>

<head>
    <title>Incident Report | <?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['title'];?>
</title>
    <link REL="SHORTCUT ICON" HREF="favicon.png">

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
</head>

<body onLoad="JavaScript:window.print()">
    <table style="width: 100%;">
        <tr>
            <td style="text-align: left;"><img src="https://bayan911.com/sbmademo/test/logo/sbma_logo_standard.png"
                    style="width: 100px;"></td>
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
    <h1 style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['REPORT_NAME']->value;?>
</h1>

    <table width="100%" border="0" cellpadding="5" cellspacing="0" align="left">
        <tr>
            <td style="border:0px solid #000000;" colspan="2">
                <table width="100%" border="0" cellpadding="5" cellspacing="0" align="left"
                    class="printReport reportPrintData">
                    <?php echo $_smarty_tpl->tpl_vars['PRINT_DATA']->value;?>

                </table>
            </td>
        </tr>
    </table>
</body>

</html><?php }} ?>