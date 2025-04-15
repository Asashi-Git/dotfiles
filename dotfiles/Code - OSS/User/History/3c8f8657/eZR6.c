// grayscale_image.c
// This program converts a color image to grayscale by averaging the RGB values of each pixel.

#include "image.h"  // Include the header file that defines the t_image structure.

void grayscale_image(t_image image) {
    // Loop through each pixel in the image.
    for (unsigned int i = 0; i < image.width * image.height; i++) {
        // Compute the grayscale value by averaging the red, green, and blue components.
        unsigned char gray = (image.pixels[i].r + image.pixels[i].g + image.pixels[i].b) / 3;
        
        // Assign the grayscale value to all three color components (R, G, and B).
        image.pixels[i].r = gray;
        image.pixels[i].g = gray;
        image.pixels[i].b = gray;
    }
}
