Feature: userlogindemo

As a user
I want to log into my account so that I can have access to user privileges and

Scenario: userlogindemo
	Given I am on the "login page"
	When I enter the email in email field 
	And password demo123 in psw field 
	And click on the login button, 
	Then I should be redirected to the profile page
	And see Demo as my name