Feature: deletemovie

As a user, 
As an administrator
I want to delete movies so that a website user only sees movies that are currently being shown.

Scenario: logout of my user account
	Given I am on the movie page for “Example Movie”, 
	when I click on “delete”, 
	then the movie status for “Movie 2” is changed in the database to inactive
	and I am redirected to the browse movie page. 
