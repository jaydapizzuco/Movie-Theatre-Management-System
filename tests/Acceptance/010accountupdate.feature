Feature: userprofilechange

As a user
I want to update my account so that I can modify my account information  in order to keep it current

Scenario: userprofilechange
	Given I am logged into the account with the test email 
	And I am on the update profile page 
	When I update my name to “John Smith” 
	And I enter the password “test123” 
	And I click  Submit
	Then I should be redirected to my profile page 
	And I should see the name as “John Smith”
	And the name should be updated in the database