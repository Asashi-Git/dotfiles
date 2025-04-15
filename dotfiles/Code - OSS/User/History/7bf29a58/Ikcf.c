#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>
#include <time.h>

// Define the tic-tac-toe board
char board[3][3];
const char PLAYER = 'X';
const char COMPUTER = 'O';

// Function prototypes
void reset_board();
void print_board();
int check_free_spaces();
void player_move();
void computer_move();
char check_winner();
void print_winner(char);

int main(){
    char winner = ' ';
    char response;

    do{
        // char winner = ' ';
        char response = ' ';
        // reset_board(); // Initialize the board with empty spaces

        // while(winner == ' ' && check_free_spaces() != 0){
        //     print_board(); // Display the board

        //     player_move(); // Get player's move
        //     winner = check_winner(); // Check if player wins
        //     if(winner != ' ' || check_free_spaces() == 0){
        //         break;
        //     }

        //     computer_move(); // Get computer's move
        //     winner = check_winner(); // Check if computer wins
        //     if(winner != ' ' || check_free_spaces() == 0){
        //         break;
        //     }
        // }

        // print_board(); // Display final board state
        // print_winner(winner); // Display the result

        // printf("Would you like to play again ? (Y/N): ");
        scanf("\n%c", &response);
        response = toupper(response);
        printf("%d\n", response);
    } while(response > 40);

    printf("Thanks for playing my game ! :)");

    return 0;
}

// Function to reset the board
void reset_board(){
    for(int i = 0; i < 3; i++){
        for(int j = 0; j < 3; j++){
            board[i][j] = ' '; // Set all cells to empty
        }
    }
}

// Function to print the current board state
void print_board(){
    printf(" %c | %c | %c", board[0][0], board[0][1], board[0][2]);
    printf("\n---|---|---\n");
    printf(" %c | %c | %c", board[1][0], board[1][1], board[1][2]);
    printf("\n---|---|---\n");
    printf(" %c | %c | %c", board[2][0], board[2][1], board[2][2]);
    printf("\n");
}

// Function to count the number of free spaces
int check_free_spaces(){
    int free_spaces = 9;
    for(int i = 0; i < 3; i++){
        for(int j = 0; j < 3; j++){
            if(board[i][j] != ' '){
                free_spaces--; // Reduce count if the cell is occupied
            }
        }
    }
    return free_spaces;
}

// Function to handle player's move
void player_move(){
    int x, y;
    do{
        printf("Enter row number (1, 2, 3) :");
        scanf("%d", &x);
        x--;
        printf("Enter column number (1, 2, 3) :");
        scanf("%d", &y);
        y--;

        if(board[x][y] != ' '){
            printf("Invalid Move! Try again.\n");
        }else{
            board[x][y] = PLAYER; // Mark player's move on the board
            break;
        }
    }while(board[x][y] != ' ');
}

// Function to handle computer's move
void computer_move(){
    srand(time(0)); // Seed the random number generator
    int x, y;
    if(check_free_spaces() > 0){
        do{
            x = rand() % 3;
            y = rand() % 3;
        }while(board[x][y] != ' '); // Find a free space

        board[x][y] = COMPUTER; // Mark computer's move on the board
    }else{
        print_winner(' '); // If no spaces left, it's a tie
    }
}

// Function to check if there is a winner
char check_winner(){
    // Check rows
    for(int i = 0; i < 3; i++){
        if(board[i][0] == board[i][1] && board[i][0] == board[i][2] && board[i][0] != ' '){
            return board[i][0];
        }
    }
    // Check columns
    for(int i = 0; i < 3; i++){
        if(board[0][i] == board[1][i] && board[0][i] == board[2][i] && board[0][i] != ' '){
            return board[0][i];
        }
    }
    // Check diagonals
    if(board[0][0] == board[1][1] && board[0][0] == board[2][2] && board[0][0] != ' '){
        return board[0][0];
    }
    if(board[0][2] == board[1][1] && board[0][2] == board[2][0] && board[0][2] != ' '){
        return board[0][2];
    }
    return ' '; // No winner yet
}

// Function to print the winner
void print_winner(char winner){
    if(winner == PLAYER){
        printf("You win!\n");
    }else if(winner == COMPUTER){
        printf("You lose!\n");
    }else{
        printf("It's a TIE!\n");
    }
}
