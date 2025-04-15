#include <stdio.h>

int main(){

    //2D array = an array, where each element is an entire array
    //          useful if you need a matrix, grid, or table of data

    //          !!!         CREATING A 2D ARRAY             !!!

    //we can't declare a 2D array without assigning maximum size of data in the individual array
    int numbers1[2][3] = {{1, 2, 3},//here we have [2] array with [3] data
                         {4, 5, 6}};

    //          !!!         OTHER METHOD TO DECLARE AN ARRAY            !!!

    int numbers2[2][3];
    int rows = sizeof(numbers2) / sizeof(numbers2[0]);
    int colums = sizeof(numbers2);

    numbers2[0][0] = 1;
    numbers2[0][1] = 2;
    numbers2[0][2] = 3;
    numbers2[1][0] = 4;
    numbers2[1][1] = 5;
    numbers2[1][2] = 6;

    for(int i = 0; i < rows; i++){
        for(int j = 0; j < colums; j++){
            printf("%d ", numbers2[i][j]);
        }
        printf("\n");
    }


    return 0;
}