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
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the login page` is not defined");
     }

    /**
     * @When I enter username ‘admin’
     */
     public function iEnterUsernameadmin()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter username ‘admin’` is not defined");
     }

    /**
     * @When password ‘admin:num1:num2:num3’
     */
     public function passwordadmin($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password ‘admin:num1:num2:num3’` is not defined");
     }

    /**
     * @Then I am redirected to the admin’s profile page:num1
     */
     public function iAmRedirectedToTheAdminsProfilePage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the admin’s profile page:num1` is not defined");
     }

    /**
     * @Given I am on the add movie page,
     */
     public function iAmOnTheAddMoviePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the add movie page,` is not defined");
     }

    /**
     * @When the movie title is “Example Movie”
     */
     public function theMovieTitleIsExampleMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the movie title is “Example Movie”` is not defined");
     }

    /**
     * @When the movie duration is “:num1::num:num4:num:num5::num4:num5”
     */
     public function theMovieDurationIs($num1, $num2, $num3, $num4, $num5)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the movie duration is “:num1::num:num4:num:num5::num4:num5”` is not defined");
     }

    /**
     * @When the description is “This is a movie about horses”
     */
     public function theDescriptionIsThisIsAMovieAboutHorses()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the description is “This is a movie about horses”` is not defined");
     }

    /**
     * @When the release date is “:num1:num:num5/:num:num5:num:num8/:num5:num:num5:num5:num8”
     */
     public function theReleaseDateIs($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the release date is “:num1:num:num5/:num:num5:num:num8/:num5:num:num5:num5:num8”` is not defined");
     }

    /**
     * @When the movie information is not null and does not already exist in the database,
     */
     public function theMovieInformationIsNotNullAndDoesNotAlreadyExistInTheDatabase()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the movie information is not null and does not already exist in the database,` is not defined");
     }

    /**
     * @When I click Add Movie,
     */
     public function iClickAddMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click Add Movie,` is not defined");
     }

    /**
     * @Then I am redirected to the movie page
     */
     public function iAmRedirectedToTheMoviePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the movie page` is not defined");
     }

    /**
     * @Then I see the “Example Movie”
     */
     public function iSeeTheExampleMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see the “Example Movie”` is not defined");
     }

    /**
     * @Then a movie with title “Example Movie” , duration: “:num:num6::num:num:num13:num:num5::num:num13:num5”,  description: “This is a movie about horses” and release date: “:num:num6:num7/:num7:num5/:num:num13:num7:num:num13:num:num:num13” is added to the database:num14
     */
     public function aMovieWithTitleExampleMovieDurationDescriptionThisIsAMovieAboutHorsesAndReleaseDateIsAddedToTheDatabase($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `a movie with title “Example Movie” , duration: “:num:num6::num:num:num13:num:num5::num:num13:num5”,  description: “This is a movie about horses” and release date: “:num:num6:num7/:num7:num5/:num:num13:num7:num:num13:num:num:num13” is added to the database:num14` is not defined");
     }

    /**
     * @Given I am on the update movie page for “Movie :num1”,
     */
     public function iAmOnTheUpdateMoviePageForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the update movie page for “Movie :num1”,` is not defined");
     }

    /**
     * @When I edit “Movie :num1’s” information to movie title is “Example Movie” and click modify,
     */
     public function iEditMoviesInformationToMovieTitleIsExampleMovieAndClickModify($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I edit “Movie :num1’s” information to movie title is “Example Movie” and click modify,` is not defined");
     }

    /**
     * @Then I should be redirected to movie details page with the title “Example Movie”
     */
     public function iShouldBeRedirectedToMovieDetailsPageWithTheTitleExampleMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to movie details page with the title “Example Movie”` is not defined");
     }

    /**
     * @Then then the movie with “Movie :num1” does not exist in the database but the movie with title “Example Movie” does:num2
     */
     public function thenTheMovieWithMovieDoesNotExistInTheDatabaseButTheMovieWithTitleExampleMovieDoes($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `then the movie with “Movie :num1” does not exist in the database but the movie with title “Example Movie” does:num2` is not defined");
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
     * @Given the account with email “user:num1@email:num2com”
     */
     public function theAccountWithEmailuseremailcom($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the account with email “user:num1@email:num2com”` is not defined");
     }

    /**
     * @Given password “password:num1:num2:num3” exists in the database,
     */
     public function passwordpasswordExistsInTheDatabase($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password “password:num1:num2:num3” exists in the database,` is not defined");
     }

    /**
     * @When I enter  the email “user:num1@email:num2com”
     */
     public function iEnterTheEmailuseremailcom($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter  the email “user:num1@email:num2com”` is not defined");
     }

    /**
     * @When password “password:num1:num2:num3”
     */
     public function passwordpassword($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password “password:num1:num2:num3”` is not defined");
     }

    /**
     * @When click on the log in button,
     */
     public function clickOnTheLogInButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `click on the log in button,` is not defined");
     }

    /**
     * @Then I should be redirected to the homepage
     */
     public function iShouldBeRedirectedToTheHomepage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the homepage` is not defined");
     }

    /**
     * @Then see “John Doe" as my name
     */
     public function seeJohnDoeAsMyName()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step see 'John Doe' as my name is not defined");
     }

    /**
     * @Then the value inside the userId session variable should match the value of the userId for :arg1 in the database :num1
     */
     public function theValueInsideTheUserIdSessionVariableShouldMatchTheValueOfTheUserIdForInTheDatabase($num1, $arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the value inside the userId session variable should match the value of the userId for :arg1 in the database :num1` is not defined");
     }

    /**
     * @Given I am on the profile page (localhost/User/Profile)
     */
     public function iAmOnTheProfilePagelocalhostUserProfile()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the profile page (localhost/User/Profile)` is not defined");
     }

    /**
     * @Given the password hash stored in the database for my account corresponds to “password:num1:num2:num3”,
     */
     public function thePasswordHashStoredInTheDatabaseForMyAccountCorrespondsTopassword($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the password hash stored in the database for my account corresponds to “password:num1:num2:num3”,` is not defined");
     }

    /**
     * @When I update my email to “user:num:num:num5@email:num:num4com” and enter the password “password:num:num:num5:num4:num5” ,
     */
     public function iUpdateMyEmailTouseremailcomAndEnterThePasswordpassword($num1, $num2, $num3, $num4, $num5)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I update my email to “user:num:num:num5@email:num:num4com” and enter the password “password:num:num:num5:num4:num5” ,` is not defined");
     }

    /**
     * @Then I should be redirected to my profile page and see the email as “user:num1@email:num2com”:num2
     */
     public function iShouldBeRedirectedToMyProfilePageAndSeeTheEmailAsuseremailcom($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to my profile page and see the email as “user:num1@email:num2com”:num2` is not defined");
     }

    /**
     * @Given I am on the movies page (/Movies/Browse),
     */
     public function iAmOnTheMoviesPageMoviesBrowse()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the movies page (/Movies/Browse),` is not defined");
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
     * @Given I am on the homepage,
     */
     public function iAmOnTheHomepage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the homepage,` is not defined");
     }

    /**
     * @When I click on the Browse Movies button,
     */
     public function iClickOnTheBrowseMoviesButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the Browse Movies button,` is not defined");
     }

    /**
     * @Then I should be redirected to the page with all the current movies:num1
     */
     public function iShouldBeRedirectedToThePageWithAllTheCurrentMovies($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the page with all the current movies:num1` is not defined");
     }

    /**
     * @Given I am logged in and on the movies page  (/Movies/Browse),
     */
     public function iAmLoggedInAndOnTheMoviesPageMoviesBrowse()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in and on the movies page  (/Movies/Browse),` is not defined");
     }

    /**
     * @When I search for :arg1,
     */
     public function iSearchFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I search for :arg1,` is not defined");
     }

    /**
     * @Then I see :arg1
     */
     public function iSee($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see :arg1` is not defined");
     }

    /**
     * @Given I am on the browse Movies page
     */
     public function iAmOnTheBrowseMoviesPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the browse Movies page` is not defined");
     }

    /**
     * @When I search for “Movie :num1”,
     */
     public function iSearchForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I search for “Movie :num1”,` is not defined");
     }

    /**
     * @Then “Movie :num1” should be displayed:num2
     */
     public function movieShouldBeDisplayed($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `“Movie :num1” should be displayed:num2` is not defined");
     }

    /**
     * @Given I am on the seat selection page for :arg1,
     */
     public function iAmOnTheSeatSelectionPageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the seat selection page for :arg1,` is not defined");
     }

    /**
     * @When I select seat ‘A:num1’
     */
     public function iSelectSeatA($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select seat ‘A:num1’` is not defined");
     }

    /**
     * @When click the add to cart button,
     */
     public function clickTheAddToCartButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `click the add to cart button,` is not defined");
     }

    /**
     * @Then I should see the ticket for :arg1 with seat ‘A:num1’ in my cart with the subtotal price:num2
     */
     public function iShouldSeeTheTicketForWithSeatAInMyCartWithTheSubtotalPrice($num1, $num2, $arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the ticket for :arg1 with seat ‘A:num1’ in my cart with the subtotal price:num2` is not defined");
     }

    /**
     * @Given I am on my cart page and I have a ticket for ‘Example Movie’ with seat ‘A:num:num2’ that the price of $:num:num2:num3,
     */
     public function iAmOnMyCartPageAndIHaveATicketForExampleMovieWithSeatAThatThePriceOf($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on my cart page and I have a ticket for ‘Example Movie’ with seat ‘A:num:num2’ that the price of $:num:num2:num3,` is not defined");
     }

    /**
     * @When I click on place order,
     */
     public function iClickOnPlaceOrder()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on place order,` is not defined");
     }

    /**
     * @Then I should be redirected to the payment page
     */
     public function iShouldBeRedirectedToThePaymentPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the payment page` is not defined");
     }

    /**
     * @Then I should see the ticket for ‘Example Movie’ with seat ‘A:num1’
     */
     public function iShouldSeeTheTicketForExampleMovieWithSeatA($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the ticket for ‘Example Movie’ with seat ‘A:num1’` is not defined");
     }

    /**
     * @Then the price is $:num1:num2
     */
     public function thePriceIs($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the price is $:num1:num2` is not defined");
     }

    /**
     * @Given I am logged into ‘Test User’ and on the payment page and I have a ticket for ‘Movie :num:num2’ with seat ‘A:num:num2’ that costs $:num:num2:num4,
     */
     public function iAmLoggedIntoTestUserAndOnThePaymentPageAndIHaveATicketForMovieWithSeatAThatCosts($num1, $num2, $num3, $num4)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into ‘Test User’ and on the payment page and I have a ticket for ‘Movie :num:num2’ with seat ‘A:num:num2’ that costs $:num:num2:num4,` is not defined");
     }

    /**
     * @When the cardholder’s name is not null
     */
     public function theCardholdersNameIsNotNull()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the cardholder’s name is not null` is not defined");
     }

    /**
     * @When my card number is is :num1:num2 digits
     */
     public function myCardNumberIsIsDigits($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my card number is is :num1:num2 digits` is not defined");
     }

    /**
     * @When the expiration date is greater than the current date
     */
     public function theExpirationDateIsGreaterThanTheCurrentDate()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the expiration date is greater than the current date` is not defined");
     }

    /**
     * @When the CVV is :num1 digits
     */
     public function theCVVIsDigits($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the CVV is :num1 digits` is not defined");
     }

    /**
     * @When I click Confirm Payment
     */
     public function iClickConfirmPayment()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click Confirm Payment` is not defined");
     }

    /**
     * @Then I am redirected to the order confirmation page
     */
     public function iAmRedirectedToTheOrderConfirmationPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the order confirmation page` is not defined");
     }

    /**
     * @Then the ticket ‘Movie :num:num2’ with seat ‘A:num:num2’ with  $:num:num2:num4 with account ‘Test User’ gets added to the database:num5
     */
     public function theTicketMovieWithSeatAWithWithAccountTestUserGetsAddedToTheDatabase($num1, $num2, $num3, $num4, $num5)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the ticket ‘Movie :num:num2’ with seat ‘A:num:num2’ with  $:num:num2:num4 with account ‘Test User’ gets added to the database:num5` is not defined");
     }

    /**
     * @Given I am on :arg1 profile page and my userId is :num1,
     */
     public function iAmOnProfilePageAndMyUserIdIs($num1, $arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on :arg1 profile page and my userId is :num1,` is not defined");
     }

    /**
     * @When I click the view purchase history button,
     */
     public function iClickTheViewPurchaseHistoryButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the view purchase history button,` is not defined");
     }

    /**
     * @Then I am redirected to the purchase history page and shown all previous orders that have :num1 as their userId in the database:num2
     */
     public function iAmRedirectedToThePurchaseHistoryPageAndShownAllPreviousOrdersThatHaveAsTheirUserIdInTheDatabase($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the purchase history page and shown all previous orders that have :num1 as their userId in the database:num2` is not defined");
     }

    /**
     * @Given I am logged into “Test User”
     */
     public function iAmLoggedIntoTestUser()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into “Test User”` is not defined");
     }

    /**
     * @Given I am on the order history page for “Movie :num:num:num:num7” and my tickets are for “April :num:num:num:num7:num3th, :num:num7:num3:num:num7:num7”
     */
     public function iAmOnTheOrderHistoryPageForMovieAndMyTicketsAreForAprilTh($num1, $num2, $num3, $num4, $num5, $num6, $num7)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the order history page for “Movie :num:num:num:num7” and my tickets are for “April :num:num:num:num7:num3th, :num:num7:num3:num:num7:num7”` is not defined");
     }

    /**
     * @Given the current date is “April :num1th, :num:num:num5:num3:num:num:num5:num5 (more than :num:num:num5 days prior to the date indicated on my movie tickets),
     */
     public function theCurrentDateIsAprilThmoreThanDaysPriorToTheDateIndicatedOnMyMovieTickets($num1, $num2, $num3, $num4, $num5, $num6)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the current date is “April :num1th, :num:num:num5:num3:num:num:num5:num5 (more than :num:num:num5 days prior to the date indicated on my movie tickets),` is not defined");
     }

    /**
     * @When I click the cancel order button,
     */
     public function iClickTheCancelOrderButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the cancel order button,` is not defined");
     }

    /**
     * @Then order status for “Movie :num1” in the database becomes “false”
     */
     public function orderStatusForMovieInTheDatabaseBecomesfalse($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `order status for “Movie :num1” in the database becomes “false”` is not defined");
     }

    /**
     * @Then I should be redirected to the order history page for “Test User”
     */
     public function iShouldBeRedirectedToTheOrderHistoryPageForTestUser()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the order history page for “Test User”` is not defined");
     }

    /**
     * @Then I should see that the order is canceled:num1
     */
     public function iShouldSeeThatTheOrderIsCanceled($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see that the order is canceled:num1` is not defined");
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
     * @When the review title is “Great Movie!”
     */
     public function theReviewTitleIsGreatMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review title is “Great Movie!”` is not defined");
     }

    /**
     * @When the message is “Best movie I’ve seen in a long time!!!”,
     */
     public function theMessageIsBestMovieIveSeenInALongTime()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message is “Best movie I’ve seen in a long time!!!”,` is not defined");
     }

    /**
     * @Then the review with title “Great Movie
     */
     public function theReviewWithTitleGreatMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with title “Great Movie` is not defined");
     }

    /**
     * @Then the message “Best movie I’ve seen in a long time!!!” is added to the database for “Movie :num1”
     */
     public function theMessageBestMovieIveSeenInALongTimeIsAddedToTheDatabaseForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message “Best movie I’ve seen in a long time!!!” is added to the database for “Movie :num1”` is not defined");
     }

    /**
     * @Then I am redirected to the reviews for “Movie :num1”
     */
     public function iAmRedirectedToTheReviewsForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the reviews for “Movie :num1”` is not defined");
     }

    /**
     * @Given I am logged into an admin account and I am on the admin profile page,
     */
     public function iAmLoggedIntoAnAdminAccountAndIAmOnTheAdminProfilePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into an admin account and I am on the admin profile page,` is not defined");
     }

    /**
     * @When I click on view user reviews,
     */
     public function iClickOnViewUserReviews()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on view user reviews,` is not defined");
     }

    /**
     * @Then I am redirected to the Newly Submitted Reviews Page and see the reviews with status
     */
     public function iAmRedirectedToTheNewlySubmittedReviewsPageAndSeeTheReviewsWithStatus()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the Newly Submitted Reviews Page and see the reviews with status` is not defined");
     }

    /**
     * @Given I am on the Newly Submitted Reviews page
     */
     public function iAmOnTheNewlySubmittedReviewsPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Newly Submitted Reviews page` is not defined");
     }

    /**
     * @Given I click on the review with id :num1,
     */
     public function iClickOnTheReviewWithId($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the review with id :num1,` is not defined");
     }

    /**
     * @When I click reject review
     */
     public function iClickRejectReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click reject review` is not defined");
     }

    /**
     * @Then the review with id :num1 is removed from the database
     */
     public function theReviewWithIdIsRemovedFromTheDatabase($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with id :num1 is removed from the database` is not defined");
     }

    /**
     * @Then I am redirected to the New Reviews page:num1
     */
     public function iAmRedirectedToTheNewReviewsPage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the New Reviews page:num1` is not defined");
     }

    /**
     * @Given I am on the New Reviews page
     */
     public function iAmOnTheNewReviewsPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the New Reviews page` is not defined");
     }

    /**
     * @When I click approve review
     */
     public function iClickApproveReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click approve review` is not defined");
     }

    /**
     * @Then the review status for the review with id :num1  is set to true
     */
     public function theReviewStatusForTheReviewWithIdIsSetToTrue($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review status for the review with id :num1  is set to true` is not defined");
     }

    /**
     * @Given I am on the browse movies page
     */
     public function amOnTheBrowseMoviesPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the browse movies page` is not defined");
     }

    /**
     * @When I click on the reviews for “Movie :num1”,
     */
     public function clickOnTheReviewsForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the reviews for “Movie :num1”,` is not defined");
     }

    /**
     * @Then I am redirected to the “Movie :num:num2” reviews page that display all of the approved reviews for “Movie :num:num2”
     */
     public function iAmRedirectedToTheMovieReviewsPageThatDisplayAllOfTheApprovedReviewsForMovie($num1, $num2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the “Movie :num:num2” reviews page that display all of the approved reviews for “Movie :num:num2”` is not defined");
     }

    /**
     * @Given I am on the individual movie page for :arg1,
     */
     public function iAmOnTheIndividualMoviePageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the individual movie page for :arg1,` is not defined");
     }

    /**
     * @When I click on see reviews,
     */
     public function iClickOnSeeReviews()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on see reviews,` is not defined");
     }

    /**
     * @Then I should see reviews for :arg1 submitted by other users:num1
     */
     public function iShouldSeeReviewsForSubmittedByOtherUsers($num1, $arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see reviews for :arg1 submitted by other users:num1` is not defined");
     }

    /**
     * @Given on the submitted reviews page for my profile for “Example Movie”
     */
     public function onTheSubmittedReviewsPageForMyProfileForExampleMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `on the submitted reviews page for my profile for “Example Movie”` is not defined");
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
     * @When I edit the review to say “changed”,
     */
     public function iEditTheReviewToSaychanged()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I edit the review to say “changed”,` is not defined");
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
     * @Then I should be redirected to the submitted reviews page that shows the modifications:num1
     */
     public function iShouldBeRedirectedToTheSubmittedReviewsPageThatShowsTheModifications($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the submitted reviews page that shows the modifications:num1` is not defined");
     }

    /**
     * @Given I am logged into the account User:num1
     */
     public function iAmLoggedIntoTheAccountUser($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into the account User:num1` is not defined");
     }

    /**
     * @Given on my profile page
     */
     public function onMyProfilePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `on my profile page` is not defined");
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
     * @Then I am redirected to my profile page:num1
     */
     public function iAmRedirectedToMyProfilePage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to my profile page:num1` is not defined");
     }

    /**
     * @Given that I am logged into the user account “User:num1”
     */
     public function thatIAmLoggedIntoTheUserAccountUser($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `that I am logged into the user account “User:num1”` is not defined");
     }

    /**
     * @Given my userId is :arg1
     */
     public function myUserIdIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my userId is :arg1` is not defined");
     }

    /**
     * @Given I am on the movie page for “Example Movie”,
     */
     public function iAmOnTheMoviePageForExampleMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the movie page for “Example Movie”,` is not defined");
     }

    /**
     * @When I click on “delete”,
     */
     public function iClickOndelete()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on “delete”,` is not defined");
     }

    /**
     * @Then the movie status for “Movie :num1” is changed in the database to inactive
     */
     public function theMovieStatusForMovieIsChangedInTheDatabaseToInactive($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the movie status for “Movie :num1” is changed in the database to inactive` is not defined");
     }

    /**
     * @Then I am redirected to the browse movie page:num1
     */
     public function iAmRedirectedToTheBrowseMoviePage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the browse movie page:num1` is not defined");
     }

    /**
     * @Given I am on the admin’s profile page:num1
     */
     public function iAmOnTheAdminsProfilePage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the admin’s profile page:num1` is not defined");
     }

    /**
     * @When I click the view “revenue” button,
     */
     public function iClickTheViewrevenueButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the view “revenue” button,` is not defined");
     }

    /**
     * @Then I am redirected to the revenue page:num1
     */
     public function iAmRedirectedToTheRevenuePage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the revenue page:num1` is not defined");
     }
     
}
