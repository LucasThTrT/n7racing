#!/bin/bash

# Chemin vers le répertoire de votre site web
WEB_DIR=~/n7racing

# Aller dans le répertoire du site web
cd $WEB_DIR || exit

# Mettre à jour le dépôt Git
git pull origin main
