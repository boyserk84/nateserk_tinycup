# Shell batch on Mac OSX for zip all theme's files.
#!/bin/bash
timestamp=$(date +%s)
echo "Zipping 'nateserk_tinycup' theme generated at timestamp=$timestamp \n";

if [ "$1" != "" ]; then
  if [ "$1" == "--rename" ]; then
    if [ "$2" != "" ]; then
      grep -rl 'nateserk_tinycup' ./ | xargs sed -i 's/nateserk_tinycup/$2/g'
    else
      echo "Invalid --rename parameter. Abort!"
      exit
    fi
  else
    echo "Invalid command. Abort!"
    exit
  fi
else
  echo "No argument suppled. Archiving 'nateserk_tinycup.zip"
fi
#sudo zip -r --exclude=zip_theme.sh --exclude=*.DS_Store* --exclude=export/* -X "export/nateserk_tinycup.zip" *
#//sudo rm ".DS_Store"
