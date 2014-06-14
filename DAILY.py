import master
import datetime

Y = open("/home/ubuntu/twill-0.9/schedule.txt", "r+")
y = Y.readline()
y = y.rstrip('\n')
o = Y.readline()
o = o.rstrip('\n')
now = datetime.datetime.now()

print y
print o
print now.day
print now.hour

if int(now.day) < y:
  if int(now.hour) < o:
    master.cycleDaily()
    Y.truncate
    Y.seek(0)
    if int(now.day) >= 30:
      Y.write("1")
    else:
      Y.write(str(now.day))
    Y.write('\n')
    Y.write(str(now.hour))
  else:
    print "nope hour!"
else: 
  print "nope day!"

