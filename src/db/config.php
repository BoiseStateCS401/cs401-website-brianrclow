<?php

$localhost_cleardb_url = "mysql://b5b9568d237966:b5ab58cd@us-cdbr-iron-east-05.cleardb.net/heroku_da004f557afe2d0?reconnect=true";

if(!getenv("CLEARDB_DATABASE_URL")) {
	putenv("CLEARDB_DATABSE_URL=$localhost_cleardb_url");
}

