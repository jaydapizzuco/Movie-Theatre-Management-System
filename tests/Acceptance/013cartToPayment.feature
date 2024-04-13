Feature: cartToPayment

As a user
I want to place orders so that I can purchase my tickets.

Scenario: cartToPayment
	Given I am on my cart page and I have a ticket for ‘Example Movie’ with seat ‘A1’ that the price of $10, 
	When I click on place order, 
	Then I should be redirected to the payment page 
	And I should see the ticket for ‘Example Movie’ with seat ‘A1’
	And the price is $10