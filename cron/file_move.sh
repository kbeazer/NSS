#!/bin/bash
for file in /Users/KBmac/Desktop/cron/*
do	
	if [ "${file}" == "/Users/KBmac/Desktop/cron/file_move.sh" ]
	then
		mv /Users/KBmac/Desktop/cron/file_move.sh /Users/KBmac/Desktop/cron/location1
		break
	else
		mv /Users/KBmac/Desktop/cron/location1/file_move.sh /Users/KBmac/Desktop/cron
	fi
done

echo "Monthly Backup Successful: $(date)" >> /tmp/mybackup.log
