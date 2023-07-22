<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Appointment Schedule Notification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin:0; padding:10px 0 0 0;" bgcolor="#F8F8F8">
<table align="center" border="1" cellpadding="0" cellspacing="0" width="95%%">
    <tr>
        <td align="center">
            <table align="center" border="1" cellpadding="0" cellspacing="0" width="600"
                   style="border-collapse: separate; border-spacing: 2px 5px; box-shadow: 1px 0 1px 1px #B8B8B8;"
                   bgcolor="#FFFFFF">
                <tr>
                    <td align="center" style="padding: 5px 5px 5px 5px;">
                        <a href="{{ config('app.url') }}" target="_blank">
                            <img src="{{ asset('assets/images/site-logo.png') }}" alt="Logo" style="width:186px;border:0;"/>
                        </a>
                    </td>
                </tr>
                <!-- Initial relevant banner image goes here under src-->
                <!-- <tr>
                    <td align="center">
                        
                        <img src="%s" alt="Image Banner" style="display: block;border:0;" height="100%%" width="600"/>
                    </td>
                </tr> -->
                <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                        <table border="1" cellpadding="0" cellspacing="0" width="100%%">
                            <tr>
                                <td style="padding: 10px 0 10px 0; font-family: Avenir, sans-serif; font-size: 16px;">
                                    <!-- Initial text goes here-->

                                    Dear Mr. Evan,

									<p>We would like to confirm your appointment with Thomas on Thursday, {{ $appointmentDate}} regarding {{ $healthProblem }}. If you have any questions or want to request changes, please contact us.</p>

									Regards,<br/>
									Edward
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#FFB6C1">
                        <table border="1" cellpadding="0" cellspacing="0" width="100%%" style="padding: 20px 10px 10px 10px;">
                            <tr>
                                <td width="260" valign="top" style="padding: 0 0 15px 0;">
                                    <table border="1" cellpadding="0" cellspacing="0" width="100%%">
                                        <tr>
                                            <td align="center">
                                                <a href="tel:+91 9101339671" target="_blank">
                                                    <img src="url for call image goes here.png" alt="Call us"
                                                         style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="font-family: Avenir, sans-serif; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                GIVE US A CALL
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">
                                    &nbsp;
                                </td>
                                <td width="260" valign="top">
                                    <table border="1" cellpadding="0" cellspacing="0" width="100%%" >
                                        <tr>
                                            <td align="center">
                                                <a href="mailto:appointment@batrashosptalnadiad.com">
                                                    <img src="url for email image goes here" alt="Email us"
                                                         style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="font-family: Avenir, sans-serif; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                EMAIL US
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">
                                    &nbsp;
                                </td>
                                <td width="260" valign="top">
                                    <table border="1" cellpadding="0" cellspacing="0" width="100%%">
                                        <tr>
                                            <td align="center">
                                                <a href="/c/contact" target="_blank">
                                                    <img src="url for faq image goes here" alt="FAQ Page"
                                                         style="display: block;"/>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="font-family: Avenir, sans-serif; color:#707070;font-size: 13px;padding: 10px 0 0 0;">
                                                BROWSE FAQ PAGE
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#460923" style="padding: 15px 15px 15px 15px;">
                        <table border="1" cellpadding="0" cellspacing="0" width="100%%">
                            <tr>
                                <td align="center">
                                    <table border="1" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <a href="Instagram page goes here" target="_blank">
                                                    <img src="Instagram image goes here" alt="Instagram" width="50" height="50"
                                                         style="display: block;" border="1"/>
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                            <td>
                                                <a href="twitter url goes here" target="_blank">
                                                    <img src="twitter image goes here" alt="Twitter" width="50" height="50"
                                                         style="display: block;" border="1"/>
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                            <td>
                                                <a href="facebook page goes here" target="_blank">
                                                    <img src="facebook image goes here" alt="Facebook" width="50" height="50"
                                                         style="display: block;" border="1"/>
                                                </a>
                                            </td>
                                            <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>