import master
import datetime

Y = open("/home/ubuntu/twill-0.9/schedule.txt", "r")
y = Y.readline()
y = y.rstrip('\n')
o = Y.readline()
o = o.rstrip('\n')
now = datetime.datetime.now()

print "old day data: ", y
print "old hour data: ", o
print "day now:", now.day
print "hour now: ", now.hour

Y.close

if int(now.day) > int(y):
  if int(now.hour) > int(o) or int(now.day) - int(y) == 2:
    master.cycleDaily()
    Y = open("/home/ubuntu/twill-0.9/schedule.txt", "w")
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

