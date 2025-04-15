#include <stdio.h>
#include <ctype.h>

int main(){

    char unit;
    float temp;

    printf("Is the temperature in (F) or (C) ?");
    scanf("%c", &unit);

    if(unit == C){
        
    }
    else if(unit == F){

    }
    else{
        printf("Wrong unit.")
    }

    return 0;
}