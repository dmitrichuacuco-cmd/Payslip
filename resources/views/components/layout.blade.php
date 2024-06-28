<?php
    $Salary = 0;
    $Overtime = 0;

    $SSS = 0;
    $Philhealth = 0;
    $Pagibig = 0;
    $Wtax = 0;
    $Loans = 0;

    $TotalRevenue = $Salary + $Overtime;
    $TotalDeductions = $SSS + $Philhealth + $Pagibig + $Wtax + $Loans;
    $NetPay = $TotalRevenue - $TotalDeductions;
?>


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
    <form action="/invoice" method="GET">
    <div style="width:750px; height:1200px; margin: 0 auto; border:1px solid gray; background-color: white; padding: 30px;">
      <div>
        
        <table width="100%" cellspacing="0" cellpadding="0">
          <tbody><tr valign="top">
            <td>
              <table>
                <tbody><tr valign="top">
                  <td><img src="images/Electro.jpg" alt="" style="width: 140px"></td>
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
                            <form>
                                <input required name="start" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="Mar-15-2024" autocomplete="off" />
                            </form>
                          </td>
                        </tr>
                        <tr valign="top">
                          <td valign="top">
                            Period End:
                          </td>
                          <td valign="top">
                            <input required name="end" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="Mar-30-2024" autocomplete="off" />
                          </td>
                        </tr>
                        <tr valign="top">
                          <td valign="top">
                            Salary date:
                          </td>
                          <td valign="top">
                            <input required name="date" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="Mar-30-2024" autocomplete="off" />
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
            <input required name="employeeID" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="1010-4-0030" autocomplete="off" />
          </td>
          <th align="left" width="15%">
            Post:
          </th>
          <td width="35%">
            <input required name="post" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="Job Title Here" autocomplete="off" />
          </td>
        </tr>
        <tr>
          <th align="left"> 
            Name:
          </th>
          <td>
            <input required name="name" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="Nitish Jeebun" autocomplete="off" />
          </td>
          <th align="left">
            Dept.:
          </th>
          <td>
            <input required name="department" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="Development" autocomplete="off" />
          </td>
        </tr>
        <tr>
          <th align="left"> 
            Bank Account:
          </th>
          <td>
            <input required name="bankAccount" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="0000012345678" autocomplete="off" />
            
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
            
                <input required name="Salary" id="Salary" type="number" min="0" type="submit" /> 
                

            
          </td>
          <td align="right"></td>
        </tr>
        <tr>
          <td></td>
          <td>Overtime</td>
          <td align="right">
            <form action="" method="GET">
                <input required name="Overtime" id="Overtime" type="number" min="0"/>
            </form>
          </td>
          <td align="right"></td>
        </tr>
        <tr>
          <td></td>
          <td>SSS</td>
          <td align="right"></td>
          <td align="right">
            <input required name="SSS" id="SSS" type="number" min="0"/>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Philhealth</td>
          <td align="right"></td>
          <td align="right">
            <input required name="Philhealth" id="Philhealth" type="number" min="0"/>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Pag-ibig</td>
          <td align="right"></td>
          <td align="right">
            <input required name="Pag-ibig" id="Pag-ibig" type="number" min="0"/>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Wtax</td>
          <td align="right"></td>
          <td align="right">
            <input required name="Wtax" id="Wtax" type="number" placeholder="" min="0"/>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Loans</td>
          <td align="right"></td>
          <td align="right">
            <input required name="Loans" id="post-title" type="number" placeholder="" min="0"/>
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
                <b> <?php echo $TotalRevenue ?? '0'; ?></b>
            </div>
          </td>
          <td align="right">
            <div style="border-bottom:1px solid gray;padding-bottom: 3px;">
                <b> <?php echo $TotalDeductions ?? '0'; ?> </b>
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
          <th colspan="2" align="center"> <?php echo $NetPay ?> </th>
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
        <button class="btn btn-primary">Print now</button>
      </td >

    </form>
</body></html>

{{$slot}}