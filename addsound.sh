#!/bin/bash
if [ $# -eq 2 ]; then
	soundname="$2"
	youtubelink="$1"
	echo "Downloading $youtubelink renaming to $soundname"
	youtube-dl --extract-audio --audio-format mp3 $1 -o audio/$2
	git add audio/$2
else
	echo "USAGE: ./addsound youtubelink soundname"
fi
