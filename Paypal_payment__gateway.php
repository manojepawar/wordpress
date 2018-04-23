


<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin: 20px 0px 20px 0px;">
       <input type="hidden" name="cmd" value="_xclick">
       <input type="hidden" name="business" value="test@test.com">
       <input type="hidden" name="item_name" value="Donation for website">
       <input type="hidden" name="currency_code" value="INR">
     <input type="text" name="fname" value="Enter First name">
     <input type="text" name="lname" value="Enter Last name">
     <input type="text" name="emil" value="Enter Email">

   <select name="amount" style="margin: 0px 0px 11px 0px;">
          <option selected value="10.00">Please Select Amount</option>
          <option value="10.00">10.00</option>
          <option value="25.00">25.00</option>
          <option value="50.00">50.00</option>
          <option value="100.00">100.00</option>
    </select><br>

 <label> Credit Card <label>
          <input type="radio" value="Credit Card" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="PP-submit" alt="Make a donation with PayPal"><br>
  <label> Debit Card<label>
          <input type="radio" value="Debit Card" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="PP-submit" alt="Make a donation with PayPal"><br>

     <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="PP-submit" alt="Make a donation with PayPal"><br>

</form>

 <form action="https://www.paypal.com/cgi-bin/webscr" method="post"> <?php // remove sandbox=1 for live transactions ?>
    
    <input type="hidden" name="action" value="process" />
    <input type="hidden" name="cmd" value="_cart" /> <?php // use _cart for cart checkout ?>
    <input type="hidden" name="currency_code" value="INR" />
    <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
    <input type="hidden" name="product_id" value="<?php echo $model; ?>" /> 
    <input type="hidden" name="product_name" value="<?php echo $product_name; ?>" /> 
     <input type="hidden" name="product_quantity" value="1" />
    <input type="hidden" name="product_amount" value="<?php echo $total; ?>" />
    <input type="hidden" name="payer_fname" value="<?php  echo $checkout['name'];  ?>" />
    <input type="hidden" name="payer_email" value="<?php  echo $checkout['email'];  ?>" />
    <input type="hidden" name="payer_address" value="<?php  echo $checkout['address'];  ?>" />
    <input type="submit" name="submit" value="Pay now using Paypal" /> 
    </form>
	  
