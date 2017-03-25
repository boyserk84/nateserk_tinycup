# Shell batch on Mac OSX for zip all theme's files.
#!/bin/bash
timestamp=$(date +%s)
echo "Zipping 'nateserk_tinycup' theme generated at timestamp=$timestamp \n";

if [ "$1" != "" ]; then
  if [ "$1" == "--rename" ]; then
    if [ "$2" != "" ]; then
      echo "[ Running ] Renaming 'nateserk_tinycup' to $2"
      if [[ "$OSTYPE" == "darwin"* ]];  then
        echo "[ Running ] Detecting 'macOSX'. Update 'rename' options. "
        # if running on mac OSX, we need -i '' and -e options.
        # Reference: http://stackoverflow.com/questions/19456518/invalid-command-code-despite-escaping-periods-using-sed
        grep -rl --exclude-dir=".git" --exclude="zip_theme.sh" --exclude-dir="./export" 'nateserk_tinycup' . | xargs sed -i '' -e 's/nateserk_tinycup/'"$2"'/g'
      else
        grep -rl --exclude-dir=".git" --exclude="zip_theme.sh" --exclude-dir="./export" 'nateserk_tinycup' . | xargs sed -i 's/nateserk_tinycup/'"$2"'/g'
      fi
      echo "[ Running ] Replacing content in 'style.css'."
      # Update content in style.css
      sed -i '' -e 's/Nateserk Tinycup/'$2'/g' style.css

    else
      echo "[ Error ] Invalid --rename parameter. Abort!"
      exit
    fi
  else
    echo "[ Error ] Invalid command. Abort!"
    exit
  fi
else
  echo "[ Warning ] No argument supplied. Archiving 'nateserk_tinycup.zip"
  "$2" = "nateserk_tinycup"
fi

echo "[ Running ] Archiving theme to '"$2"'.zip "
sudo zip -r --exclude=zip_theme.sh --exclude=*.DS_Store* --exclude=export/* -X "export/$2.zip" *
sudo rm ".DS_Store"
