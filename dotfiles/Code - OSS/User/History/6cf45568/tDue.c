#include <stdio.h>

/*
    variable = Allocate space in memory to store value.
            we refere to a variable's name to access the stored value.
            that variable now behave as if it was the value it contain.
            but we need to declare what type of data we are storing.
*/

int main(){

    int x;//declaration
    x = 123;//initialisation
    // you can declare an intitiate together like that :
    int y = 321;

    int age = 25;               //integer
    float gpa = 2.05;            //foating point number
    char grade = 'C';           //single charactere
    // to store multiple charactere you need to create an array
    char name[] = "Samuel";     //an array of characters
    char fav_food[] = "Pizza";

    printf("Hello, your name is %s !\n", name);
    printf("And you are %d years old\n", age);
    printf("Your average grade is %c !\n", grade);
    printf("Your gpa is %f\n", gpa);
    printf("And your favorite food is %s !", fav_food);

    return 0;
}