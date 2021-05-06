#!/bin/sh
# build.sh - PHP to static file generator
BASE=$(pwd)
DEST="public_html"

# Limpiar public_html
rm -r public_html

# Run PHP on gig folders and output HTML ready for static hosting
find . -maxdepth 1 -type d ! -name "public_html" ! -name "plantillas" | sed 's/.\///' | \
while read x; do \
	if test -f "$x/index.php"; then \
		echo "$x/index.php exist" ; \
	    mkdir -p "$DEST/$x/" && cd "$BASE/$x" && php "index.php" > "$BASE/$DEST/$x/index.html" & \
	    echo "Processed $x" ; \
	fi;\
done

cd "$BASE"
cp netlify.toml "$DEST"
cp -r static "$DEST"
cp -r presupuestos "$DEST"
cp LICENSE "$DEST"
php "404.php" > "$BASE/$DEST/404.html"
