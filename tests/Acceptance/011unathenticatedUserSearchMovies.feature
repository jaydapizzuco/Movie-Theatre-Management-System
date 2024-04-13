Feature: unauthenticatedUserSearchMovies

As an unauthenticated user,
I want to be able to search for a movie so that I can easily find a specific movie.

Scenario: unauthenticatedUserSearchMovies
	Given I am on the browse Movies page 
	When I search for “Movie 1”, 
	Then “Movie 1” should be displayed.