// flip_lr_image.c
// This program flips an image horizontally by swapping pixels from left to right.

#include "image.h"
#include <stdlib.h>

// Function to swap two pixels
void swap_pixels(t_pixel *a, t_pixel *b) {
    t_pixel temp = *a;// Store the value of pixel a in a temporary variable
    *a = *b;          // Assign the value of pixel b to pixel a
    *b = temp;        // Assign the temporary stored value to pixel b
}

// Function to flip an image horizontally (left-right)
void flip_lr_image(t_image image) {
    // Iterate through each row of the image
    for (unsigned int i = 0; i < image.height; i++) {
        // Iterate through half of the columns (to swap pixels symmetrically)
        for (unsigned int j = 0; j < image.width / 2; j++) {
            // Swap pixels at the left and right positions in the row
            swap_pixels(&image.pixels[i * image.width + j], 
                        &image.pixels[i * image.width + (image.width - j - 1)]);
        }
    }
}