Feature: publishReview

As a user, 
I want to leave reviews in order to be able to give feedback on previously viewed movies.

Scenario: publishReview
	Given I am logged into “Demo User” 
	And I am on the individual page for “Movie 1” 
	And “Movie 1” is found in my order history, 
	When I click write a review for “Movie 1” 
	Then I am redirected ti the create review page for Movie 1
	And the message I write is “I really did not enjoy this movie”, 
	When I click on submit review
	Then I am redirected to review submitted page 
	And I see my review with the  
	he message “I really did not enjoy this movie”
	And this review is added to the database
