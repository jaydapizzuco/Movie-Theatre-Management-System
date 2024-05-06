Feature: viewreviews

As a user, 
I want to view reviews associated with a movie in order too see the public opinion on a movie.

Scenario: viewreviews
	Given I am logged into the account "Demo User"
	And I am on the individual page of "Example Movie 2"
	When I click on the "View Reviews" button 
	Then I am redirected to the reviews page of the movie with all the reviews associated to the movie.