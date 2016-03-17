#!/usr/bin/env bash

./vendor/bin/phpdoc -d src/ -t docs/ --template="xml"
./vendor/bin/phpdocmd docs/structure.xml docs/

rm -rf ./output
rm -rf ./docs/phpdoc-cache-*
rm ./docs/structure.xml

mv ./docs/ApiIndex.md ./docs/README.md