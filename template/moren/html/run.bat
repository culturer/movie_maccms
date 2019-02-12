set dir=%~dp0
for /f "delims=" %%i in ('dir /ad/b/s "%dir%"') do (ren %%i\*.html *.php)
pause