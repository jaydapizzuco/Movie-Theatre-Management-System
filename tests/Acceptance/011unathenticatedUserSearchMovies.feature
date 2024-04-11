Feature: unauthenticatedUserSearchMovies

As an unauthenticated user,
I want to be able to search for a movie so that I can easily find a specific movie.

Scenario: searching for a specific movie
	Given I am on the browse Movies page 
	when I search for “Movie 1”, 
	then “Movie 1” should be displayed.