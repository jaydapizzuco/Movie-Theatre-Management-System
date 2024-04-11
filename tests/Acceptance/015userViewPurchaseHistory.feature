Feature: userViewPurchaseHistory

As a user,
I want to view my profile page in order to view my purchase history and points.

Scenario: viewing purchase history on my profi
	Given I am on User1’s profile page and my userId is 1, 
	when I click the view purchase history button, 
	then I am redirected to the purchase history page and shown all previous orders that have 1 as their userId in the database.
