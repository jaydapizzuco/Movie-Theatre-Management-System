Feature: updateReview

As a user, 
I want to modify reviews in order to edit previously submitted reviews if my thoughts on the film change.

Scenario: updateReview
	Given I am logged into “Demo User” 
	And I am on the reviews history page for my profile
	And the title of the review is Good Movie! and the message is hello, 
	When I edit the review to say “changed”
	And click Submit the review
	Then my review with title “Good Movie” and message “hello” is changed in the database to have the message as “changed”
	And I should be redirected to the reviews history page.