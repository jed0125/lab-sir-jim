// jed valenzuela


#include <iostream>
#include <cstdlib>
#include <ctime>

int main() {
    // Seed the random number generator
    std::srand(static_cast<unsigned int>(std::time(nullptr)));
    
    // Generate a random number between 1 and 100
    int secretNumber = rand() % 100 + 1;
    int guess = 0;
    int attempts = 0;
    bool hasWon = false;
    
    // Game introduction
    std::cout << "=== Number Guessing Game ===" << std::endl;
    std::cout << "I'm thinking of a number between 1 and 100." << std::endl;
    std::cout << "Try to guess it!" << std::endl << std::endl;
    
    // Main game loop
    while (!hasWon) {
        // Get user's guess
        std::cout << "Enter your guess: ";
        std::cin >> guess;
        attempts++;
        
        // Input validation
        if (std::cin.fail()) {
            std::cin.clear();
            std::cin.ignore(10000, '\n');
            std::cout << "Please enter a valid number." << std::endl;
            continue;
        }
        
        // Check if guess is correct
        if (guess == secretNumber) {
            hasWon = true;
        }
        // Provide hint if guess is incorrect
        else if (guess < secretNumber) {
            std::cout << "Too low! Try again." << std::endl;
        }
        else {
            std::cout << "Too high! Try again." << std::endl;
        }
    }
    
    // Game completion message
    std::cout << std::endl;
    std::cout << "Congratulations! You guessed the number " << secretNumber << "!" << std::endl;
    std::cout << "It took you " << attempts << " attempts." << std::endl;
    
    // Performance evaluation
    if (attempts <= 3) {
        std::cout << "Amazing job! Are you psychic?" << std::endl;
    }
    else if (attempts <= 7) {
        std::cout << "Great job! You're a good guesser!" << std::endl;
    }
    else if (attempts <= 10) {
        std::cout << "Nice work! That was a tough one." << std::endl;
    }
    else {
        std::cout << "You got it eventually! Practice makes perfect." << std::endl;
    }
    
    return 0;
}
