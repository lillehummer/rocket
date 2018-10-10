#!/bin/bash

# Install WordPress if not present
if ! $(wp core is-installed); then
  egrep -lR --exclude='pre-install.sh' 'boilerplatesamtnl' . | xargs sed -i '' -e "s/boilerplatesamtnl/${PWD##*/}/g"
  sh ./src/wp-install.sh
fi

if [ ! -d wp-content/themes/${PWD##*/} ]; then
  printf '\e[0;96m Cloning theme...\e[0m\n'
  git clone --depth=1 --branch=master git@github.com:lillehummer/sabi.git wp-content/themes/${PWD##*/}
  rm -rf wp-content/themes/${PWD##*/}/.git
  printf '\e[0;96m Replacing strings in theme...\e[0m\n'
  egrep -lR --exclude='pre-install.sh' 'boilerplatesamtnl' . | xargs sed -i '' -e "s/boilerplatesamtnl/${PWD##*/}/g"
  printf '\e[0;96m Activating theme...\e[0m\n'
  wp theme activate ${PWD##*/}
fi

cd wp-content/themes/${PWD##*/}
printf '\e[0;96m Installing dependencies using Yarn...\e[0m\n'
yarn install
