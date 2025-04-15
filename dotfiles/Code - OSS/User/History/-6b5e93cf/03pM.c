#include <stdio.h>
#include <string.h>

//typedef char user[25];//with this line, we declare that variable type char of 25 bites will now be name as user

typedef struct{

    char name[25];
    char password[12];
    int id;

}

int main(){

    //typedef = reserved keywork that give an existing data type a "Nickname"

    //char user0[25] = "Samuel";//withou typedef
    //user user1 = "Sam";//with typedef

    //          MORE COMPLEX EXEMPLE


    return 0;
}