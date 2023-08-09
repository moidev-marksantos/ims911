<html>

<head>
    <title>INCIDENT SUMMARY REPORT | {$TICKET_DETAILS['ticket_no']}</title>
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
				<td>{$TICKET_DETAILS['ticket_no']|upper}</td>
            </tr>
            <tr>
                <td><b>INCIDENT TYPE:</b></td>                
				<td>{$TICKET_DETAILS['incidenttype']|upper}</td>
            </tr>
			<tr>
                <td><b>LOCATION:</b></td>                
				<td>{$TICKET_DETAILS['location']|upper}</td>
            </tr>
			<tr>
                <td><b>NEAREST LANDMARK:</b></td>                
				<td>{$TICKET_DETAILS['nearest_landmark']|upper}</td>
            </tr>
			<tr>
                <td><b>CALLER:</b></td>                
				<td>{$TICKET_DETAILS['reported_by']|upper}</td>
            </tr>
			<tr>
                <td><b>GENDER:</b></td>                
				<td>{$TICKET_DETAILS['gender']|upper}</td>
            </tr>
			<tr>
                <td><b>CONTACT NO:</b></td>                
				<td>{$TICKET_DETAILS['contact_no']|upper}</td>
            </tr>
			<tr>
                <td><b>DATE AND TIME:</b></td>                
				<td>{$TICKET_DETAILS['incidentdate']|date_format:"%m/%e/%Y"|upper}&nbsp;{$TICKET_DETAILS['incidenttime']|date_format:"%H:%M"|upper}</td>
            </tr>
			<tr>
                <td><b>RECEIVED BY:</b></td>                
				<td>{$TICKET_DETAILS['reported_to']|upper}</td>
            </tr>
			<tr>
                <td><b>TIME RELAYED:</b></td>  
				<td>{$TICKET_DETAILS['createdtime']|date_format:"%m/%e/%Y"|upper}&nbsp;{$TICKET_DETAILS['createdtime']|date_format:"%H:%M"|upper}</td>								
            </tr>
			<tr>
                <td><b>RELAYED TO:</b></td>                
				<td>{$TICKET_DETAILS['dispatch_to']|upper|replace:'|##|':'<br>'}</td>
            </tr>
			<tr style="white-space:normal; ">
                <td><b>NARRATIVE/LOG MESSAGE:</b></td>                
				<td>
				{$TICKET_DETAILS['description']} 				
				<br><br>
				{$TICKET_DETAILS['solution']}				
				</td>
            </tr>
			<tr>
                <td><b>STATUS:</b></td>                
				<td>{$TICKET_DETAILS['status']|upper}</td>
            </tr>
        </table>
		<br>
		<br>
		<table style="width: 100%;">
			<tr>
				<td style="text-align: left;">PREPARED BY: {$USER_MODEL->get('first_name')|upper}&nbsp;{$USER_MODEL->get('last_name')|upper}</td>
				<td style="text-align: right;">DATE PRINTED: {$smarty.now|date_format:"%m/%e/%Y %H:%M"|upper}</td>				
			</tr>
		</table>
    </div>
    <br>
        <br>        
		{if empty($DOCUMENT_LIST)}
		{else}
        <span style="font-size: 12px;"><b>MEDIA/S</b></span><br>
        {foreach from=$DOCUMENT_LIST item=MEDIA}
            <img style="width: 300px; height: 300px; margin: 20px" src="{$MEDIA['path'] }{$MEDIA['attachmentsid'] }_{$MEDIA['name'] }" alt="{$MEDIA['name'] }">
        {/foreach}
		{/if}
</body>

</html>