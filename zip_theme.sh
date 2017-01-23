# Shell batch on Mac OSX for zip all theme's files.
#!/bin/bash
echo "Zipping 'nateserk_tinycup' theme.\n";
sudo zip -r --exclude=zip_theme.sh --exclude=*.DS_Store* --exclude=export/ -X "export/nateserk_tinycup.zip" *
sudo rm ".DS_Store"
