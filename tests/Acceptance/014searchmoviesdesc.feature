Feature: searchformoviesdesc

As a user, 
I want to search for movies so that I can  quickly find the information for a specific movie.

Scenario: searchformoviesdesc
	Given I am logged in 
	And  I amon the movies page 
	When I enter description in the search bar
	And click I on the search by description button 
	Then I should be redirected to the search results page 
	And I should see the results for example movie 2