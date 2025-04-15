#include <stdio.h>

int main(){

    //while loop = check a condition, THEN execute some code if the condition is true
    //do while loop = always execute a block of code at once, THEN check a condition

    int number = 0;
    int sum = 0;

    while(number > 0){
        printf("Enter a number above 0 :\n");
        scanf("%d", &number);

        if(number > 0){
            sum += number;
        }
    }

    printf("\nSum = %d\n", sum);

    return 0;
}