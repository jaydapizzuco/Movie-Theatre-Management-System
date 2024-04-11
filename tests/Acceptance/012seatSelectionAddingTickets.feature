Feature: seatselectionaddingtickets

As a user
I want to add movie tickets to my cart 
so I can reserve multiple seats before paying.

Scenario: selecting seats and adding tickets to the cart
	Given I am on the seat selection page for "Example Movie", 
	when I select seat ‘A1’ 
	and click the add to cart button, 
	then I should see the ticket for "Example Movie" with seat ‘A1’ in my cart with the subtotal price.