Feature: accountcreation

As an unauthenticated user, 
I want to be able to create an account so that I access authenticated user content.

Scenario: creating a user account 
	Given I am on “/User/login/”
	And I click “Register” 
	When my email is “test@email.com”
	and my name is "John Doe"
	and my password is “test123”
	And I click the Registration button 
	then my account with email “test@email.com” and name "John Doe" and password “test123” gets added to the database 
	and I am redirected to “/User/login/”
