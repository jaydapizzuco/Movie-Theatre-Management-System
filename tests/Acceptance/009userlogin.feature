Feature: userlogin

As a user
I want to log into my account so that I can have access to user privileges

Scenario: userlogin
	Given I am on the login page (localhost/User/Login)
	And the account with email “test@email.com” 
	And password “test123” exists in the database, 
	When I enter  the email “test@email.com” 
	And password “test123”  
	And click on the log in button, 
	Then I should be redirected to the profile page
	And see “John Doe" as my name
	And the value inside the userId session variable should match the value of the userId for "test@email.com" in the database .