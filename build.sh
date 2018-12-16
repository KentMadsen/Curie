#!/bin/bash

#   c
echo 'building : ./sites/css/style.css' >> ./build.txt
sass ./scss/style.scss ./sites/css/style.css  >> ./build.txt