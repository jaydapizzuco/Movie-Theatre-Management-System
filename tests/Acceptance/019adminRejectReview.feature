Feature: adminRejectReview

As an administrator, 
I want to be able to read user reviews so that I can approve or reject them.

Scenario: adminRejectReview
	Given I am on the Newly Submitted Reviews page 
	And I click on the review with id 1, 
	When I click reject review  
	Then the review with id 1 is removed from the database 
	And I am redirected to the New Reviews page. 