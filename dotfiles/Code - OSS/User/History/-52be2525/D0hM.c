#include <stdio.h>
#include <ctype.h> // Include ctype.h for toupper function

int main() {
    // Open the file "test.txt" in read mode
    FILE *pF = fopen("test.txt", "r"); 
    if (pF == NULL) { // Check if the file exists or can be opened
        printf("Unable to open file!\n");
        return 1; // Return an error code
    }

    char buffer[255]; // Buffer to store each line of the file
    
    // Open a temporary file "temp.txt" in write mode
    FILE *tempF = fopen("temp.txt", "w"); 
    if (tempF == NULL) { // Check if the temp file can be created
        printf("Unable to create temp file!\n");
        fclose(pF); // Close the input file before exiting
        return 1; // Return an error code
    }

    // Read the original file line by line and convert characters to uppercase
    while (fgets(buffer, sizeof(buffer), pF) != NULL) {
        for (int i = 0; buffer[i] != '\0'; i++) { // Iterate through each character
            buffer[i] = toupper(buffer[i]); // Convert character to uppercase
        }
        fputs(buffer, tempF); // Write the modified line to the temporary file
    }

    // Close both files after processing
    fclose(pF);
    fclose(tempF);

    // Remove the original file and replace it with the modified file
    remove("test.txt");
    rename("temp.txt", "test.txt");

    printf("File converted to uppercase successfully.\n");
    
    return 0; // Indicate successful execution
}
