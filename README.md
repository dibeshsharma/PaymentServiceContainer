Service Container

PayOrderController has 2 dependency injection OrderDetails and PaymentGatewayContract.
OrderDetails uses PaymentGatewayContract.
PaymentGatewayContract is an interface for BankPaymentGateway and CreditPaymentGateway.
AppServiceProvider registers PaymentGatewayContract and currency return the app with currency set to USD.


