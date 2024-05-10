Feature: userlogin

As a user
I want to log into my account so that I can have access to user privileges

Scenario: userlogin
	Given I am on the login page 
	And the account with test email exists in the database
	When I enter  the email 
	And password “test123”  
	And click on the log in button, 
	Then I should be redirected to the profile page
	And see “John Doe" as my name