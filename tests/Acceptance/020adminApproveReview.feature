Feature: adminApproveReview

As an administrator, 
I want to be able to read user reviews so that I can approve or reject them.

Scenario:
	Given I am on the New Reviews page and I click on the review with id 1, 
	when I click approve review 
	then the review status for the review with id 1  is set to true 
	and I am redirected to the New Reviews page. 
