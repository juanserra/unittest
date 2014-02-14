# Aim

The aim of this is to produce a small application that has been developed using unit tests, preferably using TDD but that is up to you.

# Installing

1. Clone the repo as you would normally then do a `composer install`, do not use `composer update`.
2. Make sure xdebug is installed
3. Make sure PHPUnit is installed, for *nix just install the native package, for windows install via pear

# Set up the project for testing

1. Open up netbeans and create a new project with the cloned repo. (I am using netbeans 7.3 but the steps should be the same)
2. From the run configuration dropdown (should say "<default>) select "customise"
3. Click "PHPUnit" from the left.
4. Tick "Use XML Configuration" and select the "phpunit.xml" from the root of the project

You can now press `alt+f6` or click `Run -> Test Project`. The tests will now run and you will see an output of the result.
A coverage report will also be generated in the `coverage` folder. From here you can see how much of the code your tests cover.

Alternately you can run it outside your IDE with the `phpunit` command. The configuration will be automatically loaded from
`phpunit.xml` in the folder you are running the command from or you can use the `--configuration path/to/phpunit.xml` flag.

# Starting work

Code style should follow PSR except use tabs instead of spaces, all `{` on a new line and use shorthand array syntax.
Full PHPDoc comments should be included.

The first test is to run your tests and make sure they pass. This should always be done so you know you are in a fully working
environment.

Any new classes you create should be placed in `src/Ve/UnitTest` and tests for those classes placed in `tests/Ve/UnitTest`.

# Basic test class structure

See `tests/Ve/UnitTest/TestTest.php`

 - Test classes should always be postfixed with `Test`. So `BlogTest`, `MenuItemTest`, etc.
 - The `protected setUp()` method is called before every test to set up the test environment for the class.
 - Test methods should be public and prefixed with `test` so `public function testMyAwesomeFunction`
 - Test method should make one or more assertion depending on what they are testing
 - Tests that happen often in the same class can use providers to remove code reuse. See the `testAdd()` test.

Later on we will cover things like class mocking, file system mocking and using dependency injection to make code more easily
testable.

# Classes

The app we are going to create will be a very simple blogging application. It will not use any php framework and we will
not take into account anything like users or protecting pages for the sake of simplicity.

There are three main classes that we will start off with.

## Post

This will define a blog post within the system and will be a model. This means that it will simply be a container for
data related to post objects.

The post object will need the following properties along with getters and setters for them.

 - Title
 - Author
 - Body
 - Publish date

## Storage class

This class should be able to store and retrieve Post objects to and from files stored in a directory.

- It should have a single property to be able to set and get the folder location.
- It should be possible to store one or more Post objects
- It should be possible to retrieve a list of all Post objects, sorted by most recent first
- It should be able to retrieve a single given Post object

## Logic

To tie the two together we will create a logic class to interact with Posts in a meaningful way.
We will cover this at a later date as it will require mocking and an introduction to dependency injection.

