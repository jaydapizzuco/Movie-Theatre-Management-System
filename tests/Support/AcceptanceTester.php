<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
      /**
     * @Given I am on the login page
     */
     public function iAmOnTheLoginPage()
     {
         $this->amOnPage("/User/login");
     }

      /**
     * @When I enter email for admin
     */
     public function iEnterEmailForAdmin()
     {
          $this->fillField('email','admin@email.com');
     }

    /**
     * @When I enter password ‘:num1:num2:num3’
     */
     public function iEnterPassword123()
     {
        $this->fillField('password','123');
        $this->click("Login");
     }

    /**
     * @Then I am redirected to the admin’s profile page:num1
     */
     public function iAmRedirectedToTheAdminsProfilePage()
     {
          $this->see("Admin");
     }

         /**
     * @Given I am on the add movie page,
     */
     public function iAmOnTheAddMoviePage()
     {
        $this->setCookie('user_id', '2');
       $this->amOnPage("/Movie/create?");
     }

    /**
     * @When the movie title is “Example Movie”
     */
     public function theMovieTitleIsExampleMovie()
     {
         $this->fillField('title','Example Movie');
     }

      /**
     * @When the source link of the cover image is “Posterjpg”
     */
     public function theSourceLinkOfTheCoverImageIsPosterjpg()
     {
       $this->fillField('image','https://upload:num1wikimedia:num1org/wikipedia/en/b/bc/Abigail_Official_Poster.jpg');
     }

    /**
     * @When the director is “abc”
     */
     public function theDirectorIsabc()
     {
          $this->fillField('director','abc');
     }

    /**
     * @When the movie length is “:num1:num2:num3”
     */
     public function theMovieLengthIs($num1, $num2, $num3)
     {
        $this->fillField('length','123');
     }

    /**
     * @When the description is “This is a movie about horses”
     */
     public function theDescriptionIsThisIsAMovieAboutHorses()
     {
          $this->selectOption('description','This is a movie about horses');
     }

         /**
     * @When the release date is entered
     */
     public function theReleaseDateIsEntered()
     {
          $this->selectOption('release_date','2024-06-23');
     }

      /**
     * @When the link to the trailer is “wwwyoutubecom”
     */
     public function theLinkToTheTrailerIswwwyoutubecom()
     {
           $this->fillField('trailer','www.youtube.com');
     }
     

    /**
     * @When the Screening day is “Sunday”
     */
     public function theScreeningDayIsSunday()
     {
         $this->selectOption('days','Sunday');
     }

    /**
     * @When the Screening time is “:num1::num2:num2”
     */
     public function theScreeningTimeIs($num1, $num2, $num3)
     {
        $this->selectOption('times','1:00');
     }

    /**
     * @When I click Add Movie,
     */
     public function iClickAddMovie()
     {
          $this->click("Add Movie");
     }

    /**
     * @Then I am redirected to the movie page
     */
     public function iAmRedirectedToTheMoviePage()
     {
          $this->amOnPage("/Movie/create?");
     }

    /**
     * @Then I see the “Example Movie”
     */
     public function iSeeTheExampleMovie()
     {
         $this->see("Example Movie");
     }


    /**
     * @Given I am on the update movie page for “Example Movie”,
     */
     public function iAmOnTheUpdateMoviePageForExampleMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the update movie page for “Example Movie”,` is not defined");
     }

    /**
     * @When I edit “Example Movie’s” information to movie title is “Example Movie :num1” and click Update,
     */
     public function iEditExampleMoviesInformationToMovieTitleIsExampleMovieAndClickUpdate($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I edit “Example Movie’s” information to movie title is “Example Movie :num1” and click Update,` is not defined");
     }

    /**
     * @Then I should be redirected to movie details page with the title “Example Movie :num1”
     */
     public function iShouldBeRedirectedToMovieDetailsPageWithTheTitleExampleMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to movie details page with the title “Example Movie :num1”` is not defined");
     }

    /**
     * @Then then the movie with title “Example Movie” does not exist in the database but the movie with title “Example Movie :num1” does:num2
     */
     public function thenTheMovieWithTitleExampleMovieDoesNotExistInTheDatabaseButTheMovieWithTitleExampleMovieDoes($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `then the movie with title “Example Movie” does not exist in the database but the movie with title “Example Movie :num1” does:num2` is not defined");
     }

    /**
     * @Given I am on an individual movie page
     */
     public function iAmOnAnIndividualMoviePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on an individual movie page` is not defined");
     }

    /**
     * @Given the movie title is “Example Movie”,
     */
     public function theMovieTitleIsExampleMovie2()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the movie title is “Example Movie”,` is not defined");
     }

    /**
     * @When I click :arg1,
     */
     public function iClick($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click :arg1,` is not defined");
     }

    /**
     * @Then I am redirected to the schedule creation page
     */
     public function iAmRedirectedToTheScheduleCreationPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the schedule creation page` is not defined");
     }

    /**
     * @Then I pick :arg1 as the day
     */
     public function iPickAsTheDay($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I pick :arg1 as the day` is not defined");
     }

    /**
     * @Then I pick :arg1 as the time,
     */
     public function iPickAsTheTime($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I pick :arg1 as the time,` is not defined");
     }

    /**
     * @When I click the :arg1 button
     */
     public function iClickTheButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the :arg1 button` is not defined");
     }

    /**
     * @Then a new Movie Schedule where day: :arg1, time: :arg2 and movie id: ID of :arg3 is added to the database
     */
     public function aNewMovieScheduleWhereDayTimeAndMovieIdIDOfIsAddedToTheDatabase($arg1, $arg2, $arg3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `a new Movie Schedule where day: :arg1, time: :arg2 and movie id: ID of :arg3 is added to the database` is not defined");
     }

    /**
     * @Then I am redirected to (/Movie/adminIndex):num1
     */
     public function iAmRedirectedToMovieadminIndex($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to (/Movie/adminIndex):num1` is not defined");
     }

    /**
     * @When I click to delete the screening time
     */
     public function iClickToDeleteTheScreeningTime()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click to delete the screening time` is not defined");
     }

    /**
     * @When the day is :arg1
     */
     public function theDayIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the day is :arg1` is not defined");
     }

    /**
     * @When the time is :arg1
     */
     public function theTimeIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the time is :arg1` is not defined");
     }

    /**
     * @Then I am redirected to the deletion confirmation page
     */
     public function iAmRedirectedToTheDeletionConfirmationPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the deletion confirmation page` is not defined");
     }

    /**
     * @Then the Movie Schedule where day: :arg1, time: :arg2 and movie id: ID of :arg3 is deleted to the database
     */
     public function theMovieScheduleWhereDayTimeAndMovieIdIDOfIsDeletedToTheDatabase($arg1, $arg2, $arg3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the Movie Schedule where day: :arg1, time: :arg2 and movie id: ID of :arg3 is deleted to the database` is not defined");
     }

    /**
     * @Given I am Logged in as Admin
     */
     public function iAmLoggedInAsAdmin()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am Logged in as Admin` is not defined");
     }

    /**
     * @Given I am on the (/User/updateAbout) page
     */
     public function iAmOnTheUserupdateAboutPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the (/User/updateAbout) page` is not defined");
     }

    /**
     * @Given I change the email to 'movietheater@email:num1com'
     */
     public function iChangeTheEmailTomovietheateremailcom($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I change the email to 'movietheater@email:num1com'` is not defined");
     }

    /**
     * @Given I change the description to :arg1
     */
     public function iChangeTheDescriptionTo($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I change the description to :arg1` is not defined");
     }

    /**
     * @Given I click on the :arg1 button
     */
     public function iClickOnTheButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the :arg1 button` is not defined");
     }

    /**
     * @Then the About us information gets updated in the database
     */
     public function theAboutUsInformationGetsUpdatedInTheDatabase()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the About us information gets updated in the database` is not defined");
     }

    /**
     * @Then I am redirected to the profile page
     */
     public function iAmRedirectedToTheProfilePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the profile page` is not defined");
     }

    /**
     * @Given that I am logged into the user account “Admin”,
     */
     public function thatIAmLoggedIntoTheUserAccountAdmin()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `that I am logged into the user account “Admin”,` is not defined");
     }

    /**
     * @Given userId is :arg1
     */
     public function userIdIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `userId is :arg1` is not defined");
     }

    /**
     * @Given the value stored inside the userId session variable is :arg1,
     */
     public function theValueStoredInsideTheUserIdSessionVariableIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the value stored inside the userId session variable is :arg1,` is not defined");
     }

    /**
     * @When I click on the logout option,
     */
     public function iClickOnTheLogoutOption()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the logout option,` is not defined");
     }

    /**
     * @Then I should be redirected to the homepage and the userId session variable should be null:num1
     */
     public function iShouldBeRedirectedToTheHomepageAndTheUserIdSessionVariableShouldBeNull($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the homepage and the userId session variable should be null:num1` is not defined");
     }

    /**
     * @Given I am on “/User/login/”
     */
     public function iAmOnUserlogin()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on “/User/login/”` is not defined");
     }

    /**
     * @Given I click “Register”
     */
     public function iClickRegister()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click “Register”` is not defined");
     }

    /**
     * @When my email is “test@email:num1com”
     */
     public function myEmailIstestemailcom($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my email is “test@email:num1com”` is not defined");
     }

    /**
     * @When my name is :arg1
     */
     public function myNameIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my name is :arg1` is not defined");
     }

    /**
     * @When my password is “test:num1:num2:num3”
     */
     public function myPasswordIstest($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my password is “test:num1:num2:num3”` is not defined");
     }

    /**
     * @When I click the Registration button
     */
     public function iClickTheRegistrationButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the Registration button` is not defined");
     }

    /**
     * @Then my account with email “test@email:num:num:num:num4com” and name :arg1 and password “test:num:num:num4:num:num4:num4” gets added to the database
     */
     public function myAccountWithEmailtestemailcomAndNameAndPasswordtestGetsAddedToTheDatabase($num1, $num2, $num3, $num4, $arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my account with email “test@email:num:num:num:num4com” and name :arg1 and password “test:num:num:num4:num:num4:num4” gets added to the database` is not defined");
     }

    /**
     * @Then I am redirected to “/User/login/”
     */
     public function iAmRedirectedToUserlogin()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to “/User/login/”` is not defined");
     }

    /**
     * @Given I am on the login page (localhost/User/Login)
     */
     public function iAmOnTheLoginPagelocalhostUserLogin()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the login page (localhost/User/Login)` is not defined");
     }

    /**
     * @Given the account with email “test@email:num1com”
     */
     public function theAccountWithEmailtestemailcom($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the account with email “test@email:num1com”` is not defined");
     }

    /**
     * @Given password “test:num1:num2:num3” exists in the database,
     */
     public function passwordtestExistsInTheDatabase($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password “test:num1:num2:num3” exists in the database,` is not defined");
     }

    /**
     * @When I enter  the email “test@email:num1com”
     */
     public function iEnterTheEmailtestemailcom($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter  the email “test@email:num1com”` is not defined");
     }

    /**
     * @When password “test:num1:num2:num3”
     */
     public function passwordtest($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password “test:num1:num2:num3”` is not defined");
     }

    /**
     * @When click on the log in button,
     */
     public function clickOnTheLogInButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `click on the log in button,` is not defined");
     }

    /**
     * @Then I should be redirected to the profile page
     */
     public function iShouldBeRedirectedToTheProfilePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the profile page` is not defined");
     }

    /**
     * @Then see “John Doe" as my name
     */
     public function seeJohnDoeAsMyName()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `see John Doe as my name is not defined");
     }

    /**
     * @Then the value inside the userId session variable should match the value of the userId for :arg1 in the database :num1
     */
     public function theValueInsideTheUserIdSessionVariableShouldMatchTheValueOfTheUserIdForInTheDatabase($num1, $arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step the value inside the userId session variable should match the value of the userId for :arg1 in the database :num1 is not defined");
     }

    /**
     * @Given I am on the profile page (localhost/User/Profile)
     */
     public function iAmOnTheProfilePagelocalhostUserProfile()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the profile page (localhost/User/Profile)` is not defined");
     }

    /**
     * @Given the password hash stored in the database for my account corresponds to “test:num1:num2:num3”,
     */
     public function thePasswordHashStoredInTheDatabaseForMyAccountCorrespondsTotest($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the password hash stored in the database for my account corresponds to “test:num1:num2:num3”,` is not defined");
     }

    /**
     * @When I update my name to “John Smith” and enter the password “test:num1:num2:num3” ,
     */
     public function iUpdateMyNameToJohnSmithAndEnterThePasswordtest($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I update my name to “John Smith” and enter the password “test:num1:num2:num3” ,` is not defined");
     }

    /**
     * @Then I should be redirected to my profile page and see the name as “John Smith”:num1
     */
     public function iShouldBeRedirectedToMyProfilePageAndSeeTheNameAsJohnSmith($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to my profile page and see the name as “John Smith”:num1` is not defined");
     }

    /**
     * @Given I am on the homepage,
     */
     public function iAmOnTheHomepage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the homepage,` is not defined");
     }

    /**
     * @When I click on Movies in the navigation,
     */
     public function iClickOnMoviesInTheNavigation()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on Movies in the navigation,` is not defined");
     }

    /**
     * @Then I should be redirected to the page with all the current movies:num1
     */
     public function iShouldBeRedirectedToThePageWithAllTheCurrentMovies($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the page with all the current movies:num1` is not defined");
     }

    /**
     * @Given I am on the movies page (/Movies/index),
     */
     public function iAmOnTheMoviesPageMoviesindex()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the movies page (/Movies/index),` is not defined");
     }

    /**
     * @When I click on :arg1,
     */
     public function iClickOn($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1,` is not defined");
     }

    /**
     * @Then I should be redirected to the movie details page:num1
     */
     public function iShouldBeRedirectedToTheMovieDetailsPage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the movie details page:num1` is not defined");
     }

    /**
     * @Given I am logged in and on the movies page  (/Movies/index),
     */
     public function iAmLoggedInAndOnTheMoviesPageMoviesindex()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in and on the movies page  (/Movies/index),` is not defined");
     }

    /**
     * @When I enter :arg1 in the search bar
     */
     public function iEnterInTheSearchBar($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 in the search bar` is not defined");
     }

    /**
     * @When click on the button :arg1,
     */
     public function clickOnTheButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `click on the button :arg1,` is not defined");
     }

    /**
     * @Then I see :arg1
     */
     public function iSee($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see :arg1` is not defined");
     }

    /**
     * @Given I am on the selectScreening page for :arg1
     */
     public function iAmOnTheSelectScreeningPageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the selectScreening page for :arg1` is not defined");
     }

    /**
     * @Given I select the screening time :arg1,
     */
     public function iSelectTheScreeningTime($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select the screening time :arg1,` is not defined");
     }

    /**
     * @Then I am redirected to the seat selection page for :arg1 on :arg2 at :arg3
     */
     public function iAmRedirectedToTheSeatSelectionPageForOnAt($arg1, $arg2, $arg3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the seat selection page for :arg1 on :arg2 at :arg3` is not defined");
     }

    /**
     * @Given I am on the seatSelection page for :arg1
     */
     public function iAmOnTheSeatSelectionPageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the seatSelection page for :arg1` is not defined");
     }

    /**
     * @Given the screening time :arg1,
     */
     public function theScreeningTime($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the screening time :arg1,` is not defined");
     }

    /**
     * @When I click on an available seat
     */
     public function iClickOnAnAvailableSeat()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on an available seat` is not defined");
     }

    /**
     * @Then the id of the seats I have selected is added to the seat array
     */
     public function theIdOfTheSeatsIHaveSelectedIsAddedToTheSeatArray()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the id of the seats I have selected is added to the seat array` is not defined");
     }

    /**
     * @Then the icon for this seat becomes the checkmark icon
     */
     public function theIconForThisSeatBecomesTheCheckmarkIcon()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the icon for this seat becomes the checkmark icon` is not defined");
     }

    /**
     * @Given I have selected a seat with id :arg1
     */
     public function iHaveSelectedASeatWithId($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I have selected a seat with id :arg1` is not defined");
     }

    /**
     * @When I click on :arg1
     */
     public function iClickOn2($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1` is not defined");
     }

    /**
     * @Then an order should be made with user id corresponding to the email :arg1
     */
     public function anOrderShouldBeMadeWithUserIdCorrespondingToTheEmail($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `an order should be made with user id corresponding to the email :arg1` is not defined");
     }

    /**
     * @Then the order_date should be the current date
     */
     public function theOrder_dateShouldBeTheCurrentDate()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the order_date should be the current date` is not defined");
     }

    /**
     * @Then the total price should be :arg1
     */
     public function theTotalPriceShouldBe($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the total price should be :arg1` is not defined");
     }

    /**
     * @Then the cart status should be :num1
     */
     public function theCartStatusShouldBe($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the cart status should be :num1` is not defined");
     }

    /**
     * @Then the order status should be one
     */
     public function theOrderStatusShouldBeOne()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the order status should be one` is not defined");
     }

    /**
     * @Then one ticket associated with the order should be created
     */
     public function oneTicketAssociatedWithTheOrderShouldBeCreated()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `one ticket associated with the order should be created` is not defined");
     }

    /**
     * @Then the movie id should be the movie id for :arg1
     */
     public function theMovieIdShouldBeTheMovieIdFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the movie id should be the movie id for :arg1` is not defined");
     }

    /**
     * @Then the movie_day should be :arg1
     */
     public function theMovie_dayShouldBe($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the movie_day should be :arg1` is not defined");
     }

    /**
     * @Then the movie_time should be :arg1
     */
     public function theMovie_timeShouldBe($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the movie_time should be :arg1` is not defined");
     }

    /**
     * @Then the seat_id should be :arg1
     */
     public function theSeat_idShouldBe($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the seat_id should be :arg1` is not defined");
     }

    /**
     * @Given I am on the Profile page
     */
     public function iAmOnTheProfilePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Profile page` is not defined");
     }

    /**
     * @Given I am logged in as :arg1
     */
     public function iAmLoggedInAs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in as :arg1` is not defined");
     }

    /**
     * @When I click on the cart button
     */
     public function iClickOnTheCartButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the cart button` is not defined");
     }

    /**
     * @Then I am redirected to the cart page
     */
     public function iAmRedirectedToTheCartPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the cart page` is not defined");
     }

    /**
     * @Then all my unprocessed orders are displayed
     */
     public function allMyUnprocessedOrdersAreDisplayed()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `all my unprocessed orders are displayed` is not defined");
     }

    /**
     * @Then I get redirected to the cart page
     */
     public function iGetRedirectedToTheCartPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I get redirected to the cart page` is not defined");
     }

    /**
     * @Then the seat displayed has an id of :num1:num2
     */
     public function theSeatDisplayedHasAnIdOf($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the seat displayed has an id of :num1:num2` is not defined");
     }

    /**
     * @Then the total price is :arg1
     */
     public function theTotalPriceIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the total price is :arg1` is not defined");
     }

    /**
     * @Given I am on the Cart page
     */
     public function iAmOnTheCartPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Cart page` is not defined");
     }

    /**
     * @When I click on the trash can button where the seat displayed is :num1:num2
     */
     public function iClickOnTheTrashCanButtonWhereTheSeatDisplayedIs($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the trash can button where the seat displayed is :num1:num2` is not defined");
     }

    /**
     * @Then the order gets removed from the cart
     */
     public function theOrderGetsRemovedFromTheCart()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the order gets removed from the cart` is not defined");
     }

    /**
     * @Then I am redirected to the refreshed cart page
     */
     public function iAmRedirectedToTheRefreshedCartPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the refreshed cart page` is not defined");
     }

    /**
     * @Given I am on the Select Schedule page for :arg1
     */
     public function iAmOnTheSelectSchedulePageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Select Schedule page for :arg1` is not defined");
     }

    /**
     * @Given I select :arg1
     */
     public function iSelect($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select :arg1` is not defined");
     }

    /**
     * @Then I am redirected to the seat selection page for :arg1
     */
     public function iAmRedirectedToTheSeatSelectionPageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the seat selection page for :arg1` is not defined");
     }

    /**
     * @Given I am on the Seat Selection page
     */
     public function iAmOnTheSeatSelectionPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Seat Selection page` is not defined");
     }

    /**
     * @Given I select seat :num1:num2
     */
     public function iSelectSeat($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select seat :num1:num2` is not defined");
     }

    /**
     * @Then I am redirected to the cart page where the order information is displayed
     */
     public function iAmRedirectedToTheCartPageWhereTheOrderInformationIsDisplayed()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the cart page where the order information is displayed` is not defined");
     }

    /**
     * @Given I have selected a seat with id :arg1 and a seat with id :arg2
     */
     public function iHaveSelectedASeatWithIdAndASeatWithId($arg1, $arg2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I have selected a seat with id :arg1 and a seat with id :arg2` is not defined");
     }

    /**
     * @Given I am on the cart page
     */
     public function iAmOnTheCartPage2()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the cart page` is not defined");
     }

    /**
     * @Then I am redirected to the checkout page
     */
     public function iAmRedirectedToTheCheckoutPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the checkout page` is not defined");
     }

    /**
     * @Then the title should be :arg1
     */
     public function theTitleShouldBe($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the title should be :arg1` is not defined");
     }

    /**
     * @Given I am on checkout page
     */
     public function iAmOnCheckoutPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on checkout page` is not defined");
     }

    /**
     * @Given I have an order containing two tickets with seat ids :num:num:num4:num2 and :num:num:num4:num4 for :arg1 on :arg2
     */
     public function iHaveAnOrderContainingTwoTicketsWithSeatIdsAndForOn($num1, $num2, $num3, $num4, $arg1, $arg2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I have an order containing two tickets with seat ids :num:num:num4:num2 and :num:num:num4:num4 for :arg1 on :arg2` is not defined");
     }

    /**
     * @When I enter my :arg1
     */
     public function iEnterMy($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter my :arg1` is not defined");
     }

    /**
     * @When I enter I enter a :arg1
     */
     public function iEnterIEnterA($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter I enter a :arg1` is not defined");
     }

    /**
     * @When I enter I select the month :arg1
     */
     public function iEnterISelectTheMonth($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter I select the month :arg1` is not defined");
     }

    /**
     * @When I select the year :arg1
     */
     public function iSelectTheYear($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select the year :arg1` is not defined");
     }

    /**
     * @When I enter the cvc :arg1
     */
     public function iEnterTheCvc($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter the cvc :arg1` is not defined");
     }

    /**
     * @Then I should be redirected to the receipt page
     */
     public function iShouldBeRedirectedToTheReceiptPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the receipt page` is not defined");
     }

    /**
     * @Given I am on my profile page
     */
     public function iAmOnMyProfilePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on my profile page` is not defined");
     }

    /**
     * @Given I logged into account :arg1
     */
     public function iLoggedIntoAccount($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I logged into account :arg1` is not defined");
     }

    /**
     * @When I click on Purchase History
     */
     public function iClickOnPurchaseHistory()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on Purchase History` is not defined");
     }

    /**
     * @Then I should be redirected to the purchase hostory page and I should see the order for :arg1 on :arg2 at ":num2::num3:num3::num3:num3
     */
     public function iShouldBeRedirectedToThePurchaseHostoryPageAndIShouldSeeTheOrderForOnAt($num1, $num2, $num3, $num4, $num5, $num6, $arg1, $arg2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the purchase hostory page and I should see the order for :arg1 on :arg2 at :num2::num3:num3::num3:num3` is not defined");
     }

    /**
     * @Given that I am logged into the user account “John Smith”
     */
     public function thatIAmLoggedIntoTheUserAccountJohnSmith()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `that I am logged into the user account “John Smith”` is not defined");
     }

    /**
     * @Given my userId is :arg1
     */
     public function myUserIdIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my userId is :arg1` is not defined");
     }

    /**
     * @Given the account with email “demo@email:num1com”
     */
     public function theAccountWithEmaildemoemailcom($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the account with email “demo@email:num1com”` is not defined");
     }

    /**
     * @Given password “demo:num1:num2:num3” exists in the database,
     */
     public function passworddemoExistsInTheDatabase($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password “demo:num1:num2:num3” exists in the database,` is not defined");
     }

    /**
     * @When I enter  the email “demo@email:num1com”
     */
     public function iEnterTheEmaildemoemailcom($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter  the email “demo@email:num1com”` is not defined");
     }

    /**
     * @When password “demo:num1:num2:num3”
     */
     public function passworddemo($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password “demo:num1:num2:num3”` is not defined");
     }

    /**
     * @Then see :arg1 as my name
     */
     public function seeAsMyName($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `see :arg1 as my name` is not defined");
     }

    /**
     * @Given I am on the profile page
     */
     public function iAmOnTheProfilePage2()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the profile page` is not defined");
     }

    /**
     * @When I click on Home Page
     */
     public function iClickOnHomePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on Home Page` is not defined");
     }

    /**
     * @Then I am redirected to the Home page
     */
     public function iAmRedirectedToTheHomePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the Home page` is not defined");
     }

    /**
     * @Then the first movie displayed is Money Man
     */
     public function theFirstMovieDisplayedIsMoneyMan()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the first movie displayed is Money Man` is not defined");
     }

    /**
     * @Given I am logged into the account :arg1
     */
     public function iAmLoggedIntoTheAccount($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into the account :arg1` is not defined");
     }

    /**
     * @Given I am on the individual page of :arg1
     */
     public function iAmOnTheIndividualPageOf($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the individual page of :arg1` is not defined");
     }

    /**
     * @Then I am redirected to the reviews page of the movie with all the reviews associated to the movie:num1
     */
     public function iAmRedirectedToTheReviewsPageOfTheMovieWithAllTheReviewsAssociatedToTheMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the reviews page of the movie with all the reviews associated to the movie:num1` is not defined");
     }

    /**
     * @Given I am on the profile page,
     */
     public function iAmOnTheProfilePage3()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the profile page,` is not defined");
     }

    /**
     * @When I click on :arg1 in the navigation bar
     */
     public function iClickOnInTheNavigationBar($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1 in the navigation bar` is not defined");
     }

    /**
     * @Then I am redirected to the reviews history page with all the reviews associated with the user ID of :arg1
     */
     public function iAmRedirectedToTheReviewsHistoryPageWithAllTheReviewsAssociatedWithTheUserIDOf($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the reviews history page with all the reviews associated with the user ID of :arg1` is not defined");
     }

    /**
     * @Given I am logged into “Demo User”
     */
     public function iAmLoggedIntoDemoUser()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into “Demo User”` is not defined");
     }

    /**
     * @Given I am on the reviews history page for my profile
     */
     public function iAmOnTheReviewsHistoryPageForMyProfile()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the reviews history page for my profile` is not defined");
     }

    /**
     * @Given the title of the review is “Good Movie!”
     */
     public function theTitleOfTheReviewIsGoodMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the title of the review is “Good Movie!”` is not defined");
     }

    /**
     * @Given the message is “hello”,
     */
     public function theMessageIshello()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message is “hello”,` is not defined");
     }

    /**
     * @When I edit the review to say “changed”
     */
     public function iEditTheReviewToSaychanged()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I edit the review to say “changed”` is not defined");
     }

    /**
     * @When click Submit the review
     */
     public function clickSubmitTheReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `click Submit the review` is not defined");
     }

    /**
     * @Then my review with title “Good Movie”
     */
     public function myReviewWithTitleGoodMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my review with title “Good Movie”` is not defined");
     }

    /**
     * @Then message “hello” is changed in the database to have the message as “changed”
     */
     public function messagehelloIsChangedInTheDatabaseToHaveTheMessageAschanged()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `message “hello” is changed in the database to have the message as “changed”` is not defined");
     }

    /**
     * @Then I should be redirected to the reviews history page:num1
     */
     public function iShouldBeRedirectedToTheReviewsHistoryPage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the reviews history page:num1` is not defined");
     }

    /**
     * @Given I am on the Home page
     */
     public function iAmOnTheHomePage2()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Home page` is not defined");
     }

    /**
     * @When I click on About us in the navigation bar
     */
     public function iClickOnAboutUsInTheNavigationBar()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on About us in the navigation bar` is not defined");
     }

    /**
     * @Then I am redirected to the about us page
     */
     public function iAmRedirectedToTheAboutUsPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the about us page` is not defined");
     }

    /**
     * @Then the email displayed is :arg1
     */
     public function theEmailDisplayedIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the email displayed is :arg1` is not defined");
     }

    /**
     * @Given I am logged into the account User:num1
     */
     public function iAmLoggedIntoTheAccountUser($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into the account User:num1` is not defined");
     }

    /**
     * @Given I am on the reviews history page
     */
     public function iAmOnTheReviewsHistoryPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the reviews history page` is not defined");
     }

    /**
     * @When I click on the delete button for the review for Movie:num1 with the title “Excellent Movie”,
     */
     public function iClickOnTheDeleteButtonForTheReviewForMovieWithTheTitleExcellentMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the delete button for the review for Movie:num1 with the title “Excellent Movie”,` is not defined");
     }

    /**
     * @Then the review for Movie:num1 with the title “Excellent Movie” is deleted from the database and my profile
     */
     public function theReviewForMovieWithTheTitleExcellentMovieIsDeletedFromTheDatabaseAndMyProfile($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review for Movie:num1 with the title “Excellent Movie” is deleted from the database and my profile` is not defined");
     }

    /**
     * @Then I am redirected to the reviews history page:num1
     */
     public function iAmRedirectedToTheReviewsHistoryPage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the reviews history page:num1` is not defined");
     }

    /**
     * @Given I am on the individual page for “Movie :num1”
     */
     public function iAmOnTheIndividualPageForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the individual page for “Movie :num1”` is not defined");
     }

    /**
     * @Given “Movie :num1” is found in my order history,
     */
     public function movieIsFoundInMyOrderHistory($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `“Movie :num1” is found in my order history,` is not defined");
     }

    /**
     * @When I click write a review for “Movie :num1”
     */
     public function iClickWriteAReviewForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click write a review for “Movie :num1”` is not defined");
     }

    /**
     * @Then I am redirected ti the create review page for Movie :num1
     */
     public function iAmRedirectedTiTheCreateReviewPageForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected ti the create review page for Movie :num1` is not defined");
     }

    /**
     * @Then the message I write is “Best movie I’ve seen in a long time!!!”,
     */
     public function theMessageIWriteIsBestMovieIveSeenInALongTime()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message I write is “Best movie I’ve seen in a long time!!!”,` is not defined");
     }

    /**
     * @When I click on submit review
     */
     public function iClickOnSubmitReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on submit review` is not defined");
     }

    /**
     * @Then I am redirected to review submitted page
     */
     public function iAmRedirectedToReviewSubmittedPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to review submitted page` is not defined");
     }

    /**
     * @Then I see my review with the message “Best movie I’ve seen in a long time!!!”
     */
     public function iSeeMyReviewWithTheMessageBestMovieIveSeenInALongTime()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see my review with the message “Best movie I’ve seen in a long time!!!”` is not defined");
     }

    /**
     * @Then this review is added to the database
     */
     public function thisReviewIsAddedToTheDatabase()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `this review is added to the database` is not defined");
     }

    /**
     * @Then the message I write is “I really did not enjoy this movie”,
     */
     public function theMessageIWriteIsIReallyDidNotEnjoyThisMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message I write is “I really did not enjoy this movie”,` is not defined");
     }

    /**
     * @Then I see my review with the message “I really did not enjoy this movie”
     */
     public function iSeeMyReviewWithTheMessageIReallyDidNotEnjoyThisMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see my review with the message “I really did not enjoy this movie”` is not defined");
     }

    /**
     * @Given I am on the :arg1 page
     */
     public function iAmOnThePage($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the :arg1 page` is not defined");
     }

    /**
     * @Given the review title is “Best movie I’ve seen in a long time!!!”,
     */
     public function theReviewTitleIsBestMovieIveSeenInALongTime()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review title is “Best movie I’ve seen in a long time!!!”,` is not defined");
     }

    /**
     * @When I click on the approve button
     */
     public function iClickOnTheApproveButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the approve button` is not defined");
     }

    /**
     * @Then the review with description “Best movie I’ve seen in a long time!!!”, :arg1Admin Reviews index" page
     */
     public function theReviewWithDescriptionBestMovieIveSeenInALongTimeAdminReviewsIndexPage($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with description Best movie I’ve seen in a long time!!!, :arg1Admin Reviews index page` is not defined");
     }

    /**
     * @Then the review with description “Best movie I’ve seen in a long time!!!”,  gets added on the Reviews page for :arg1
     */
     public function theReviewWithDescriptionBestMovieIveSeenInALongTimeGetsAddedOnTheReviewsPageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step the review with description Best movie I’ve seen in a long time!!!,  gets added on the Reviews page for :arg1 is not defined");
     }

    /**
     * @Given I am on the Admin's Index Review page
     */
     public function iAmOnTheAdminsIndexReviewPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Admin's Index Review page` is not defined");
     }

    /**
     * @When I click the reject button
     */
     public function iClickTheRejectButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the reject button` is not defined");
     }

    /**
     * @Then the review with id :num1 is removed from the database
     */
     public function theReviewWithIdIsRemovedFromTheDatabase($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with id :num1 is removed from the database` is not defined");
     }

    /**
     * @Then I am redirected to the Admin's Index Review page
     */
     public function iAmRedirectedToTheAdminsIndexReviewPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the Admin's Index Review page` is not defined");
     }

    /**
     * @Given the review description is I really did not enjoy this movie”
     */
     public function theReviewDescriptionIsIReallyDidNotEnjoyThisMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review description is I really did not enjoy this movie”` is not defined");
     }

    /**
     * @Then the review with description I really did not enjoy this movie” gets removed from the :arg1 page
     */
     public function theReviewWithDescriptionIReallyDidNotEnjoyThisMovieGetsRemovedFromThePage($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with description I really did not enjoy this movie” gets removed from the :arg1 page` is not defined");
     }

    /**
     * @Then the review with title I really did not enjoy this movie” gets removed from the database
     */
     public function theReviewWithTitleIReallyDidNotEnjoyThisMovieGetsRemovedFromTheDatabase()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with title I really did not enjoy this movie” gets removed from the database` is not defined");
     }

    /**
     * @Given I am on admin index movie page
     */
     public function iAmOnAdminIndexMoviePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on admin index movie page` is not defined");
     }

    /**
     * @When I click on the cash icon associated with :arg1
     */
     public function iClickOnTheCashIconAssociatedWith($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the cash icon associated with :arg1` is not defined");
     }

    /**
     * @Then I should be redirected to the revenue page for :arg1
     */
     public function iShouldBeRedirectedToTheRevenuePageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the revenue page for :arg1` is not defined");
     }

    /**
     * @Then the total ticket revenue for this movie should be :arg1
     */
     public function theTotalTicketRevenueForThisMovieShouldBe($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the total ticket revenue for this movie should be :arg1` is not defined");
     }

    /**
     * @Then see “John Smith" as my name
     */
     public function seeJohnSmithAsMyName()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `see “John Smith as my name` is not defined");
     }

    /**
     * @Given I am on the purchase history page
     */
     public function iAmOnThePurchaseHistoryPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the purchase history page` is not defined");
     }

    /**
     * @When I click on the trash can button where the seats displayed are :num:num:num4:num2 and :num:num:num4:num4
     */
     public function iClickOnTheTrashCanButtonWhereTheSeatsDisplayedAreAnd($num1, $num2, $num3, $num4)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the trash can button where the seats displayed are :num:num:num4:num2 and :num:num:num4:num4` is not defined");
     }

    /**
     * @Then I am redirected to the delete Order page for this order
     */
     public function iAmRedirectedToTheDeleteOrderPageForThisOrder()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the delete Order page for this order` is not defined");
     }

    /**
     * @When I click delete
     */
     public function iClickDelete()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click delete` is not defined");
     }

    /**
     * @Then I am redirected to my purchase history page
     */
     public function iAmRedirectedToMyPurchaseHistoryPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to my purchase history page` is not defined");
     }

    /**
     * @Then the order gets removed from my purchase history page
     */
     public function theOrderGetsRemovedFromMyPurchaseHistoryPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the order gets removed from my purchase history page` is not defined");
     }
}