# GPA Calculator README

This README provides essential information about the GPA Calculator application developed using Laravel and Bootstrap.

## GPA Formula

The GPA (Grade Point Average) is calculated based on the following grade-point scale:

- A: 4.0 points
- B: 3.7 points
- C: 3.0 points
- D: 2.0 points

## Example Calculation

Let's walk through an example calculation:

Suppose you have the following grades:

- A's: 24
- B's: 28
- C's: 6
- D's: 1

### Step 1: Calculate the Grade Points

To calculate the grade points, multiply the number of each grade by the corresponding point value:

- A's: 24 * 4.0 = 96
- B's: 28 * 3.7 = 103.6
- C's: 6 * 3.0 = 18
- D's: 1 * 2.0 = 2.0

### Step 2: Calculate the Total Points

Sum the total number of grade points calculated in step 1:

96 + 103.6 + 18 + 2.0 = 219.6

### Step 3: Calculate the GPA

To calculate the GPA, divide the total number of points by the total number of units/grades:

GPA = Total Points / Total Units
GPA = 219.6 ÷ 59 = 3.724

### Final GPA

The final GPA for the given set of grades is 3.724.

## Using the GPA Calculator

This GPA Calculator is built using Laravel and Bootstrap. To use it, follow these steps:

1. Clone or download this repository to your local machine.

2. Make sure you have Laravel and Composer installed on your system.

3. Run `composer install` to install the required dependencies.

4. Create a `.env` file by copying `.env.example` and set up your database configuration.

5. Run `php artisan key:generate` to generate an application key.

6. Run `php artisan migrate` to create the necessary database tables.

7. Start the development server by running `php artisan serve`.

8. Open the application in your web browser and use it to calculate your GPA by inputting your grades and credits.

## License

This GPA Calculator is open-source and released under the [MIT License]. Feel free to use, modify, and distribute it as needed.

