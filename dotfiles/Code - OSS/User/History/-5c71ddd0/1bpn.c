#include <stdio.h>
#include <string.h>

// Define a structure to store player information
struct Player{
    char name[12];  // Character array to store player's name (max 11 characters + null terminator)
    int score;      // Integer to store player's score
};

int main(){

    // A struct is a collection of related members (variables)
    // They can be of different data types
    // All members are listed under one name in a block of memory
    // Structs in C are similar to classes in other languages but do not have methods

    // Declare two instances of the Player struct
    struct Player player1;
    struct Player player2;

    // Assign values to player1
    strcpy(player1.name, "Samva");  // Copy string "Samva" to player1's name
    player1.score = 4;               // Assign score 4 to player1

    // Assign values to player2
    strcpy(player2.name, "Samsoul"); // Copy string "Samsoul" to player2's name
    player2.score = 5;                // Assign score 5 to player2

    // Print player1's details
    printf("%s\n", player1.name);  // Print player1's name
    printf("%d\n", player1.score); // Print player1's score

    // Print player2's details
    printf("%s\n", player2.name);  // Print player2's name
    printf("%d\n", player2.score); // Print player2's score

    return 0; // Indicate successful execution
}
