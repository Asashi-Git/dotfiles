#include <stdio.h>

// Function to sort an array using the Bubble Sort algorithm
void sort(int array[], int size){
    // Outer loop: Iterate through the array elements
    for(int i = 0; i < size - 1; i++){
        
        // Inner loop: Compare adjacent elements and swap if necessary
        for(int j = 0; j < size - 1; j++){
            
            // Swap if the current element is greater than the next element
            if(array[j] > array[j + 1]){
                int temp = array[j];
                array[j] = array[j+1];
                array[j+1] = temp;
            }
        }
    }
}

// Function to print the elements of an array
void print_array(int array[], int size){//
    // Iterate through the array and print each element
    for(int i = 0; i < size; i++){
        printf("%d ", array[i]);//if we do it with characters, change the %d to %c
    }
}

int main(){
    // Declare and initialize an array
    int array[] = {9, 1, 8, 2, 7, 3, 6, 4, 5};
    //char array[] = {'A', 'D', 'F', 'C', 'B', 'E'};// To do it with characters
    int size = sizeof(array)/sizeof(array[0]); // Calculate the size of the array

    sort(array, size); // Call the sorting function
    print_array(array, size); // Print the sorted array
    printf("\n"); // Print a newline character for formatting

    return 0; // Indicate successful program termination
}
