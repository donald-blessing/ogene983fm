#!/bin/bash

# Configuration
SOURCE_PASS="super_secure_source_password"
RELAY_PASS="super_secure_relay_password"
ADMIN_PASS="super_secure_admin_password"
HOSTNAME="ogenefm.com"
PORT="8010"

# Detect OS
OS=$(uname -s)

if [ "$OS" == "Darwin" ]; then
    echo "🍎 Detected MacOS. Assuming Homebrew..."
    if ! command -v brew &> /dev/null; then
        echo "❌ Homebrew not found. Please install it first at https://brew.sh"
        exit 1
    fi
    brew install icecast

    # Path handling for Apple Silicon vs Intel
    if [ -f "/opt/homebrew/etc/icecast.xml" ]; then
        CONFIG_FILE="/opt/homebrew/etc/icecast.xml"
    else
        CONFIG_FILE="/usr/local/etc/icecast.xml"
    fi

elif [ "$OS" == "Linux" ]; then
    echo "🐧 Detected Linux (Ubuntu). Assuming apt..."
    sudo apt update && sudo apt install -y icecast2
    CONFIG_FILE="/etc/icecast2/icecast.xml"
else
    echo "❌ Usage: This script works on MacOS or Ubuntu Linux."
    exit 1
fi

echo "🔧 Configuring Icecast at $CONFIG_FILE..."

# Backup original config
cp "$CONFIG_FILE" "$CONFIG_FILE.bak"

# Inject Passwords using sed (Mac requires '' after -i, Linux does not)
if [ "$OS" == "Darwin" ]; then
    sed -i '' "s/<source-password>hackme<\/source-password>/<source-password>$SOURCE_PASS<\/source-password>/g" "$CONFIG_FILE"
    sed -i '' "s/<relay-password>hackme<\/relay-password>/<relay-password>$RELAY_PASS<\/relay-password>/g" "$CONFIG_FILE"
    sed -i '' "s/<admin-password>hackme<\/admin-password>/<admin-password>$ADMIN_PASS<\/admin-password>/g" "$CONFIG_FILE"
    sed -i '' "s/localhost/$HOSTNAME/g" "$CONFIG_FILE"
    sed -i '' "s/<port>8000<\/port>/<port>$PORT<\/port>/g" "$CONFIG_FILE"
else
    sudo sed -i "s/<source-password>hackme<\/source-password>/<source-password>$SOURCE_PASS<\/source-password>/g" "$CONFIG_FILE"
    sudo sed -i "s/<relay-password>hackme<\/relay-password>/<relay-password>$RELAY_PASS<\/relay-password>/g" "$CONFIG_FILE"
    sudo sed -i "s/<admin-password>hackme<\/admin-password>/<admin-password>$ADMIN_PASS<\/admin-password>/g" "$CONFIG_FILE"
    sudo sed -i "s/localhost/$HOSTNAME/g" "$CONFIG_FILE"
    sudo sed -i "s/<port>8000<\/port>/<port>$PORT<\/port>/g" "$CONFIG_FILE"
fi

echo "✅ Configuration Updated."

# Restart Service
if [ "$OS" == "Darwin" ]; then
    echo "🔄 Restarting Icecast on macOS..."
    pkill icecast 2>/dev/null
    icecast -b -c "$CONFIG_FILE"
else
    echo "🔄 Restarting Icecast on Linux..."
    sudo systemctl restart icecast2
fi

echo "🚀 Icecast is running!"
echo "➡️  Admin Panel: http://localhost:$PORT"
echo "➡️  Credentials: admin / $ADMIN_PASS"
