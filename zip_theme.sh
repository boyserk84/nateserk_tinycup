#!/bin/bash
# Shell batch on Mac OSX for zip all theme's files.

###
# 06/16/2024 - Just run the following commands directly 
# MacOS isn't able to execute this script successfully.
###
# grep -rl . --exclude-dir=".git" --exclude="zip_theme.sh" --exclude-dir="export" --exclude-dir="docker" --exclude="*.zip" -e "nateserk_tinycup" | xargs sed -i '' -e 's/'"nateserk_tinycup"'/'"YOUR_THEME_NAME"'/g'
# sed -i '' -e 's/Nateserk Tinycup/YOUR_THEME_NAME/g' style.css
# zip -r "YOUR_THEME_NAME.zip" . -x "zip_theme.sh" ".gitignore" ".jshintignore" ".jscsrc" "*.DS_Store" "export/*" "docker/*" ".git/*" "*.zip"
# git checkout .


# TODO: The following script needs to be revised.
timestamp=$(date +%s)
STR_SOURCE="nateserk_tinycup"
echo "Zipping '$STR_SOURCE' theme generated at timestamp=$timestamp \n";
STR_NAME="nateserk_tinycup"

if [ "$1" != "" ]; then
  if [ "$1" == "--rename" ]; then
    if [ "$2" != "" ]; then
      echo "[ Running ] Renaming '$STR_SOURCE' to $2"
      if [[ "$OSTYPE" == "darwin"* ]];  then
        echo "[ Running ] Detecting 'macOSX'. Update 'rename' options. "
        # if running on mac OSX, we need -i '' and -e options.
        # Reference: http://stackoverflow.com/questions/19456518/invalid-command-code-despite-escaping-periods-using-sed
        # Reference: https://apple.stackexchange.com/questions/275373/how-to-make-grep-work-like-in-ubuntu
        # i.e. grep -rl --exclude-dir=".git" --exclude="zip_theme.sh" --exclude-dir="export" nateserk_tinycup . | xargs sed -i '' -e 's/'"nateserk_tinycup"'/'"YOUR_NEW_NAME"'/g'
        grep -rl --exclude-dir=".git" --exclude="zip_theme.sh" --exclude-dir="export" "$STR_SOURCE_NAME" . | xargs sed -i '' -e 's/'"$STR_SOURCE_NAME"'/'"$2"'/g'
      else
        grep -rl --exclude-dir=".git" --exclude="zip_theme.sh" --exclude-dir="export" "$STR_SOURCE_NAME" . | xargs sed -i 's/'"$STR_SOURCE_NAME"'/'"$2"'/g'
      fi
      echo "[ Running ] Replacing content in 'style.css'."
      # Update content in style.css
      sed -i '' -e `s/Nateserk Tinycup/${2}/g` style.css

    else
      echo "[ Error ] Invalid --rename parameter. Abort!"
      exit
    fi
  else
    echo "[ Error ] Invalid command. Abort!"
    exit
  fi
  STR_NAME=$2
else
  echo "[ Warning ] No argument supplied. Archiving 'nateserk_tinycup.zip"
fi

echo "[ Running ] Archiving theme to '"$STR_NAME"'.zip "
result=$(sudo zip -r --exclude=zip_theme.sh --exclude=*.DS_Store* --exclude=export/* -X "export/"$STR_NAME".zip" *)

if [[ $result = *"zip error"* ]]; then
  echo "[ Error ] Zip error occured."
  echo $result
  exit 1
fi

if [ -e ".DS_Store" ]; then
  sudo rm ".DS_Store"
fi

# Clean up and revert changes.
git checkout .

exit 0

