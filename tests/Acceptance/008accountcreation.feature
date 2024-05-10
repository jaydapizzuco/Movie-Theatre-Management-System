Feature: accountcreation

As an unauthenticated user, 
I want to be able to create an account so that I access authenticated user content.

Scenario: accountcreation
	Given I am on the registration page
	And I enter my email
	And I enter John Doe
	And my password is “test123”
	When I click the Registration button 
	Then I am redirected to the login page
	And the user John Doe is created in the database
