Feature: adminlogin 

  As an administrator, 
  I want to log into my account so that I can have access to admin privileges.

Scenario: adminlogin
 Given I am on the login page
  When I enter email for admin
  And I enter password ‘123’  
  Then I am redirected to the admin’s profile page.

