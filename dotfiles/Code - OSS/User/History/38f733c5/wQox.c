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
    printf("%d\n", answer);

    do{
        printf("Enter a guess between 1 and 100 : \n");
        scanf(" %d", &guess);

        if(guess > answer){
            printf("The number is lower than (%d)\n", guess);
        }else if(guess < answer){
            printf("The number is higher than (%d)\n", guess);
        }else{
            printf("You win !");
        }
        guesses++;

    }while(guess != answer);

    printf("*********   YOU WIN   *******")

    return 0;
}