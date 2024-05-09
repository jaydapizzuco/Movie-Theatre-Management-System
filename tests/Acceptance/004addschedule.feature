Feature: addschedule

 As an administrator,
 I want to add screening times to movies so that more screening times are available for movies.


Scenario: addschedule
  Given I am on an individual movie page
  When I click "Add a new screening time", 
  Then I pick "Sunday" as the day
  And I pick "1:00" as the time,
  When I click the "Add" button
  Then I am redirected to adminIndex Page
  And the new screening time was added to the database
