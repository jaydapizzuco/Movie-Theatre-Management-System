Feature: searchformovies

As a user, 
I want to search for movies so that I can  quickly find the information for a specific movie.

Scenario: searchformovies
	Given I am logged in and on the movies page  (/Movies/Browse), 
	When I search for "Example Movie", 
	Then I see "Example Movie"


