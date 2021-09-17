# OOP - Learning

## Exercises done during BECODE learning process

Create an HTML class (in a separate file) that will generate different HTML elements:

* Connect CSS files ``` <link rel="stylesheet" ...>```
* Create meta tags ```<meta ...>```
* Link images  ```<img src="...">```
* Create links  ```<a href="...">```
* Connect Javascript files

You should create this classes having in mind that they will be used by another developer. Use property names and methods that make sense, keep it simple and comment your code.
  
  Creat a validator class that will be used to validate the data sent by a form. This class should contain methods that can validate : 
    - a string
    - a number
    - an integer, ...
  
  Create a DataBase class that has a method that allows you to connect to a database.
  Create an User class that has the following properties:
  
* id
* username
* email
* password
* connected
This will allow to:

 - Register a new user in the database with validation
 -  Log in  a user (sessions)
 -  Log out a user (sessions)
 -  Update name in database
 -  Update email in database
 -  Delete user from database

  
  ### Car park
  
  We want to create a car park management program, for this we will create a class Car, a car is caracterized by:
 
  - a plate number
  - a date of circulation
  - kilometers
  - model
  - brand
  - color
  - weight

When instantiating the class, you can determine whether:

  - If the model is Audi, it is automatically reserved otherwise it is free
  - The vehicle is a utility or commercial depending on its weight (> 3.5 tonnes)
  - The country where the car comes from is Belgium, France or Germany if the registration starts with BE, FR, DE
  - Determine if it has been used a lot low <100,000 or middle> 100,000 or high> 200,000 depending on the mileage
  - Calculate the number of years since the date of circulation
  
### Changes

Make sure that if:

  - The mileage changes, the class must redo the condition to know if it has been used a lot
  - That we cannot change the date of entry into circulation
  - That we cannot change the registration number
  - That we can't change the model
  - That we can't change a brand
  - Creates a drive function that "drives the car 100,000 km" and the wear goes from low to high. No one can perform the methods in the class that make conditions reusable.

### Display
Create a display method that displays the photo of the car and its characteristics in an HTML table.
Show 9 different cars
