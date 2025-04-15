#include <stdio.h>
#include <string.h>

struct Player{

    char name[12];
    int score;

};

int main(){

    //struct = collection of related members (variables)
    //          they can be of defferent data type
    //          listed under one name in a block of memory
    //          VERY SIMILAR to classes in other language (but no methods)

    struct Player player1;
    struct Player player2;

    strcpy(player1.name, "Samva");
    player1.score = 4;

    strcpy(player2.name, "Samsoul");
    player2.score = 5;

    return 0;
}