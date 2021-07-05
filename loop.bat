@echo off
set hour=%time:~0,2%
set min=%time:~3,2%

:loop
if %hour% == 0 (\
        start php artisan schedule:run
)
echo %hour%
echo %min%
timeout 60 > nul
goto loop
:END