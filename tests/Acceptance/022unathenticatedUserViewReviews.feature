Feature: unathenticatedUserReadReviews

As an unauthenticated user, 
I want to read reviews on movies so that I can make a well-informed decision about the movie I want to watch.

Scenario: unathenticatedUserReadReviews
	Given I am on the individual movie page for "Movie1", 
	When I click on see reviews, 
	Then I should see reviews for "Movie1" submitted by other users. 