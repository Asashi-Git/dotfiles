#include <stdio.h>

int main(){

    char grade;

    printf("Enter the grade letter : ");
    scanf("%c", &grade);

    switch(grade){
        case 'A':
        printf("You are good !");
        break;
    }

    return 0;
}