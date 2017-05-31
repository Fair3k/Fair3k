cls
echo off
echo -------
echo Backup
echo -------

set /p pastorig=Digite a pasta origem:
set /p pastadest=Digite a pasta origem:
set /p typearq=Digite o tipo de arquivo:

copy pastorig/*.typearq pastadest/*.typearq
