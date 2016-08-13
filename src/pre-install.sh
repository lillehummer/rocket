#!/bin/bash

# Install WordPress if not present
if ! $(wp core is-installed); then
  egrep -lR --exclude='pre-install.sh' 'lillehummernl' . | xargs sed -i '' -e "s/lillehummernl/${PWD##*/}/g"
  sh ./src/wp-install.sh
fi

if [ ! -d wp-content/themes/${PWD##*/} ]; then
  printf '\e[0;96m Cloning theme...\e[0m\n'
  git clone --depth=1 --branch=master git@github.com:lillehummer/exoskeleton.git wp-content/themes/${PWD##*/}
  rm -rf wp-content/themes/${PWD##*/}/.git
  printf '\e[0;96m Replacing strings in theme...\e[0m\n'
  egrep -lR --exclude='pre-install.sh' 'lillehummernl' . | xargs sed -i '' -e "s/lillehummernl/${PWD##*/}/g"
  printf '\e[0;96m Activating theme...\e[0m\n'
  wp theme activate ${PWD##*/}
fi

cd wp-content/themes/${PWD##*/}
printf '\e[0;96m Updating NPM...\e[0m\n'
npm install
printf '\e[0;96m Updating Bower...\e[0m\n'
bower install
