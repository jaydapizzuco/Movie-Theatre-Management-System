Feature: adminlogout

As a user, 
I want to log out so that my information is secure and my account cannot be accessed by other web users.

Scenario: logout of my admin account
	Given that I am logged into the user account “Admin”,
	when I click on the logout option, 
	then I should be redirected to the homepage and the userId session variable should be null.