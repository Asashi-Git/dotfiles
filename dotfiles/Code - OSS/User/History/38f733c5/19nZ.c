#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){

    // Define constants for the minimum and maximum values
    const int MIN = 1;
    const int MAX = 100;
    
    // Variables to store user's guess, number of attempts, and the correct answer
    int guess;
    int guesses = 0;
    int answer;

    // Use the current time as a seed to generate a random number
    srand(time(0));

    // Generate a random number between MIN and MAX (inclusive)
    answer = (rand() % MAX) + MIN;
    //printf("%d\n", answer);  // Debugging: Print the correct answer (can be removed in a real game)

    // Loop until the user guesses the correct number
    do{
        // Prompt the user to enter a guess
        printf("Enter a guess between 1 and 100: \n");
        scanf(" %d", &guess);

        // Provide hints based on the user's guess
        if(guess > answer){
            printf("The number is lower than (%d)\n", guess);
        }else if(guess < answer){
            printf("The number is higher than (%d)\n", guess);
        }else{
            printf("You win !");  // Correct guess message
        }
        
        // Increment the guess count
        guesses++;

    }while(guess != answer);  // Continue until the correct number is guessed

    // Display the final results
    printf("\n*********   YOU WIN   *********\n");
    printf("Answer : %d\n", answer);
    printf("Guesses : %d\n", guesses);
    printf("*******************************\n");

    return 0;  // Exit program successfully
}
