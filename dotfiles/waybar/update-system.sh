#!/usr/bin/env bash
# Save as ~/.config/waybar/update-system.sh

# Function for notifications
notify() {
    notify-send "System Update" "$1" -i system-software-update
}

# Notify start
notify "Preparing update..."

# Create a small helper script that will run with elevated privileges
TMP_SCRIPT=$(mktemp)
cat > "$TMP_SCRIPT" << 'EOF'
#!/bin/bash
pacman -Syu --noconfirm
exit $?
EOF
chmod +x "$TMP_SCRIPT"

# Run with pkexec and capture exit status
notify "Authentication required..." 
if pkexec "$TMP_SCRIPT"; then
    notify "System updated successfully!"
else
    notify-send -u critical "System Update" "Update failed. Check system logs." -i dialog-error
fi

# Clean up
rm "$TMP_SCRIPT"

