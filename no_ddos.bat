rem /*======================================================================*\
rem || #################################################################### ||
rem || # ---------------------------------------------------------------- # ||
rem || #                 Copyright ©2011-2016 Amir Torrez                 # ||
rem || # ---------------------------------------------------------------- # ||
rem || # amirtorrez@openmailbox.org                      torzap.github.io # ||
rem || #################################################################### ||
rem \*======================================================================*/
@echo off
title NO DDOS - by Amir Torrez
color 1F
@echo.
echo    ===========================================================================
echo    ==                                                                       ==
echo    ==               Reinicio de apache automatico contra DDOS               ==
echo    ==                                                                       ==
echo    ===========================================================================
echo    ==                         Creado por Amir Torrez                        ==
echo    ===========================================================================
@echo.
:index
echo Introduce los minutos de repeticion del ciclo (maximo una hora (60m))
set /p min= ?: 
@echo.
if "%min%" LSS "1" (goto error1)
if "%min%" GEQ "60" (goto error2)
:ciclo
IF EXIST C:\AppServ\Apache2.2\bin\httpd.exe (
C:\AppServ\Apache2.2\bin\httpd.exe -k stop -n Apache2.2
C:\AppServ\Apache2.2\bin\httpd.exe -k start -n Apache2.2
)
IF EXIST C:\xampp\apache\bin\httpd.exe (
C:\xampp\apache\bin\httpd.exe -k stop -n Apache2.2
C:\xampp\apache\bin\httpd.exe -k start -n Apache2.2
)
@echo.
set /a tmp=min*60
timeout /t %tmp% /nobreak
@echo.
goto ciclo
:error1
echo  {{ Debes introducir los minutos }}
@echo.
goto index
:error2
echo  {{ Solo se permite maximo una hora entre cada secuencia }}
@echo.
goto index