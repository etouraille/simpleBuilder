This is a simple enpoint to launch a script on a the host machine

Usefull to trigger build.sh from a github hook ( the case of this use )

Some tricky stuff to enable calling a shell script from a container using ssh. 

The install script, wich deploy the env ( php7 + nginx )enable also ssh connection beetween the www-data user and the host server.
