# Shell batch on Mac OSX for updating this wordpress theme on server
# Run this only if the theme's zip file is in the folder wp-content/theme
# If you choose to upload the theme via wordpress admin page, you can ignore the last command (unzip).
#!/bin/bash
echo "BACKUP nateserk_tinycup theme folder. \n"
sudo mv nateserk_tinycup nateserk_tinycup_BACKUP
echo "Unzip nateserk_tinycup into nateserk_tinycup directory! \n"
sudo unzip "nateserk_tinycup.zip" -d nateserk_tinycup
