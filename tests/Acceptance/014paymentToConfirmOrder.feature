Feature: PaymentandOrderConfirmation

As a user, 
I want to place orders so that I can purchase my tickets.

Scenario: PaymentandOrderConfirmation
	Given I am logged into ‘Test User’ and on the payment page and I have a ticket for ‘Movie 1’ with seat ‘A1’ that costs $10, 
	When the cardholder’s name is not null 
	And my card number is is 16 digits
	And the expiration date is greater than the current date
	And the CVV is 3 digits 
	And I click Confirm Payment
	Then I am redirected to the order confirmation page 
	And the ticket ‘Movie 1’ with seat ‘A1’ with  $10 with account ‘Test User’ gets added to the database.
