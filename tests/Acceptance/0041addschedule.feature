Feature: addschedule

 As an administrator,
 I want to add screening times to movies so that more screening times are available for movies.


Scenario: addschedule
  Given I am on an individual movie page for example2
  When I click "Add a new screening time" button, 
  Then I pick "Friday" as the day of the screening
  And I pick "7:05" as the time of the screening,
  When I click "Add" button
  Then I am redirected to the adminIndex Page
  And the new screening time was added to database
