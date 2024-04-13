Feature: checkrevenue

As a user, 
As an administrator
I want to have access to the movie database so that I can check revenue information.

Scenario: checkrevenue
	Given I am on the admin’s profile page.
	When I click the view “revenue” button, 
	Then I am redirected to the revenue page.