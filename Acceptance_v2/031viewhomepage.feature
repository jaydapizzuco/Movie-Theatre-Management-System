Feature: viewhomepage

 As a user,
 I want to access the home page to be able to see the most popular movies.

Scenario: viewhomepage
  Given I am on the profile page
  When I click on Home Page 
  Then I am redirected to the Home page
  And the first movie displayed is Money Man