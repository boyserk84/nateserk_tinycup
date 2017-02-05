# Shell batch on Mac OSX for zip all theme's files.
#!/bin/bash
timestamp=$(date +%s)
echo "Zipping 'nateserk_tinycup' theme generated at timestamp=$timestamp \n";
sudo zip -r --exclude=zip_theme.sh --exclude=*.DS_Store* --exclude=export/* -X "export/nateserk_tinycup.zip" *
sudo rm ".DS_Store"
