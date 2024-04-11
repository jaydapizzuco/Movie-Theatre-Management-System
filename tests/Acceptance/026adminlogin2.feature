Feature: adminlogin 

  As an administrator, 
  I want to log into my account so that I can have access to admin privileges.

Scenario: try logging in as admin 
  Given I am on the login page
  when I enter username ‘admin’ 
  and password ‘admin123’  
  then I am redirected to the admin’s profile page.

