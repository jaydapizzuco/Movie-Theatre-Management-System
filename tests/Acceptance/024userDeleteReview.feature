Feature: deleteReview

As a user, 
I want to delete reviews in order to delete previously submitted reviews  that no longer reflect my thinking or that I no longer wish to have public.	

Scenario: deleteReview
	Given I am logged into the account User1 
	And on my profile page
	When I click on the delete button for the review for Movie1 with the title “Excellent Movie”, 
	Then the review for Movie1 with the title “Excellent Movie” is deleted from the database and my profile
	And I am redirected to my profile page.