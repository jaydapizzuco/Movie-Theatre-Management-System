Feature: deleteschedule

 As an administrator,
 I want to delete screening times from movies so that unavailable screening times are not shown to users.

Scenario: deleteschedule
  Given I am on an individual movie page
  When I click the 'delete' screening time button
  And the day is "Sunday" 
  And the time is "1:00" 
  And I click 'Delete'
  Then I am redirected to AdminIndex page.