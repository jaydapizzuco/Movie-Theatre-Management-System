Feature: deletemovie

As a user, 
As an administrator
I want to delete movies so that a website user only sees movies that are currently being shown.

Scenario: deletemovie
	Given I am on the movie page for “Example Movie”, 
	When I click on “delete”, 
	Then the movie status for “Movie 2” is changed in the database to inactive
	And I am redirected to the browse movie page. 
