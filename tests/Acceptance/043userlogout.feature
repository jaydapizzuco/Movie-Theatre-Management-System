Feature: userLogout

As a user, 
I want to log out so that my information is secure and my account cannot be accessed by other web users.

Scenario: userLogout
	Given that I am logged into the user account “John Smith” 
	And my userId is "1" 
	And the value stored inside the userId session variable is "1", 
	When I click on the logout option, 
	Then I should be redirected to the homepage and the userId session variable should be null.