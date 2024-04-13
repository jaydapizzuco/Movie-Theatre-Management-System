Feature: publishReview

As a user, 
I want to leave reviews in order to be able to give feedback on previously viewed movies.

Scenario: publishReview
	Given I am logged into “Test User” 
	And I am on the individual page for “Movie 1” 
	And “Movie 1” is found in my order history, 
	When I click write a review for “Movie 1” 
	And the review title is “Great Movie!”
	And the message is “Best movie I’ve seen in a long time!!!”, 
	Then the review with title “Great Movie 
	And the message “Best movie I’ve seen in a long time!!!” is added to the database for “Movie 1”
	And I am redirected to the reviews for “Movie 1”
