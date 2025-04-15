#include <stdio.h>

int main(){

    int age;

    printf("What's your age ?\n");
    scanf("%d", &age);

    if (age >= 18){
        printf("You are now signed up !");
    }
    else if(age < 0){
        printf("You are not born yet");
    }
    else{
        printf("You can't sign up because you are too young !");
    }

    return 0;
}