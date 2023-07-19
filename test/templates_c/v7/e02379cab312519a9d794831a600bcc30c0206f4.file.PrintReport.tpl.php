<?php /* Smarty version Smarty-3.1.7, created on 2021-11-12 14:47:27
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Reports\PrintReport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1927117244613acb2e349316-26359263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e02379cab312519a9d794831a600bcc30c0206f4' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Reports\\PrintReport.tpl',
      1 => 1636699168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927117244613acb2e349316-26359263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_613acb2e37a9d',
  'variables' => 
  array (
    'TICKET_DETAILS' => 0,
    'REPORT_NAME' => 0,
    'ROW' => 0,
    'PRINT_DATA' => 0,
    'TOTAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_613acb2e37a9d')) {function content_613acb2e37a9d($_smarty_tpl) {?>
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
            <td style="text-align: left;"><img src="test/logo/Nueva_Vizcaya_Seal.svg.png" style="width: 100px;"></td>
            <td style="text-align: center;">
                <span style="font-weight: bold;"> Republic of the Philippines </span><br>
                <span
                    style="font-weight: bold; font-size: large; font-family: Oswald,'OpenSans-Semibold', 'Helvetica Neue', Helvetica, sans-serif;">
                    OFFICE OF THE PROVINCIAL GOVERNOR</span><br>
                <span style="font-weight: bold;">Bayombong, Nueva Vizcaya </span><br>
                <span style="font-size: 11px;">pddrmonuevaviszcaya@gmail.com </span><br>
                <span style="font-size: 11px;">(078) 392-2550</span><br>
            </td>
            <td style="text-align: right;"><img src="test/logo/pdrrmc-nueva.jpg" style="width: 170px;"></td>
        </tr>
    </table>
    <br>
    <div style="border-top: 3px solid #032e61;"></div>
    <div style="border-top: 3px solid #032e61; margin-top:2px;"></div>
    <br>
    <h2 style="text-align:center; font-weight:bold; font-size: 20px;"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['REPORT_NAME']->value, 'UTF-8');?>
</h2>
    <h4 style="text-align:center; font-weight:bold; font-size: 12px;">TOTAL OF <?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
 ROWS</h4>
    <table width="100%" border="0" cellpadding="5" cellspacing="0" align="left" class="printReport reportPrintData" id="reportdata">
        <?php echo $_smarty_tpl->tpl_vars['PRINT_DATA']->value;?>

    </table>
    <br />
    <br />
    <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>


</body>

</html><?php }} ?>