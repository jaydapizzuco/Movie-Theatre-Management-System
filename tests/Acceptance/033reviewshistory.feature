Feature: viewreviewshistory

As a user, 
I want to view my reviews history to be able to modify and delete my reviews.

Scenario: viewreviewshistory
	Given I am logged into the account "Demo User"
	And I am on the profile page,
	When I click on "Reviews" in the navigation bar 
	Then I am redirected to the reviews history page with all the reviews associated with the user ID of "Demo User"