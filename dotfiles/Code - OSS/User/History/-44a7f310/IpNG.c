#include <stdio.h>

int main(){

    char grade;

    printf("Enter the grade letter : ");
    scanf("%c", &grade);

    switch(grade){
        case 'A':
            printf("You are good !");
            break;
        case 'B':
            printf("You are okay !");
            break;
        case 'C':
            printf("MHHhhhh");
            break;
        case 'D':
            printf("You suck !");
            break;
        case 'E':
            printf("Fuck you");
            break;
    }

    return 0;
}