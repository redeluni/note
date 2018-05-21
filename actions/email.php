<?php
function email_message( $email, $hash )
{
$ret = <<<HTML
<html><body>
<table cellpadding="0" width="580" cellspacing="0" border="0" bgcolor="#F4F7FA" align="center" style="margin:0 auto;table-layout:fixed"  bgcolor="blue">      
    <tbody>  
        <tr> 
            <td colspan="4">
               
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td colspan="2" height="30"></td>
                        </tr>
                        <tr>
                            <td valign="top" align="center">
                                <a href="http://www.danielemanzi.it/6-note/" style="display:inline-block;text-align:center" target="_blank">
                                    <img src="https://i.imgur.com/O1RM2ys.png" height="32" border="0" alt="danielemanzi.it">
                                </a>  
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="30"></td>
                        </tr>
                    </tbody>
                </table>
                           
                <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" style="border-radius:4px">
                    <tbody>
                        <tr>
                            <td height="40"></td>
                        </tr>
                        <tr style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;color:#4e5c6e;font-size:14px;line-height:20px;margin-top:20px">
                            <td colspan="2" valign="top" align="center" style="padding-left:90px;padding-right:90px">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
                                    <tbody>
                                        <tr>
                                            <td align="center" valign="bottom" colspan="2" cellpadding="3">
                                                <img alt="email" width="80" src="https://i.imgur.com/UiZ2ObP.png">
                                            </td>         
                                        </tr>
                                        <tr><td height="30"></td></tr>
                                        <tr>
                                            <td align="center">
                                                <span style="color:#48545d;font-size:22px;line-height:24px">Verifica il tuo indirizzo email</span>              
                                            </td>
                                        </tr>
                                        <tr><td height="24"></td></tr>
                                        <tr>
                                            <td height="1" bgcolor="#DAE1E9"></td>
                                        </tr>
                                        <tr><td height="24"></td></tr>
                                        <tr>
                                            <td align="center">
                                                <span style="color:#48545d;font-size:14px;line-height:24px">
                                                Per iniziare ad usare il tuo account devi confermare l'indirizzo email.
                                                </span>
                                            </td>
                                        </tr>
                                        <tr><td height="20"></td></tr>
                                        <tr>
                                            <td valign="top" width="48%" align="center">
                                                <span>
                                                    <a href="https://www.danielemanzi.it/6-note/?page=verify&email=$email&hash=$hash" style="display:block;padding:15px 25px;background-color:#0087d1;color:#ffffff;border-radius:3px;text-decoration:none" target="_blank">Verifica indirizzo email</a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr><td height="20"></td></tr>
                                        <tr>
                                            <td align="center"><hr><img src="" width="54" height="2" border="0"></td>
                                        </tr>
                                        <tr><td height="20"></td></tr>
                                        <tr>
                                            <td align="center">
                                                <p style="color:#a2a2a2;font-size:12px;line-height:17px;font-style:italic">
                                                Se non sei stato tu ad ad iscriverti, ignora questa email. L' account verrà chiuso.
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="60"></td>
                        </tr>
                    </tbody>
                </table>
                                                    
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top:20px">
                    <tbody>
                        <tr>
                            <td colspan="2" height="20"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                            <span style="font-size:14px;font-weight:500;margin-bottom:10px;color:#7e8a98;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif">Scarica l'ultima app per il tuo smartphone</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"></td>
                        </tr>
                        <tr>
                            <td valign="top" width="50%" align="right">
                                <a href=""><img src="https://i.imgur.com/hPqFLPE.png" height="40" border="0" alt="iOS app mobile"></a>    
                            </td>   
                            <td valign="top">
                                <a href="" style="margin-left:15px;border:1px solid red;" target="_blank">
                                    <img src="https://i.imgur.com/k6mZR2h.png" height="40" border="0" alt="Android app mobile">
                                </a> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="20"></td>
                        </tr>
                    </tbody>
                </table>
                               
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td valign="top" align="center">
                                <span style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;color:#9eb0c9;font-size:10px">©
                                <a href="https://www.danielemanzi.it/" style="color:#9eb0c9!important;text-decoration:none" target="_blank">danielemanzi.it</a> 2018
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td height="50">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                
            </td>  
        </tr>
    </tbody>       
</table> 
</body></html>
HTML;
return $ret;
}
?>


