#include <stdbool.h>

struct pixel {
	unsigned char r;
	unsigned char g;
	unsigned char b;
};
typedef struct pixel t_pixel;

struct image {
	t_pixel			*pixels;
	unsigned int	width;
	unsigned int	height;
};
typedef struct image t_image;

struct rect {
	unsigned int left;
	unsigned int up;
	unsigned int width;
	unsigned int height;
};
typedef struct rect t_rect;

// Fonction qui crée une image à partir d'un fichier .ppm
bool load_ppm(char *path, t_image *image);
// Fonction qui crée un fichier .ppm à partir d'une image
bool save_ppm(char *path, t_image image);

void fill_image(t_image *image, t_pixel color);
void fill_rect(t_image *image, t_pixel color, t_rect rect);

void destroy_image(t_image image);



/////// Fonctions du TP noté:

// Ces fonctions sont à implémenter vous-même, dans un fichier séparé
// Exemple : grayscale_image.c

// Fonction qui convertit l'image en noir et blanc.
// Indice : faites la moyenne des couleurs de chaque pixel.
void grayscale_image(t_image image);

// Fonction qui inverse la gauche et la droite de l'image.
// Indice : utilisez swap
void flip_lr_image(t_image image);

// Fonction qui coupe l'image pour garder uniquement la partie dans rect.
// La nouvelle image doit faire la même largeur/hauteur que le rectangle.
// Indice : utilisez malloc et free
void crop_image(t_image *destination, t_rect rect);

/////// Fin des fonctions du tp noté
