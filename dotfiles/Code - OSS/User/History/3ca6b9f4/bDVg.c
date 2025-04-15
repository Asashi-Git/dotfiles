#include <stdio.h>

//ternary operator = shortcut to if/else 

int find_max(int x, int y){

    // if(x > y){
    //     return x;
    // }
    // else{
    //     return y;
    // }

    //to avoid all these line we can use an ternary operator
    return (x > y) ? x : y; //  ? = if true
                            //  : = if false
}

int main(){

    int max = find_max(5, 4);

    printf("%d\n", max);

    return 0;
}