#include <stdio.h>
#include <string.h>

struct Student{
    char name[12];
    float gpa;
}

int main(){

    struct Student student1 = {"Samuel", 3.0};

    return 0;
}