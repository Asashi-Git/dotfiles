#include <stdio.h>
#include <ctype.h>

int main(){

    char unit;
    float temp;

    printf("Is the temperature in (F) or (C) ?");
    scanf("%c", &unit);

    unit = toupper(unit);

    if(unit == C){
        printf("Enter the temp in C : ");
        scanf("%f", temp);
        temp = (temp * 9 / 5) + 32;
        
    }
    else if(unit == F){

    }
    else{
        printf("\n Wrong unit (%c).", unit);
    }

    return 0;
}