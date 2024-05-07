Feature: addmovie

 As an administrator,
 I want to add movies to the website so that users can see new movies 


Scenario: addmovie
  Given I am on the add movie page, 
  When the movie title is “Example Movie”
  And the source link of the cover image is “Posterjpg”
  And the director is “abc”
  And the movie length is “105”
  And the description is “This is a movie about horses”
  And the link to the trailer is “wwwyoutubecom”
  And the Screening day is “Sunday”
  And the Screening time is “1:00”
  And I click Add Movie, 
  Then I see the “Example Movie”
   
