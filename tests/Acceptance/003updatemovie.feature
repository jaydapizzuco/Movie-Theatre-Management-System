Feature: updatemovie

As an administrator, I want to edit movie information so that I can keep information current and update the screening schedules.

Scenario: updatemovie
	Given I am on the update movie page for “Example Movie”, 
	When I edit “Example Movie’s” information to movie title is “Example Movie 2” and click Update, 
	Then I should be redirected to movie details page with the title “Example Movie 2”