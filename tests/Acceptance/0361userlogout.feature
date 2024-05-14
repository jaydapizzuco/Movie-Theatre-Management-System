Feature: userLogout

As a user, 
I want to log out so that my information is secure and my account cannot be accessed by other web users.

Scenario: userLogout
	Given that I am logged into the user account “John Smith” 
    And I am on my profile page
	When I click on the logout option, 
	Then I should be redirected to the homepage 
	And when I try to click on Account I should be redirected to the login page