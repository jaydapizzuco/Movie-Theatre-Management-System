Feature: adminApproveReview

As an administrator, 
I want to be able to read user reviews so that I can approve or reject them.

Scenario: adminApproveReview
	Given I am on the New Reviews page 
	And I click on the review with id 1, 
	When I click approve review 
	Then the review status for the review with id 1  is set to true 
	And I am redirected to the New Reviews page. 
