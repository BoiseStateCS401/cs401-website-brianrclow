#!/bin/bash

USER=b5b9568d237966
PASSWORD=b5ab58cd
HOST=us-cdbr-iron-east-05.cleardb.net
DATABASE=heroku_da004f557afe2d0

# IF t=name of script is passed as argument, then have mysql execute script.
if [[ $# == 1 ]]; then
    mysql --user="$USER" --password="$PASSWORD" $DATABASE --host="$HOST" < $1;
else
    mysql --user="$USER" --password="$PASSWORD" $DATABASE --host="$HOST";
fi

