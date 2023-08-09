<?php /* Smarty version Smarty-3.1.7, created on 2021-11-23 13:10:53
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\HelpDesk\Nueva.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53650535618875ca50de50-75401692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc1c3c779aaa7bd539a54f624b037d9e372afb3' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\HelpDesk\\Nueva.tpl',
      1 => 1636706192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53650535618875ca50de50-75401692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_618875caa0f13',
  'variables' => 
  array (
    'TICKET_DETAILS' => 0,
    'CASUALTY_LIST' => 0,
    'casualty' => 0,
    'RESPONDERLOGS_LIST' => 0,
    'RESPONDER_LIST' => 0,
    'responderlogs' => 0,
    'responder' => 0,
    'DOCUMENT_LIST' => 0,
    'MEDIA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618875caa0f13')) {function content_618875caa0f13($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp7.4\\htdocs\\bayan911\\libraries\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><html>

<head>
    <title>Incident Report | <?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['title'];?>
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
            <td style="text-align: left;"><img src="test/logo/Nueva_Vizcaya_Seal.svg.png" style="width: 100px;"></td>
            <td style="text-align: center;">
                <span style="font-weight: bold;"> Republic of the Philippines </span><br>
                <span style="font-weight: bold; font-size: large; font-family: Oswald,'OpenSans-Semibold', 'Helvetica Neue', Helvetica, sans-serif;"> OFFICE OF THE PROVINCIAL GOVERNOR</span><br>
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
    <h3  style="text-align:center; width: 100%; font-size: 18px;">PROVINCIAL DISASTER RISK REDUCTION AND MANAGEMENT OFFICE</h3>
    <h2  style="text-align:center; font-weight:bold; font-size: 20px;">INCIDENT MONITORING REPORT</h2>
    <br>
    <div>
        <table style="width: 100%;">
            <tr>
                <td style="font-size: 12px;"><b>INCIDENT TYPE:</b></td>
                <td style="font-size: 12px;"><b>DATE OF REPORT:</b></td>                
            </tr>
            <tr>
                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['incidenttype'], 'UTF-8');?>
</td>
                <td><?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['createdtime'],"%B %e, %Y %I:%M %p"), 'UTF-8');?>
</td>
            </tr>
        </table>
    </div>
    <br>
    
    <div>
        <table  style="width: 100%;" >
            <tr><td style="font-size: 12px;"><b>SUMMARY OF INCIDENT:</b></td></tr>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['description'];?>
</td></tr>
            <tr><td><br></td></tr>

            <tr><td style="font-size: 12px;"><b>DATE AND TIME OF INCIDENT:</b></td></tr>
            <tr><td><?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['incidentdate'],"%B %e, %Y"), 'UTF-8');?>
&nbsp;<?php echo mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['incidenttime'],"%I:%M %p"), 'UTF-8');?>
</td></tr>
            <tr><td><br></td></tr>
                
            <tr><td style="font-size: 12px;"><b>PLACE OF INCIDENT:</b></td></tr>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['location'];?>
</td></tr>
            <tr><td>Nearest Landmark: <?php echo $_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['nearest_landmark'];?>
</td></tr>
            <tr><td><br></td></tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="font-size: 12px;"><b>REPORTED BY:</b></td>
                <td style="font-size: 12px;"><b>REPORTED TO:</b></td>                
            </tr>
            <tr>
                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['reported_by'], 'UTF-8');?>
</td>
                <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['reported_to'], 'UTF-8');?>
</td>
            </tr>
        </table>
    </div>
    <br/>
        <div style="width: 100%;">
            <?php if (empty($_smarty_tpl->tpl_vars['CASUALTY_LIST']->value)){?>

            <?php }else{ ?>
            <table>
                <tr><td style="font-size: 12px;"><b>CASUALTIES:</b></td></tr>                       
            </table>            
            <table style="width: 100%; margin-bottom: 5px;" id="reportdata">                
                <tr style="font-size: 13px; background-color: #032e61;color: #fff; margin: 10px;">
                    <td>Type</td>
                    <td>Name</td>
                    <td>Age</td>
                    <td>Sex</td>
                    <td>Place of Residence</td>
                    <td>Remarks</td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['casualty'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['casualty']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CASUALTY_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['casualty']->key => $_smarty_tpl->tpl_vars['casualty']->value){
$_smarty_tpl->tpl_vars['casualty']->_loop = true;
?>
                <tr style="font-size: 13px; border-bottom: 1px solid rgb(44, 44, 44);">
                    <td><?php echo $_smarty_tpl->tpl_vars['casualty']->value['type'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['casualty']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['casualty']->value['age'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['casualty']->value['sex'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['casualty']->value['residenceplace'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['casualty']->value['remarks'];?>
</td>
                </tr>
                <?php } ?>
            </table>
            <?php }?>
                    
            <br/>
            <?php if (empty($_smarty_tpl->tpl_vars['RESPONDERLOGS_LIST']->value)){?>

            <?php }else{ ?>
            <table>
            <tr><td style="font-size: 12px;"><b>ACTION TAKEN/RESPONDER LOGS:</b></td></tr>                       
            </table>
            <?php  $_smarty_tpl->tpl_vars['responder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['responder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RESPONDER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['responder']->key => $_smarty_tpl->tpl_vars['responder']->value){
$_smarty_tpl->tpl_vars['responder']->_loop = true;
?>
            <table style="width: 100%; margin-bottom: 5px;" id="reportdata">                
            <tr style="font-size: 13px; background-color: #032e61;color: #fff; margin: 10px;width:100%;">
                <td style="width: 20%;">Date & Time</td>
                <td style="width: 10%;">Responder</td>               
                <td style="width: 20%;">Status</td>
                <td style="width: 40%;">Remarks</td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['responderlogs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['responderlogs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RESPONDERLOGS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['responderlogs']->key => $_smarty_tpl->tpl_vars['responderlogs']->value){
$_smarty_tpl->tpl_vars['responderlogs']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['responderlogs']->value['responder']==$_smarty_tpl->tpl_vars['responder']->value['responderid']){?>
            <tr style="font-size: 13px;width:100%; border-bottom: 1px solid rgb(44, 44, 44);">
                <td style="width: 20%;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['responderlogs']->value['createdtime'],"%b %e, %Y %I:%M %p");?>
</td>
                <td style="width: 10%;"><?php echo $_smarty_tpl->tpl_vars['responder']->value['firstname'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['responder']->value['lastname'];?>
</td>                
                <td style="width: 20%;"><?php echo $_smarty_tpl->tpl_vars['responderlogs']->value['status'];?>
</td>
                <td style="width: 40%;"><?php echo $_smarty_tpl->tpl_vars['responderlogs']->value['remarks'];?>
</td>
            </tr>
            <?php }?>
            <?php } ?>
            </table>            
            <?php } ?>
            <?php }?>
        </div>
        <br>
        <div style="width: 100%;">
            <table>
                <tr><td style="font-size: 12px;"><b>RESPONDERS:</b></td></tr>
                <tr><td>
                    <?php  $_smarty_tpl->tpl_vars['responder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['responder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RESPONDER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['responder']->key => $_smarty_tpl->tpl_vars['responder']->value){
$_smarty_tpl->tpl_vars['responder']->_loop = true;
?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['responder']->value['type'], 'UTF-8');?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['responder']->value['firstname'], 'UTF-8');?>
&nbsp;<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['responder']->value['lastname'], 'UTF-8');?>
<br>
                    <?php } ?>                    
                </td></tr>
                <tr><td><br></td></tr>
                
                <tr><td style="font-size: 12px;"><b>RECOMMENDATION / REQUEST FOR ASSISTANCE:</b></td></tr>        
                <tr><td style="font-size: 12px;"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['TICKET_DETAILS']->value['solution'], ENT_QUOTES);?>
</td></tr>
                <tr><td><br></td></tr>
            </table>
        </div>

        <span style="font-size: 12px;"><b>MEDIA/S</b></span><br>
        <?php  $_smarty_tpl->tpl_vars['MEDIA'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MEDIA']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DOCUMENT_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MEDIA']->key => $_smarty_tpl->tpl_vars['MEDIA']->value){
$_smarty_tpl->tpl_vars['MEDIA']->_loop = true;
?>
            <img style="width: 100%; height: 300px;" 
            src="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['attachmentsid'];?>
_<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
">
        <?php } ?>
</body>

</html><?php }} ?>