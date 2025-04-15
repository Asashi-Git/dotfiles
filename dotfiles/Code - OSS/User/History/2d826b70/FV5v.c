#include <stdio.h>   // Standard Input-Output library for printf()
#include <stdlib.h>  // Standard library for rand() and srand()
#include <time.h>    // Time library for seeding the random number generator

int main() {

    // Pseudo-random numbers: A set of values that appear statistically random.

    srand(time(0));  // Seed the random number generator with the current time

    // Generate three random numbers between 1 and 6 (simulating a dice roll)
    int number1 = (rand() % 6) + 1;
    int number2 = (rand() % 6) + 1;
    int number3 = (rand() % 6) + 1;

    // Print the generated random numbers
    printf("%d\n", number1);
    printf("%d\n", number2);
    printf("%d\n", number3);

    return 0; // Exit the program successfully
}
