#include <stdio.h>
#include <ctype.h>

int main(){

    char questions[][100] =    {"1. What year did the C language debut ?: ",
                                "2. Who is credited with creating C ?: ",
                                "3. What is the predecessor of C ?: "};

    char options[][100] =      {"A. 1969", "B. 1972", "C. 1975", "D. 1999",
                                "A. Dennis Ritchie", "B. Nicolas Tesla", "C. John Carmak", "D. Doc Brown"
                                "A. Objective C", "B. B", "C. C++", "D. C#"};

    char answers[3] = {'B', 'A', 'B'};
    int number_of_questions = sizeof(questions[])/sizeof(questions[0]);

    char guess;
    int score;

    printf("SQUIZZ GAME\n");

    for(int i = 0; i < number_of_questions; i++){

        printf("%s\n", questions[i]);

    }

    return 0;
}