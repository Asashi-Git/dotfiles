#!/bin/bash

# Update package database and system
sudo pacman -Syu

# Install required packages for Neovim configuration
sudo pacman -S --noconfirm \
	neovim \
	python \
	python-pip \
	php \
	composer \
	gcc \
	clang \
	dotnet-sdk \
	nodejs \
	npm \
	git \
	curl \
	ripgrep \
	fzf \
	tmux \
	zsh \
	bat \
	tree \
	shellcheck \
	make \
	cmake \
	lua \
	lua-language-server \
	jdtls \
	ruby \
	rubygems

# Optional: If you want to install additional language servers
# Install rust and rust-analyzer
sudo pacman -S --noconfirm rust rust-analyzer

# Print completion message
echo "All packages installed successfully!"
