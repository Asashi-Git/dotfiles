#include <stdio.h>
#include <string.h>

// Defining a struct to store user information
// This struct contains a name (char array of 25 bytes),
// a password (char array of 12 bytes), and an integer ID

typedef struct {
    char name[25];      // Stores the user's name (max 25 characters)
    char password[12];  // Stores the user's password (max 12 characters)
    int id;             // Stores the user's ID as an integer
} User;

int main() {
    // Typedef allows us to create a "nickname" for an existing data type
    // Instead of writing "struct User", we can now just write "User"

    // Example of creating and initializing two User instances
    User user1 = {"Samuel", "password123", 123456789};
    User user2 = {"Sam", "password321", 987654321};

    // Printing user1 details
    printf("\n");
    printf("%s\n", user1.name);     // Print user1's name
    printf("%s\n", user1.password); // Print user1's password
    printf("%d\n", user1.id);       // Print user1's ID
    printf("\n");

    // Printing user2 details
    printf("%s\n", user2.name);     // Print user2's name
    printf("%s\n", user2.password); // Print user2's password
    printf("%d\n", user2.id);       // Print user2's ID
    printf("\n");

    return 0;
}
