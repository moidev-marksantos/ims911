<?php /* Smarty version Smarty-3.1.7, created on 2021-03-02 04:18:09
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Reports\PrintReport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216251937603dbc81511b38-51493304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f587c1e0ec490c13cc9696aacc9df59705f21c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Reports\\PrintReport.tpl',
      1 => 1607713830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216251937603dbc81511b38-51493304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'REPORT_NAME' => 0,
    'PRINT_DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_603dbc8156e08',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603dbc8156e08')) {function content_603dbc8156e08($_smarty_tpl) {?>



<script type="text/javascript" src="libraries/jquery/jquery.min.js"></script>
<!DOCTYPE>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo vtranslate('LBL_PRINT_REPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</title>
    <link REL="SHORTCUT ICON" HREF="layouts/v7/skins/images/cropped-vizcayaseal-180x180.png">
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
            <td style="text-align: left;"><img src="storage/cropped-vizcayaseal-192x192.png" style="width: 100px;"></td>
            <td style="text-align: left;">
                Republic of the Philippines <br>
                Province of Nueva Vizcaya <br>
                City of Bayombong <br>
                Provincial Disaster Risk Reduction Management Office
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
                <table width="100%" border="0" cellpadding="5" cellspacing="0" align="left" class="printReport reportPrintData">
                    <?php echo $_smarty_tpl->tpl_vars['PRINT_DATA']->value;?>

                </table>
            </td>
        </tr>
    </table>
</body>
</html><?php }} ?>