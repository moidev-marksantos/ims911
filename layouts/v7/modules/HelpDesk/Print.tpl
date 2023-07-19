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
</style>
</head>
<body onLoad="JavaScript:window.print()">
    <table style="width: 100%;">
        <tr>
            <td style="text-align: left;"><img src="test/logo/sbma.png" style="width: 100px;"></td>
            <td style="text-align: left;">
                Republic of the Philippines <br>
                Metro Manila <br>
                City of Makati <br>
                108 Benavidez St. 
            </td>
        </tr>
    </table>
    <br>
    <div style="border-top: 3px solid #1e4d7e;"></div>
    <h1 style="text-align:center;">INCIDENT REPORT</h1>
    <div style="width: 100%; display:flex;">
        <div style="width: 100%;">
            <table style="width: 100%;">
                <tr>
                    <td><b>REPORTED BY:</b></td>
                    <td style="text-align: left;">{$TICKET_DETAILS['reported_by']}</td>
                    <td><b>DATE REPORTED:</b></td>
                    <td style="text-align: left;">{$TICKET_DETAILS['createdtime']|date_format:"%B %e, %Y %I:%M %p"}</td>
                </tr>
                <tr>
                    <td><b>REPORTED TO:</b></td>
                    <td style="text-align: left;">{$TICKET_DETAILS['reported_to']}</td>
                    <td><b>INCIDENT NO:</b></td>
                    <td style="text-align: left;">{$TICKET_DETAILS['ticket_no']}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div style="background-color: #1e4d7e; color: #fff;">
        <h3 style="text-align: center; padding-top:5px; padding-bottom: 5px;">INCIDENT INFORMATION</h3>
    </div>
    <div style="width: 100%; display:flex;">
        <div style="width: 100%;">
            <table style="width: 100%;">
                <tr>
                    <td><b>INCIDENT TYPE</b></td>
                    <td>:</td>
                    <td style="text-align: left;"> {$TICKET_DETAILS['incidenttype']|upper}</td>
                </tr>
                <tr></tr>
                <tr>
                    <td><b>INCIDENT DATE</b></td>
                    <td>:</td>
                    <td style="text-align: left;">{$TICKET_DETAILS['createdtime']|date_format:"%B %e, %Y %I:%M %p"|upper}</td>
                </tr>
                <tr></tr>
                <tr>
                    <td><b>LOCATION</b></td>
                    <td>:</td>
                    <td style="text-align: left; text-transform: uppercase;">{$TICKET_DETAILS['location']}</td>
                </tr>
                <tr></tr>
                <tr>
                    <td><b>NEAREST LANDMARK</b></td>
                    <td>:</td>
                    <td style="text-align: left;">{$TICKET_DETAILS['nearest_landmark']|upper}</td>
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
                    <td style="text-align: left;">{$TICKET_DETAILS['description']}</td>
                </tr>
            </table>
        </div>
    </div>
    <br />
</body>

</html>