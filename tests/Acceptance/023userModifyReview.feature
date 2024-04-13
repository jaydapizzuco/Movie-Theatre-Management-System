Feature: updateReview

As a user, 
I want to modify reviews in order to edit previously submitted reviews if my thoughts on the film change.

Scenario: updateReview
	Given I am logged into “Test User” 
	And on the submitted reviews page for my profile for “Example Movie”
	And the title of the review is “Good Movie!” 
	And the message is “hello”, 
	When I edit the review to say “changed”, 
	Then my review with title “Good Movie” 
	And message “hello” is changed in the database to have the message as “changed”
	And I should be redirected to the submitted reviews page that shows the modifications. 