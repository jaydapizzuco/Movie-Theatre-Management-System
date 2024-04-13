Feature: seatselectionaddingtickets

As a user
I want to add movie tickets to my cart 
so I can reserve multiple seats before paying.

Scenario: seatselectionaddingtickets
	Given I am on the seat selection page for "Example Movie", 
	When I select seat ‘A1’ 
	And click the add to cart button, 
	Then I should see the ticket for "Example Movie" with seat ‘A1’ in my cart with the subtotal price.