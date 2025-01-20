<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
        body {
            background-color:rgb(167, 202, 169); /* Light gray background */
        }
        .hero_area {
            background-color:rgb(244, 178, 178); /* Light blue background */
        }
        .input-container{
            position:absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        .button-container{
            margin-top:10px ;
        }
    </style>
</head>
<body>
  <div class="hero_area">
    @include('home.header')
  </div>

    <form action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
        <!-- Visible and non-editable total amount field -->
         <div class="input-container">
         <label for="total_amount">Total Amount:</label>
        <input type="text" id="total_amount" name="total_amount" value="{{ $totalAmount }}" readonly required>
        <div class="button-container"><input value="Pay Now with Esewa" type="submit" style="background-color: green; color: white; border: none; padding: 10px 10px;"></div>
         </div>
        
        <!-- hidden fields -->
        <input type="hidden" id="amount" name="amount" value="{{ $totalAmount - $taxAmount }}" required>
        <input type="hidden" id="tax_amount" name="tax_amount" value="{{ $taxAmount }}" required>
        <input type="hidden" id="transaction_uuid" name="transaction_uuid" value="{{ $transactionUuid }}" required>
        <input type="hidden" id="product_code" name="product_code" value="EPAYTEST" required>
        <input type="hidden" id="product_service_charge" name="product_service_charge" value="0" required>
        <input type="hidden" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
        <input type="hidden" id="success_url" name="success_url" value="http://localhost:8000/payment_success" required>
        <input type="hidden" id="failure_url" name="failure_url" value="http://localhost:8000/payment_failed" required>
        <input type="hidden" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required>
        <input type="hidden" id="signature" name="signature" value="{{ $signature }}" required>

        <!-- Submit button -->
       
    </form>
    @include('home.footer')

  @include('home.script')

</body>
</html>