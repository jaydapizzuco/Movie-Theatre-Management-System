Feature: modifyaboutus

 As an administrator,
 I want to modify information on the About us page to keep information up to date. 

Scenario: modifyaboutus
  Given I am Logged in as Admin
  And I am on the (/User/updateAbout) page
  And I change the email to 'movietheater@email.com'
  And I change the description to "Welcome! We are a small Movie Theater company catered to all. All the popular new movies can be found on our website."
  And I click on the "Update" button
  Then the About us information gets updated in the database 
  And I am redirected to the profile page
