Feature: deleteschedule

 As an administrator,
 I want to delete screening times from movies so that unavailable screening times are not shown to users.

Scenario: deleteschedule
  Given I am on an individual movie page
  When I click the 'delete' screening time button
  And the day is "Friday" 
  And the time is "7:05" 
  And I click 'Delete'
  Then I am redirected to AdminIndex page.