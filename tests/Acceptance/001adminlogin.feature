Feature: 001adminlogin 

  As an administrator, 
  I want to log into my account so that I can have access to admin privileges.

Scenario: try logging in as admin 
  Given I am on the login page
  When I enter username admin
  And password admin123  
  Then I am redirected to the admin's profile page.
