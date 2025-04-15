#include <stdio.h>
#include <ctype.h>

int main() {
    FILE *pF = fopen("test.txt", "r"); // Open file in read mode
    if (pF == NULL) {
        printf("Unable to open file!\n");
        return 1;
    }

    char buffer[255];
    FILE *tempF = fopen("temp.txt", "w"); // Temporary file for modified content
    if (tempF == NULL) {
        printf("Unable to create temp file!\n");
        fclose(pF);
        return 1;
    }

    // Read the file and convert to uppercase
    while (fgets(buffer, sizeof(buffer), pF) != NULL) {
        for (int i = 0; buffer[i] != '\0'; i++) {
            buffer[i] = toupper(buffer[i]);
        }
        fputs(buffer, tempF);
    }

    fclose(pF);
    fclose(tempF);

    // Replace the original file with the modified file
    remove("test.txt");
    rename("temp.txt", "test.txt");

    printf("File converted to uppercase successfully.\n");

    return 0;
}
