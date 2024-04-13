Feature: userprofilechange

As a user
I want to update my account so that I can modify my account information  in order to keep it current


Scenario: userprofilechange
	Given I am on the profile page (localhost/User/Profile)
	And the password hash stored in the database for my account corresponds to “password123”,
	When I update my email to “user1@email.com” and enter the password “password123” , 
	Then I should be redirected to my profile page and see the email as “user1@email.com”.