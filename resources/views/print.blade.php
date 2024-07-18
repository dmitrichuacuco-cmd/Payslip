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
<body style="background-color: white;font-family: verdana;font-size: small;">
  {{-- <div style="width:600px; height:425px; margin: 0 auto; border:1px solid gray; background-color: white;"> --}}
    <hr style="border:0.7px dashed slateblue;">
    <div>
      
      <table width="95%">
        <tbody><tr valign="top">
          <td>
            <table>
              <tbody><tr valign="top">
                <td><img src="./images/Electro.jpg" alt="Electro" style="width: 70px"></td>
                <td valign="top">
                  <h1 style="margin:5px 0px;font-size: 18px;">Electro Premier Venture Int'l Inc</h1>
                  <div style="font-size: 12px;">
                      Makati Avenue, 1226 Sen. Gil J. Puyat Ave, Makati, Metro Manila
                      <br>
                    Tel: (02) 79151163
                  </div>
                </td>
              </tr>
            </tbody></table>
          </td>
          <td valign="top" align="right" style="border-left:0px dashed slateblue;">
            <table width="150%">
              <tbody><tr valign="top">
                <td valign="top">
                  <h2 style="margin:5px 0px; font-size: 18px;">Payslip</h2>
                  <div style="font-size: 12px;">
                    <table width="70%">
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
                    </tbody></table>
                  </div>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>

    </div>
    <hr style="border: 0.1px solid;">
    <table width="100%" style="font-size: 12px;">
      <tbody><tr>
        <th align="left" width="20%">
          Employee ID:
        </th>
        <td>
          {{$payslip->employeeID}}
        </td>
        <th align="left" width="15%">
          Job Title:
        </th>
        <td>
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
    {{-- <hr style="border:0.7px dashed slateblue;"> --}}
    <table width="100%" class="sections" cellspacing="-1">
      <tbody><tr style="background: #ccc;">
        
        <th width="40%">Sections</th>
        <th width="30%">Revenues</th>
        <th width="30%">Deductions</th>
      </tr>

      
      <tr style="font-size: 12px">

        <td>Bi-monthly Salary</td>
        <td align="right">
          {{number_format(($payslip->salary))}}
        </td>
        <td align="right"></td>
      </tr>
      <tr style="font-size: 12px">

        <td>Overtime</td>
        <td align="right">
          {{number_format(($payslip->overtime))}}
        </td>
        <td align="right"></td>
      </tr>
      <tr style="font-size: 12px">

        <td>SSS</td>
        <td align="right"></td>
        <td align="right">
          {{number_format(($payslip->SSS))}}
        </td>
      </tr>
      <tr style="font-size: 12px">

        <td>Philhealth</td>
        <td align="right"></td>
        <td align="right">
          {{number_format(($payslip->philhealth))}}
        </td>
      </tr>
      <tr style="font-size: 12px">

        <td>Pag-ibig</td>
        <td align="right"></td>
        <td align="right">
          {{number_format(($payslip->pagibig))}}
        </td>
      </tr>
      <tr style="font-size: 12px">

        <td>Wtax</td>
        <td align="right"></td>
        <td align="right">
          {{number_format(($payslip->wtax))}}
        </td>
      </tr>
      <tr style="font-size: 12px">

        <td>Loans</td>
        <td align="right"></td>
        <td align="right">
          {{number_format(($payslip->loans))}}
        </td>
      </tr>
      <tr>
        <td></td>
        <td><div style="border-top:1px solid gray;border-bottom:2px solid gray;height: 2px;"></div></td>
        <td><div style="border-top:1px solid gray;border-bottom:2px solid gray;height: 2px;"></div></td>
      </tr>
      <tr style="font-size: 12px">
        <td align="right"><b>Totals</b></td>
        <td align="right">
          <div style="border-bottom:1px solid gray;padding-bottom: 3px;">
              <b> {{number_format(($payslip->salary)/2 + ($payslip->overtime))}} </b>
          </div>
        </td>
        <td align="right">
          <div style="border-bottom:1px solid gray;padding-bottom: 3px;">
              <b> {{number_format(($payslip->SSS) + ($payslip->philhealth) + ($payslip->pagibig) + ($payslip->wtax) + ($payslip->loans))}} </b>
          </div>
        </td>
      </tr>
      <tr style="background: #dfdfdf;">
        <th colspan="2" align="right">NET PAY</th>
        <th colspan="2" align="center"> {{number_format((($payslip->salary)/2 + ($payslip->overtime)) - (($payslip->SSS) + ($payslip->philhealth) + ($payslip->pagibig) + ($payslip->wtax) + ($payslip->loans)))}} </th>
      </tr>
  {{-- </div> --}}

</body>
</html>

