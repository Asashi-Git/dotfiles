#include <stdio.h>
#include <ctype.h> // For toupper() function to convert characters to uppercase

int main(){

    // Array of questions
    char questions[][100] =    {"1. What year did the C language debut ?: ",
                                "2. Who is credited with creating C ?: ",
                                "3. What is the predecessor of C ?: "};

    // Array of options (answer choices)
    char options[][100] =      {"A. 1969", "B. 1972", "C. 1975", "D. 1999",
                                "A. Dennis Ritchie", "B. Nicolas Tesla", "C. John Carmak", "D. Doc Brown",
                                "A. Objective C", "B. B", "C. C++", "D. C#"};

    // Correct answers corresponding to the questions
    char answers[3] = {'B', 'A', 'B'};
    int number_of_questions = sizeof(questions)/sizeof(questions[0]); // Calculate the number of questions

    char guess; // Variable to store user's guess
    int score = 0; // Initialize score to zero

    // Display game title
    printf("\n");
    printf("********** QUIZ GAME **********\n");

    // Loop through each question
    for(int i = 0; i < number_of_questions; i++){

        printf("--------------------------------\n");
        printf("%s\n", questions[i]); // Display the current question
        printf("--------------------------------\n");

        // Display answer choices for the current question
        for(int j = (i * 4); j < (i * 4) + 4; j++){
            printf("%s\n", options[j]);
        }

        // Prompt user for their guess
        printf("Guess : ");
        scanf(" %c", &guess);
        guess = toupper(guess); // Convert guess to uppercase for consistency

        // Check if the answer is correct
        if(guess == answers[i]){
            printf("Correct !\n");
            score++; // Increase score if correct
        }else{
            printf("Wrong\n");
        }
    }

    // Display final score
    printf("--------------------------------\n");
    printf("a
    aFinal score : %d/%d\n", score, number_of_questions);
    printf("--------------------------------\n");

    return 0;
}
