#include <stdio.h>
#include <string.h>

// Define a structure to store student information
struct Student{
    char name[12];  // Array to store student's name (max 11 characters + null terminator)
    float gpa;      // Variable to store student's GPA
};

int main(){

    // Initialize student structures with name and GPA values
    struct Student student1 = {"Samuel", 3.0};
    struct Student student2 = {"Sam", 4.0};
    struct Student student3 = {"SpongeBob", 2.5};
    struct Student student4 = {"Patrick", 0.2};

    // Create an array of student structures
    struct Student students[] = {student1, student2, student3, student4};

    // Loop through the student array and print each student's details
    for(int i = 0; i < sizeof(students)/sizeof(students[0]); i++){

        // Print student's name
        printf("Name : %-12s\t", students[i].name);
        
        // Print student's GPA with 2 decimal precision
        printf("GPA : %.2f\n", students[i].gpa);
    }

    return 0; // Indicate successful execution
}
