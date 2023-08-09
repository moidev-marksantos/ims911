{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
<html>

<head>
    <title>Incident Report | {$TICKET_DETAILS['title']}</title>
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
	<h2  style="text-align:center; font-weight:bold; font-size: 20px; margin-bottom: 10px; margin-top: 10px;">{$REPORT_NAME|upper}</h2>   
    <h4 style="text-align:center; font-weight:bold; font-size: 12px;">TOTAL OF {$ROW} DATA</h4>
    <table width="100%" border="0" cellpadding="5" cellspacing="0" align="left" class="printReport reportPrintData" id="reportdata">
        {$PRINT_DATA}
    </table>
    <br />
    <br />
    {$TOTAL}

</body>

</html>