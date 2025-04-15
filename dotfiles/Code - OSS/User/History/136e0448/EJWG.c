#include <stdio.h>
#include <stdlib.h>
#include <termios.h>
#include <unistd.h>
#include <time.h>

#define WIDTH 20
#define HEIGHT 20
#define MAX_SNAKE_LENGTH 100

// Game variables
int gameOver;
int score;
int x, y, foodX, foodY; // Snake's head position and food position
int tailX[MAX_SNAKE_LENGTH], tailY[MAX_SNAKE_LENGTH]; // Snake's body
int tailLength; // Length of the snake
int direction; // 0=UP, 1=DOWN, 2=LEFT, 3=RIGHT

// Non-blocking input handling
struct termios orig_termios;

// Function to restore terminal settings
void reset_terminal_mode() {
    tcsetattr(STDIN_FILENO, TCSANOW, &orig_termios);
}

// Function to set terminal to raw mode
void set_conio_terminal_mode() {
    struct termios new_termios;
    tcgetattr(STDIN_FILENO, &orig_termios);
    atexit(reset_terminal_mode);
    new_termios = orig_termios;
    new_termios.c_lflag &= ~(ICANON | ECHO);
    tcsetattr(STDIN_FILENO, TCSANOW, &new_termios);
}

// Check if a key has been pressed
int kbhit() {
    struct timeval tv = {0, 0};
    fd_set fds;
    FD_ZERO(&fds);
    FD_SET(STDIN_FILENO, &fds);
    return select(STDIN_FILENO + 1, &fds, NULL, NULL, &tv);
}

// Get a single character input
char getch() {
    char buf = 0;
    read(STDIN_FILENO, &buf, 1);
    return buf;
}

// Initialize the game
void initializeGame() {
    gameOver = 0;
    score = 0;
    x = WIDTH / 2;
    y = HEIGHT / 2;
    foodX = rand() % WIDTH;
    foodY = rand() % HEIGHT;
    tailLength = 0;
    direction = 3; // Start moving RIGHT
}

// Draw the grid and game state
void draw() {
    system("clear"); // Clear the terminal
    for (int i = 0; i < WIDTH + 2; i++) printf("#");
    printf("\n");

    for (int i = 0; i < HEIGHT; i++) {
        for (int j = 0; j < WIDTH; j++) {
            if (j == 0) printf("#");
            if (i == y && j == x)
                printf("O"); // Snake's head
            else if (i == foodY && j == foodX)
                printf("*"); // Food
            else {
                int isBody = 0;
                for (int k = 0; k < tailLength; k++) {
                    if (tailX[k] == j && tailY[k] == i) {
                        printf("o");
                        isBody = 1;
                    }
                }
                if (!isBody) printf(" ");
            }
            if (j == WIDTH - 1) printf("#");
        }
        printf("\n");
    }

    for (int i = 0; i < WIDTH + 2; i++) printf("#");
    printf("\n");
    printf("Score: %d\n", score);
}

// Take input from the user
void input() {
    if (kbhit()) {
        char key = getch();
        switch (key) {
            case 'w': direction = 0; break;
            case 's': direction = 1; break;
            case 'a': direction = 2; break;
            case 'd': direction = 3; break;
            case 'x': gameOver = 1; break; // Exit the game
        }
    }
}

// Update the game state
void update() {
    int prevX = tailX[0], prevY = tailY[0];
    int prev2X, prev2Y;
    tailX[0] = x;
    tailY[0] = y;

    for (int i = 1; i < tailLength; i++) {
        prev2X = tailX[i];
        prev2Y = tailY[i];
        tailX[i] = prevX;
        tailY[i] = prevY;
        prevX = prev2X;
        prevY = prev2Y;
    }

    switch (direction) {
        case 0: y--; break; // UP
        case 1: y++; break; // DOWN
        case 2: x--; break; // LEFT
        case 3: x++; break; // RIGHT
    }

    // Check for collision with walls
    if (x < 0 || x >= WIDTH || y < 0 || y >= HEIGHT) gameOver = 1;

    // Check for collision with itself
    for (int i = 0; i < tailLength; i++) {
        if (tailX[i] == x && tailY[i] == y) gameOver = 1;
    }

    // Check if food is eaten
    if (x == foodX && y == foodY) {
        score += 10;
        foodX = rand() % WIDTH;
        foodY = rand() % HEIGHT;
        tailLength++;
    }
}

// Main function
int main() {
    set_conio_terminal_mode();
    srand(time(0));
    initializeGame();

    while (!gameOver) {
        draw();
        input();
        update();
        usleep(100000); // Delay to control game speed
    }

    printf("Game Over! Final Score: %d\n", score);
    return 0;
}
