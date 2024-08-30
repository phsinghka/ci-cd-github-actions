#!/bin/bash

# Stop Apache server
sudo systemctl stop apache2

# Copy files to the web server root
rsync -avz --delete ../src/ /var/www/html/

# Set correct permissions
sudo chown -R www-data:www-data /var/www/html

# Start Apache server
sudo systemctl start apache2

echo "Deployment completed!"

