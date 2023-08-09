<?php /* Smarty version Smarty-3.1.7, created on 2022-09-28 11:33:35
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Reports/PrintReport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122155749461d3c162328489-19417142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c87e2818ac3e189928226829447f03479f9d36f6' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Reports/PrintReport.tpl',
      1 => 1664335992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122155749461d3c162328489-19417142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61d3c16233762',
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
<?php if ($_valid && !is_callable('content_61d3c16233762')) {function content_61d3c16233762($_smarty_tpl) {?>
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
	<h2  style="text-align:center; font-weight:bold; font-size: 20px; margin-bottom: 10px; margin-top: 10px;"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['REPORT_NAME']->value, 'UTF-8');?>
</h2>   
    <h4 style="text-align:center; font-weight:bold; font-size: 12px;">TOTAL OF <?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
 DATA</h4>
    <table width="100%" border="0" cellpadding="5" cellspacing="0" align="left" class="printReport reportPrintData" id="reportdata">
        <?php echo $_smarty_tpl->tpl_vars['PRINT_DATA']->value;?>

    </table>
    <br />
    <br />
    <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>


</body>

</html><?php }} ?>