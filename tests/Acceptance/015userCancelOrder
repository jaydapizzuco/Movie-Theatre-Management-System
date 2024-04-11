Feature: cancelOrder

As a user, 
I want to cancel orders so that I can be refunded for tickets to movies that I am no longer able to attend.

Scenario: canceling an order
	Given I am logged into “Test User” and I am on the order history page for “Movie 1” and my tickets are for “April 10th, 2024” and the current date is “April 7th, 2024” (more than 2 days prior to the date indicated on my movie tickets), 
	When I click the cancel order button,
	Then order status for “Movie 1” in the database becomes “false” 
	and I should be redirected to the order history page for “Test User”
	And I should see that the order is canceled.