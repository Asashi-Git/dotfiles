#include <stdio.h>

enum Day{Sun = 1, Mon = 2, Tue = 3, Wed = 4, Thu = 5, Fri = 6, Sat = 7};

int main(){

    //enum = a user defined type of named interger indentifiers
    //      helps to make a program more readible

    enum Day today = Sat;

    //printf("%d\n", today);//enum are not strings, but thez can be treated as integers

    if(today == Sun || today == Sat){
        printf("\nIt's the week-end !\n");
    }else{
        printf("\nI have to work today :(\n");
    }

    return 0;
}