# This Python script dumps the data from csv file into SQLite3 database

import csv, sqlite3

#con = sqlite3.connect(":memory:")
con = sqlite3.connect("ec.db")
cur = con.cursor()

with open('output.csv', 'rb') as fin:
	dr = csv.DictReader(fin)
	to_db = [(i['cl'], i['username'], i['jobname'], i['jobid'], i['started_date_time'], i['completed_date_time'], i['outcome'], i['serial_star'], i['serial_outcome'], i['submit_time'], i['submit_outcome']) for i in dr]

cur.executemany("INSERT INTO ecstat (cl, username, jobname, jobid, started_date_time, completed_date_time, outcome, serial_star, serial_outcome, submit_time, submit_outcome) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);", to_db)

con.commit()
con.close()
