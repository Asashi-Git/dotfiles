#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){

    const int MIN = 1;
    const int MAX = 100;
    int guess;
    int guesses;
    int answer;

    //uses the curent time as a seed to generate a random number
    srand(time(0));

    //generate a random number between the min and the max function
    answer = (rand() % MAX) + MIN;

    printf("%d", answer);

    return 0;
}