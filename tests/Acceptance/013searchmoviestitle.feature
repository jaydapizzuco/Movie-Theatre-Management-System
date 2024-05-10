Feature: searchformoviestitle

As a user, 
I want to search for movies so that I can  quickly find the information for a specific movie.

Scenario: searchformoviestitle
	Given I am logged in and on the movies page 
	When I enter "Example Movie 2" in the search bar
	And click on the button "Search by Title",
	Then I see "Example Movie 2"