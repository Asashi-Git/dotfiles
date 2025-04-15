#include <stdio.h>

// Define an enumeration for days of the week
// Assign specific integer values to each day
enum Day {Sun = 1, Mon = 2, Tue = 3, Wed = 4, Thu = 5, Fri = 6, Sat = 7};

int main() {
    
    // Enum is a user-defined type consisting of named integer identifiers
    // It improves code readability by replacing numeric constants with meaningful names
    
    enum Day today = Sat; // Assign the value corresponding to Saturday

    // Print the integer value of today (Uncomment to see the result)
    // printf("%d\n", today); // Enums are not strings but can be treated as integers

    // Check if today is a weekend (Saturday or Sunday)
    if (today == Sun || today == Sat) {
        printf("\nIt's the weekend!\n");
    } else {
        // If it's a weekday, print a work-related message
        printf("\nI have to work today :(\n");
    }

    return 0; // Indicate successful execution
}
