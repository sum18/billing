<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Billing - SUM Version 1.0</title>

<link rel="stylesheet" href="styles/billing.css"/>
<script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="scripts/swx-behaviors.js"></script>
<script type="text/javascript" src="scripts/jquery.dropkick-min.js"></script>
</head>

<body>

<div class="layout-978">
  <div class="row titlebar">
     <h1>Billing for Fee Based Plans</h1>
  </div><!--/row -->
    
    <div class="row main-content">
        <div class="col9 engagements-area" >
            <div class="engagement shadow">
                <ul class="bio">
                  <li>Taylor, K <span class="label">( NON-UBS ACCT. HOLDER )</span></li>
                  <li> <span class="faid">ZZ00</span></li>
                  <li> <span class="plantype">FGA</span></li>
                </ul>
                <div class="dash">
                  <div class="countdown">
                    
                    <p class="interrupt"><span class="icon-info"></span>Countdown starts when SA is approved.</p>
                  </div>
                  <div class="status">
                    <h1>PENDING APPROVAL</h1>
                    <span class="tracking">ZZ1234</span><span class="type">ANNUAL</span>
                    <span class="sa-date">01/13/2014</span>
                  </div>
                  <div class="fee-summary">
                    <table>
                      <tr><td class="cash">2,500</td></tr>
                      <tr><td class="cash">0</td></tr>
                      <tr><td class="cash total">2,500</td></tr>
                    </table>
                  </div>
                </div><!--/dash -->

                <div class="h-tabs">
                  <ul class="h-menu">
                    <li><a href="#tab1">Document Status</a></li>
                    <li><a href="#tab2" >Payment Info</a></li>
                    <li><a href="#tab3" >Renewal Status</a></li>
                    <li><a href="#tab4" >Renewal History</a></li>
                  </ul>
                 </div>
                <div class="tab-content-container">
                  <div id="tab1">
                    <?php include("_includes/tables-documents.html");?>
                  </div>
                  <div id="tab2">
                    <?php include("_includes/tables-payments.html");?>
                  </div>
                  <div id="tab3">
                    <?php include("_includes/tables-renewal-status.html");?>
                  </div>
                  <div id="tab4">
                    <?php include("_includes/tables-renewal-history.html");?>
                  </div>
                </div>
            
            </div><!--/engagement -->
            <?php include("_includes/engagement2.html");?>
            <?php include("_includes/engagement3.html");?>
            <?php include("_includes/engagement4.html");?>

        </div><!--/engagements-area-->
        
        <div class="col3 announcemenst-area test">
        dont ever talks...

        </div>
    </div><!--/row -->

</div><!--/layout-978 -->

</body>
</html>
