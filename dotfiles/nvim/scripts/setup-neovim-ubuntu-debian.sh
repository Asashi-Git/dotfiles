#!/bin/bash

# Update package database and system
sudo apt update && sudo apt upgrade -y

# Install required packages for Neovim configuration
sudo apt install -y \
  neovim \
  python3 \
  python3-pip \
  php \
  composer \
  gcc \
  clang \
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
  lua5.3 \
  ruby

# Install .NET SDK using snap
sudo snap install dotnet-sdk --classic

# Install Lua language server manually (if needed)
sudo apt install -y lua-lsp

# Install Rust and rust-analyzer using rustup (if needed)
curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh
source $HOME/.cargo/env
rustup install stable
rustup component add rust-analyzer

# Print completion message
echo "All packages installed successfully!"
