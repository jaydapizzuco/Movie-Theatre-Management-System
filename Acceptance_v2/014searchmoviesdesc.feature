Feature: searchformoviesdesc

As a user, 
I want to search for movies so that I can  quickly find the information for a specific movie.

Scenario: searchformoviesdesc
	Given I am logged in and on the movies page  (/Movies/index), 
	When I enter "This is a movie about horses" in the search bar
	And click on the button "Search by Description",
	Then I see "Example Movie 2"