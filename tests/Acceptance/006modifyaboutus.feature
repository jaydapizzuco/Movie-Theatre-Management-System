Feature: modifyaboutus

 As an administrator,
 I want to modify information on the About us page to keep information up to date. 

Scenario: modifyaboutus
  Given I am on the updateAbout page
  And I change the email to "movietheater@email.com"
  And I change the description to "Welcome! We are a small Movie Theater company catered to all. All the popular new movies can be found on our website."
  And I click on the "Update" button
  And I am redirected to the profile page
