Feature: updatemovie

As an administrator, I want to edit movie information so that I can keep information current and update the screening schedules.

Scenario: updating existing movie 
	Given I am on the update movie page for “Movie 2”, 
	When I edit “Movie 2’s” information to movie title is “Example Movie” and click modify, 
	Then I should be redirected to movie details page with the title “Example Movie”
	And then the movie with “Movie 2” does not exist in the database but the movie with title “Example Movie” does.


