<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<script src="https://js.stripe.com/v3/"></script>
<form action="{{ url('stripecharge') }}" method="post" id="payment-form">
    <div class="form-row">
        <p><input type="text" name="amount" placeholder="Enter Amount" /></p>
        <p><input type="email" name="email" placeholder="Enter Email" /></p>
        <label for="card-element">
        Credit or debit card
        </label>
        <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
        </div>
     
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>
    <button>Submit Payment</button>
    {{ csrf_field() }}
</form>
<script>
var publishable_key = 'pk_test_51GuiySDSVAZTTXtTj6soTjZzhxRHIdHnXnE9HhC8iiCrpWhuQJHGzDTbZ4hcGKchqE6MT3rsWXQUf6pQDRld41J000cSrTafgT';
</script>
<script src="{{ asset('/js/card.js') }}"></script>