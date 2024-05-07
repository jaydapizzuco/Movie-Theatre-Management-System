Feature: selectscreeningtime

As a user,
I want to select screen times to display pages with the seats according to the screen time.

Scenario: selectscreeningtime
  Given I am on the Select Schedule page for "Example Movie 2"
  And I select "Sunday : 1:00:00"
  When I click on the "Select schedule" button
  Then I am redirected to the seat selection page for "Sunday : 1:00:00"