#include <stdio.h>

void hello(char[], int);//function prototype

int main(){

    //function prototype = fonction declaration, w/o a body, before main()
    //Ensure that call to a function are made with the correct arguments

    //IMPORTANT NOTE
    //Many C compiler do not check for parameter maching
    //Missing argument will result in unexpected behavior
    //A fonction prototype cause the compiler to flag an error if an argument is missing

    char name[] = "Samuel";
    int age = 25;

    hello(name, age);

    return 0;
}

void hello(char name[], int age){

    printf("\nHello %s", name);
    printf("\nYou have %d\n",age);

}

