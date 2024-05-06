Feature: viewaboutus

As a user,
I want to view the about us page in order to get information about the movie theatre.

Scenario: viewaboutus
  Given I am on "Home" page
  When I click on the "About Us" navigation button
  Then I am redirected to the about us page with all the information