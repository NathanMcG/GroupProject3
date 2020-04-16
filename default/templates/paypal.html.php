<script src="https://www.paypal.com/sdk/js?client-id=AcJ43Pmu32jG__IfqMrBm9c7WJ-xYleTo7oeZ8LlIwOYB43ZFX_kKhD09orxi2dF5QfKpOTHoV9DsvLc&currency=GBP"></script>

<div id="paypal-button-container" style="width: 60%;"></div>

<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        currency: 'GBP',
                        value: '<?=$total?>'
                                
                    }
                }],
                application_context: {
                    shipping_preference: 'NO_SHIPPING'
                }
            });
        },
        onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
            console.log(data);
            return actions.order.capture().then(function(details) {
            // This function shows a transaction success message to your buyer.
                console.log(details);
                console.log(details.payer.address.toString());
                console.log(details.payer.email_address);
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
</script>