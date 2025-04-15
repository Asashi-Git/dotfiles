#include <stdio.h>

int main(){

    //function prototype = fonction declaration, w/o a body, before main()
    //Ensure that call to a function are made with the correct arguments

    char name[] = "Samuel";
    int age = 25;

    hello();

    return 0;
}

void hello(char name, int age){

    printf("\nHello %s", name);
    printf("\nYou have %d",age);

}

