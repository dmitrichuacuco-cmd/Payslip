<html><head>
    <title>Payslip template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <style>
      .sections{
        border-left:1px solid gray;
        border-top:1px solid gray;
        border-bottom:1px solid gray; 
      }
      .sections th{
        border-right:1px solid gray;
        border-bottom:1px solid gray;
        padding: 3px;
      }
      .sections td{
        border-right:1px solid gray;
        padding: 3px;
      }
      .sections .last td{
        border-bottom:1px solid gray;
      }
    </style>
  </head>
  <body style="background-color: gray;font-family: verdana;font-size: small;">
    <form action="/pdf/{{$payslip->id}}">
    <div style="width:750px; height:1200px; margin: 0 auto; border:1px solid gray; background-color: white; padding: 30px;">
      <div>
        
        <table width="100%" cellspacing="0" cellpadding="0">
          <tbody><tr valign="top">
            <td>
              <table>
                <tbody><tr valign="top">
                  <td><img src="../images/Electro.jpg" alt="" style="width: 140px"></td>
                  <td valign="top">
                    <h1 style="margin:5px 0px;">Electro Premier Venture Int'l Inc</h1>
                    <div>
                        Makati Avenue, 1226 Sen. Gil J. Puyat Ave, Makati, Metro Manila<br>
                      <br>
                      Tel: (02) 79151163
                    </div>
                  </td>
                </tr>
              </tbody></table>
            </td>
            <td valign="top" align="right" style="border-left:0px dashed slateblue;">
              <table width="100%">
                <tbody><tr valign="top">
                  <td valign="top">
                    <h2 style="margin:5px 0px;">Pay slip</h2>
                    <div>
                      <table width="100%">
                        <tbody><tr valign="top">
                          <td valign="top">
                            Period Start:
                          </td>
                          <td valign="top">
                            {{($payslip->periodStart)}}
                          </td>
                        </tr>
                        <tr valign="top">
                          <td valign="top">
                            Period End:
                          </td>
                          <td valign="top">
                            {{($payslip->periodEnd)}}
                          </td>
                        </tr>
                        <tr valign="top">
                          <td valign="top">
                            Salary date:
                          </td>
                          <td valign="top">
                            {{($payslip->periodEnd)}}
                          </td>
                        </tr>
                      </tbody></table>
  
                    </div>
                  </td>
                </tr>
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
  
  
      </div>
      <hr style="border:1px dashed slateblue;">
      <h3 style="margin: 0px 0px 5px 0px;">Employee</h3>
      <table width="100%" style="border:1px solid gray;">
        <tbody><tr>
          <th align="left" width="10%">
            Employee ID:
          </th>
          <td width="40%">
            {{$payslip->employeeID}}
          </td>
          <th align="left" width="15%">
            Job Title:
          </th>
          <td width="35%">
            {{($payslip->job)}}
          </td>
        </tr>
        <tr>
          <th align="left"> 
            Name:
          </th>
          <td>
            {{($payslip->name)}}
          </td>
          <th align="left">
            Dept.:
          </th>
          <td>
            {{($payslip->department)}}
          </td>
        </tr>
        <tr>
          <th align="left"> 
            Bank Account:
          </th>
          <td>
            {{($payslip->bankAccount)}}
          </td>
  
        </tr>
  
      </tbody></table>
      <hr style="border:1px dashed slateblue;">
      <h3 style="margin: 0px 0px 5px 0px;">Payroll</h3>
      <table width="100%" class="sections" cellspacing="0">
        <tbody><tr style="background: #ccc;">
          <th width="6%"></th>
          <th>Sections</th>
          <th width="15%">Revenues</th>
          <th width="15%">Deductions</th>
        </tr>
  
        
        <tr>
          <td></td>
          <td>Bi-monthly Salary</td>
          <td align="right">
            
            {{(number_format($payslip->salary))}}
  
          </td>
          <td align="right"></td>
        </tr>
        <tr>
          <td></td>
          <td>Overtime</td>
          <td align="right">
            {{(number_format($payslip->overtime))}}
          </td>
          <td align="right"></td>
        </tr>
        <tr>
          <td></td>
          <td>SSS</td>
          <td align="right"></td>
          <td align="right">
            {{(number_format($payslip->SSS))}}
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Philhealth</td>
          <td align="right"></td>
          <td align="right">
            {{(number_format($payslip->philhealth))}}
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Pag-ibig</td>
          <td align="right"></td>
          <td align="right">
            {{(number_format($payslip->pagibig))}}
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Wtax</td>
          <td align="right"></td>
          <td align="right">
            {{(number_format($payslip->wtax))}}
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Loans</td>
          <td align="right"></td>
          <td align="right">
            {{(number_format($payslip->loans))}}
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td><div style="border-top:1px solid gray;border-bottom:2px solid gray;height: 2px;"></div></td>
          <td><div style="border-top:1px solid gray;border-bottom:2px solid gray;height: 2px;"></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="right"><b>Totals</b></td>
          <td align="right"><div style="border-bottom:1px solid gray;padding-bottom: 3px;">
                <b> {{number_format(($payslip->salary)/2 + ($payslip->overtime))}} </b>
            </div>
          </td>
          <td align="right">
            <div style="border-bottom:1px solid gray;padding-bottom: 3px;">
                <b> {{number_format(($payslip->SSS) + ($payslip->philhealth) + ($payslip->pagibig) + ($payslip->wtax) + ($payslip->loans))}} </b>
            </div>
          </td>
        </tr>
        
  
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr class="last">
          <td>&nbsp;</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr style="background: #dfdfdf;">
          <th colspan="2" align="right">NET PAY</th>
          <th colspan="2" align="center"> {{number_format((($payslip->salary)/2 + ($payslip->overtime)) - (($payslip->SSS) + ($payslip->philhealth) + ($payslip->pagibig) + ($payslip->wtax) + ($payslip->loans)))}} </th>
        </tr>
      </tbody></table>
      <hr style="border:1px dashed slateblue;">
      <h3 style="margin: 0px 0px 5px 0px;">Additional Infos.</h3>
      <table width="100%" style="border:1px solid gray;">
        <tbody><tr>
          <th align="left" width="20%"> 
            Payment Method:
          </th>
          <td width="40%">Bank</td>
          <th align="left" width="20%">
            Leaves taken:
          </th>
          <td width="20%">0 local / 0 sick</td>
        </tr>
        <tr>
          <th align="left"> 
          </th>
          <td></td>
          <th align="left">
            Remaining leaves:
          </th>
          <td>10 local / 12 sick</td>
        </tr>
      </tbody></table>
      <table width="100%">
        <tbody><tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
  
    </div>
  
    <td align="right">
      @csrf
      <button type="submit" class="btn btn-primary">Print now</button>
    </td >
  
    </form>
  </body></html>
  
  