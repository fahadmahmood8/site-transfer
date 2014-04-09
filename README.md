site-transfer
=============

Site transfer is a short script to copy a compressed file from website A to website B and automatically uncompress it. You can uncomment the unlink() lines too but it depends that either you need that .zip file and the script file on server or not. It is really useful in those cases when you don't have filemanager and there is no choice to move a site except file by file through ftp client. FTP client can never be a good option when you have to download a number of files and then to upload everything.
