#include <stdio.h>
#include <string.h>

//typedef char user[25];//with this line, we declare that variable type char of 25 bites will now be name as user

typedef struct{

    char name[25];
    char password[12];
    int id;

} User;

int main(){

    //typedef = reserved keywork that give an existing data type a "Nickname"

    //char user0[25] = "Samuel";//withou typedef
    //user user1 = "Sam";//with typedef

    //          MORE COMPLEX EXEMPLE

    User user1 = {"Samuel", "password123", 123456789};
    User user2 = {"Sam", "password321", 987654321};

    printf("\n");
    printf("%s\n", user1.name);
    printf("%s\n", user1.password);
    printf("%d\n", user1.id);
    printf("\n");
    printf("%s\n", user2.name);
    printf("%s\n", user2.password);
    printf("%d\n", user2.id);
    printf("\n");

    return 0;
}