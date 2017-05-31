cls
echo off
echo -------
echo TABUADA
echo -------

set /p num=Digite um numero:

for /L %%n in (1,1,10) do echo num * %%n
