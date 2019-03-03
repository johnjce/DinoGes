@ECHO OFF
set ip=%1
\\172.26.24.51\cgp\servers\SCRT\SecureCRT.exe /SCRIPT \\172.26.24.51\cgp\nagstamonServer\Nasgtamon\secureCRTPing.vbs /ARG  "ping %ip%"
timeout /nobreak 0

