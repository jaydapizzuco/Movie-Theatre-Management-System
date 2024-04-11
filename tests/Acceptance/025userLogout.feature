Feature: userLogout

As a user, 
I want to log out so that my information is secure and my account cannot be accessed by other web users.

Scenario: logout of my user account
	Given that I am logged into the user account “User1” and my userId is "1" and the value stored inside the userId session variable is "1", 
	when I click on the logout option, 
	then I should be redirected to the homepage and the userId session variable should be null.