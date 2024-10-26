#!/bin/sh

if [ -d "node_modules" ]; then
  npm run watch
else
  npm install
  npm run watch
fi