#!/usr/bin/env python
import socket
import time
import datetime
from datetime import datetime
import mysql.connector


IP_v4 = socket.gethostbyname(socket.gethostname())
PORT = 8001

so = socket.socket(socket.AF_INET, socket.SOCK_DGRAM) 
so.bind((IP_v4, PORT))
pet = (datetime(1980,1,6) - datetime(1970,1,1)).total_seconds()   

while True:
	data = so.recv(64) 
	secs = float(data[6:10])*7*24*3600 + float(data[10:11])*24*3600 + float(data[11:16])  
	Rekt = datetime.utcfromtimestamp(secs + pet - 5*3600)
	
	if len(data) > 33:
		id = float(data[4:6])
		latitud = float(data[16:24])/100000
		longitud = float(data[24:33])/100000

		bd = mysql.connector.connect(user="root",password="0",database="historial")
		cursor=bd.cursor()
		cursor.execute("INSERT INTO gps (id,longitud,latitud,fecha) VALUES('%s','%s','%s','%s')" % (id,longitud,latitud,Rekt))
		bd.commit()
		cursor.close()
		bd.close()
		print (data)
		
