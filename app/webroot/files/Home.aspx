<%@ Page Language="C#" AutoEventWireup="true"  CodeFile="Home.aspx.cs" Inherits="Home" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
    <head id="Head1" runat="server">
        <title>IBE Client Widget Prototype</title>
        <script language="javascript" type="text/javascript">
            function submitFormIBE(pub)
            {
                alert('Posting form data to IBE...');
                if (pub=='en-LK')
                {
                    form1.action="http://flytest.MihinLanka.com/CAB/SessionHandler.aspx?target=%2fCAB%2fIBE.aspx&pub=%2fsn%2fEnglish&Tab=1&s=&h=";
                }
                form1.submit();
                return false;
            }
       </script>
    </head>
    <body>
        <form id="form1" runat="server" method="post">
            <div>
                <table border="2" width="100%" cellpadding="2" cellspacing="2" style="display: block; background-color: gray;">
                    <tr>
                        <td colspan="4">
                            <font color="#000000" size="10px"><b>IBE Search Widget</b></font>
                        </td>
                    </tr>
                    <tr>  
                        <td style="width: 169px">
                            <b>Depature City{<font color="#F0F000"><b>seldcity1</b></font>=[XYZ]}</b></td>
                        <td style="width: 333px">
                            <asp:TextBox ID="seldcity1" TextMode="SingleLine" Text="DKR" runat="server"></asp:TextBox>
                        </td>
                        <td style="width: 169px">
                            <b>Depature date{<font color="#F0F000"><b>selddate1</b></font>=[dd-MMM-yy]}</b>
                        </td>
                        <td style="width: 333px">
                            <asp:TextBox ID="selddate1" Text="25-Nov-10" runat="server"></asp:TextBox>
                        </td>
                    </tr>
                    <tr>  
                        <td style="width: 137px">
                            <b>Arrival City{<font color="#F0F000"><b>selacity1</b></font>=[XYZ]}</b>
                        </td>
                        <td style="width: 191px">
                            <asp:TextBox ID="selacity1" TextMode="SingleLine" Text="ABJ" runat="server"></asp:TextBox>
                        </td>

                        <td style="width: 137px">
                            <b>Arrival date{<font color="#F0F000"><b>seladate1</b></font>=[dd-MMM-yy]}</b>
                        </td>
                        <td style="width: 191px">
                            <asp:TextBox ID="seladate1" Text="02-Dec-10" runat="server"></asp:TextBox>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div style="display: block">
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="width: 500px">Travel Type{<font color="#F0F000"><b>tid</b></font>=[SB:Return, OW:One-Way, AS:Multi-City]}</td>
                                        <td style="width: 300px"><asp:TextBox ID="tid" TextMode="SingleLine" Text="SB" runat="server"></asp:TextBox></td>
                                    </tr>
                                    <tr><td><br /></td></tr>
                                    <tr>  
                                        <td style="width: 500px">Adult Count{<font color="#F0F000"><b>seladults</b></font>=[0-9]}</td>
                                        <td style="width: 300px"><asp:TextBox ID="seladults" Text="1" runat="server"></asp:TextBox></td>
                                   </tr>
                                    <tr>
                                        <td style="width: 500px">Children Count{<font color="#F0F000"><b>selchildren</b></font>=[0-8]}</td>
                                        <td style="width: 300px"><asp:TextBox ID="selchildren" Text="0" runat="server"></asp:TextBox></td>
                                    </tr>
                                    <tr> 
                                        <td style="width: 500px">Infant Count{<font color="#F0F000"><b>selinfants</b></font>=[0-1]}</td>
                                        <td style="width: 300px"><asp:TextBox ID="selinfants" Text="0" runat="server"></asp:TextBox></td>
                                    </tr>
                                    <tr><td><br /></td></tr>
                                    <tr>
                                        <td style="width: 500px">Cabin Class{<font color="#F0F000"><b>selcabinclass</b></font>=[0:Economy,1:Business,2:First]}</td>
                                        <td style="width: 300px"><asp:TextBox ID="selcabinclass" TextMode="SingleLine" Text="0" runat="server"></asp:TextBox></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 500px">ResultBy{<font color="#F0F000"><b>resultby</b></font>=[1:Schedule]}</td> <%--[0:Price,1:Schedule,2:Flexi]--%>
                                        <td style="width: 300px"><asp:TextBox ID="resultby" Text="1" runat="server"></asp:TextBox></td>
                                    </tr>
                                    <tr><td><br /></td></tr>
                                    <tr>
                                        <td style="width: 500px">
                                            Promotional Offer Code{<font color="#F0F000"><b>promocode</b></font>=[ABCDEFG]}
                                        </td>
                                        <td style="width: 300px">
                                            <asp:TextBox ID="promocode" Text="" runat="server"></asp:TextBox>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <%--<input name="pageurl" type="hidden" id="pageurl" value="/IBE.aspx" runat="server" />
                                            <input name="section" type="hidden" id="section" value="IBE" runat="server" />
                                            <input name="bsp" type="hidden" id="bsp" value="Home" />
                                            <input name="showpage" type="hidden" id="showpage" value="true" runat="server" />
                                            <input name="j" type="hidden" id="j" value="t" />--%>
                                        </td>
                                    </tr>
                                </table>
                            </div>      
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <label style="float: none"><b>URLs for Form Post</b></label>
                        </td>                            
                    </tr>
                    <tr>
                        <td colspan="4">
                            <b>English:</b> http://flytest.MihinLanka.com/CAB/SessionHandler.aspx?target=%2fCAB%2fIBE.aspx&pub=%2flk%2fEnglish&Tab=1&s=&h=
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" >
                            <input style="float:left" type="submit" onclick="return submitFormIBE('en-SN');" value="Submit English" />
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>
