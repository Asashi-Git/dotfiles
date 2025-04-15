#include <stdio.h>
#include <string.h>

struct Student{
    char name[12];
    float gpa;
}

int main(){

    struct Student student1 = {"Samuel", 3.0};
    struct Student student2 = {"Sam", 4.0};
    struct Student student3 = {"SpongeBob", 2.5};
    struct Student student4 = {"Patrick", 0.2};

    struct Student students[] = {student1, student2, student3, student4};

    

    return 0;
}