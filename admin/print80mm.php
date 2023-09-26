<?php 
   require_once "helper.php";
   if (isset($_GET['invid']) && $_GET['invid'] !== "" && isset($_GET['action']) && $_GET['action'] === "generate") {
     $InvoiceId = $Controller->validate($_GET['invid']);
     $order_data = $Controller->getInvoiceDetailsById($InvoiceId);

   }else{
      echo '<script>
      window.location.assign("./reports");
      </script>';
   }
    ?>
<!DOCTYPE html>
<html>
<head>
  <?php include_once ("Includes/MetaTag.php");?>
  <title>Sales invoice</title>
</head>
<style type="text/css">
  #apDiv1 {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 1001;
  }

  hr {
    border: #ccc;
  }

  .style1 {
    font-weight: bold
  }
  </style>
</head>

<body onLoad="print();">
  <style>
  .desc {
    border-top: dashed thin #000000;
    border-bottom: dashed thin #000000
  }

  .items {
    border-bottom: dashed thin #000000
  }

  body {
    margin: 20px 50px 20 20px;
  }
  </style>
  <div style="width:50%; margin-left: 100px;">
    
    <table class="text-center" width="auto" border="0"
      style="font-size:16px; font-family:Courier; font-weight:700; margin-left:0px">
      <tr>
        <td colspan="3" align="center">
          <h4 style="margin-top:10px; font-size:21px">
            <img src="../assets/images/favicon.png" width="60" height="auto" alt="logo">
          </h4>
          <span style='font-size:30px;line-height:2px'><strong><?php echo $Controller->app_short();?></span></strong><br/>
          <div style='font-size:16px; font-weight:700; margin-top:0px'>
            <br><?php echo APP_AUTHOR_ADDRESS; ?>
            <br> Tel: <?php echo APP_AUTHOR_PHONE ?><br>
            Email: <?php echo APP_AUTHOR_EMAIL ?></div>
          <br />
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center" style="font-size:30px; letter-spacing:0px"><strong>SALES INVOICE</strong></td>
      </tr>
      <tr>
        <td width="131">SALESPOINT</td>
        <td width="22">:</td>
        <td width="183">STORE 5</td>
      </tr>
      <tr>
        <td>CASHIER</td>
        <td>:</td>
        <td><b><?php echo $order_data->cashier_name; ?></td>
      </tr></b></td>
      </tr>
      <tr>
        <td>INVOICE NO</td>
        <td>:</td>
        <td><?php echo  $order_data->invoiceNo; ?></td>
      </tr>
      <tr>
        <td>CUSTOMER </td>
        <td>:</td>
        <td><strong><?php echo  $order_data->customer; ?> </strong></td>
      </tr>
      <tr>
        <td> DATE</td>
        <td>:</td>
        <td> <small><?php echo $Controller->get_date($order_data->trans_date);?></small></td>
      </tr>
      <tr>
        <td> TIME</td>
        <td>:</td>
        <td> <small><?php echo $Controller->get_time($order_data->trans_date);?></small></td>
      </tr>
    </table>
    <table class="text-center" width="350" border="0"
      style="font-size:16px; font-family:Courier; font-weight:700; margin-left:0px">
      <tr>
        <td width="336" class="desc">ITEM</td>
        <td width="336" class="desc">QTY</td>
        <td width="336" class="desc">AMOUNT</td>
      </tr>
      <tr>
        <td colspan="3">
          <table width="100%" border="0">
            <?php
             $orderLists = $Controller->getOrderItemsList($order_data->orderId);

            if ($orderLists) {
               $cnt =0;
               foreach ($orderLists as $item) {
                  $cnt++;                                 
            ?>
            <tr>
              <td width="35%" class="items"><?php echo $item->product;?></td>
              <td width="34%" class="items"><?php echo $item->qty;?></td>
              <td width="34%" class="items"><?php echo number_format(($item->subtotal), 2); ?></td>
            </tr>

            <?php
              }
            }

            ?>

          </table>
        </td>
      </tr>
      <tr>
        <td>TOTAL</td>
        <td>&nbsp;</td>
        <td style="border-bottom:thick#000000 double"><span
            class="style1">₦<?php echo number_format($order_data->total, 2); ?></span></td>
      </tr>
      <tr>
        <td colspan="2">AMOUNT TENDERED</td>
        <td><span style="border-bottom:thin #000000">₦<?php echo number_format($order_data->paid, 2); ?></span></td>
      </tr>
      <tr>
        <td colspan="2">BALANCE:</td>
        <td><span style="border-bottom:thin #000000">₦<?php echo number_format($order_data->due, 2); ?></span></td>
      </tr>
       <tr>
    <td colspan="3" style="border-bottom:thin solid #000">PAID VIA: <?php echo $order_data->paymentType; ?></td>
  </tr> 
      <tr>
        <td colspan="3" align="center" valign="middle" style="font-size:15px">
          <hr>
          <center>
            <img src="../assets/images/kme-qr-code.png" width="100">
          </center>
          <span style="border-bottom:thin #000000" align="center">
            <strong>Copyright &copy; <?php echo date("Y"); ?> <?php echo $Controller->app_short();?></strong>
          </span>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>