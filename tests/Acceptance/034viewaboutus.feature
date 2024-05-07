Feature: viewsaboutus

As a user,
I want to view the about us page to see information on the website.

Scenario: viewsaboutus
  Given I am on the Home page
  When I click on About us in the navigation bar
  Then I am redirected to the about us page
  And the email displayed is "movietheater@email.com"