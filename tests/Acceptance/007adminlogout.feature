Feature: adminlogout

As a user, 
I want to log out so that my information is secure and my account cannot be accessed by other web users.

Scenario: adminlogout
	Given that I am logged into the user account “Admin”,
	And userId is "2"  
	And I'm on the adminProfile page
	When I click on the logout option, 
	Then I should be redirected to the homepage 
	And if I click on Account I should be redirected to the login page.