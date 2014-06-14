from twill.commands import *
import datetime
import random

#def cycle():

grandList = ['matthewgcasey@gmail.com', 'Aphillistienio@gmail.com', 'Bphillistienio@gmail.com', 'phillistienio3@gmail.com', 'phillistienio4@gmail.com', '5phillistienio@gmail.com', '6phillistienio@gmail.com', '7phillistienio@gmail.com', 'guruphillistienio@gmail.com', 'mattsliferocks@gmail.com', 'phillistienioa@gmail.com', 'phillistienio2@gmail.com', 'wandphillistienio@gmail.com', 'exphillistienio@gmail.com', 'vizphillistienio@gmail.com', 'bombphillistienio@gmail.com', '0phillistienio@gmail.com', '1jew@grr.la']

monsterList = ['Aphillistienio@gmail.com', 'Bphillistienio@gmail.com', 'phillistienio3@gmail.com', 'phillistienio4@gmail.com', '5phillistienio@gmail.com', '6phillistienio@gmail.com', '7phillistienio@gmail.com', 'guruphillistienio@gmail.com', 'mattsliferocks@gmail.com', 'phillistienioa@gmail.com', 'phillistienio2@gmail.com', 'wandphillistienio@gmail.com', 'exphillistienio@gmail.com', '1jew@grr.la']

conqDuelList = ['matthewgcasey@gmail.com', 'Aphillistienio@gmail.com', 'Bphillistienio@gmail.com', 'phillistienio3@gmail.com', 'phillistienio4@gmail.com', '5phillistienio@gmail.com', '6phillistienio@gmail.com', '7phillistienio@gmail.com', 'guruphillistienio@gmail.com', 'mattsliferocks@gmail.com', 'phillistienioa@gmail.com', 'phillistienio2@gmail.com', 'wandphillistienio@gmail.com', 'exphillistienio@gmail.com', 'vizphillistienio@gmail.com', 'bombphillistienio@gmail.com', '1jew@grr.la']

pw = "WITHHELD FROM BEGIN!!"
cA = 'http://web3.castleagegame.com/castle_ws/'
guildId = '&guild_id=100003851490194_1340565613'

def login(name):
  go(cA + "connect_login.php?platform_action=CA_web3_logout")
  go(cA + 'connect_login.php')
  fv(1, "player_email", str(name))
  fv(1, "player_password", pw)
  print name
  submit()

def armyAdd():
  go(cA + 'army.php?action=invite_army_code&army_code=' + x)

def prayer():
  go(cA + 'symbols.php?action=tribute&symbol=1&ajax=1')
 
def archive():
  go(cA + 'item_archive_bonus.php?action=enable')

def resource():
  go (cA + "guildv2_conquest_command.php?" + guildId + "&collect=true")

def crystal():
  go (cA + 'guildv2_conquest_command.php?' + guildId + "&demi_collect=true")

def top4():
  archive()
  prayer()
  resource()
  crystal()

def stamina():
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  z = file.readline()
  z = z.rstrip('\n')
  if z == "cron":
    m = 5
  else:
    m = 9
  go (cA + 'battle_expansion_monster.php?action=attackDragonSpecific&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y) + '&attack_key=' + str(m))

def energy():
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  z = file.readline()
  z = z.rstrip('\n')
  e = file.readline()
  e = e.rstrip('\n')
  if z == "cron":
    go(cA + 'quests.php?do_quest=10008&excavation=1000' + str(e))
  else:
    m = "8"
    go(cA + 'battle_monster_expansion.php?action=attackDragonSpecific&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y) + '&attack_key=' + str(m))

def seige():
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  z = file.readline()
  z = z.rstrip('\n')
  if z == "cron":
    m = 4
  else:
    m = 9
  go (cA + 'guildv2_battle_monster.php?action=manualAssist&type=expansion_monster&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y))

def cycleMonsterTest():
  login('Aphillistienio@gmail.com')
  energy()
  stamina()

def cycleMonster():
  file = open("/home/ubuntu/twill-0.9/timemonster.txt", "w")
  then = datetime.datetime.now()
  for x in range(1, (len(monsterList) + 1)):
    login(monsterList[int(x - 1)])
    for x in range(1,6): 
      energy()
    for x in range(1,6): 
      stamina()
    for x in range(1,6): 
      energy()
    for x in range(1,6): 
      stamina()
    seige()
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')

def cycleTop4():
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    top4()

def top2():
  crystal()
  resource()

def cycleTop2():
  file = open("/home/ubuntu/twill-0.9/timeresource.txt", "w")
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    top2()
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')

def collect():
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  go (cA + 'battle_expansion_monster.php?action=attackDragonSpecific&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y) + '&action=collectReward')
  
def cycleCollect():
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    collect()

def collectAll():
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  for y in range (1, 3):
    for x in range(1, 6):
      go (cA + 'battle_expansion_monster.php?action=attackDragonSpecific&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y) + '&action=collectReward')

def cycleCollectAll():
  file = open("/home/ubuntu/twill-0.9/timecollectall.txt", "w")
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    collectAll()
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')

def daily():
  archive()
  prayer()


def cycleDaily():
  file = open("/home/ubuntu/twill-0.9/timecollectall.txt", "w") 
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    daily()
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')

#login()
#archive()
#prayer()
#resource()
#crystal()


def cycleSeige():
  for x in range(1, (len(monsterList) + 1)):
    login(monsterList[int(x - 1)])
    seige()

def exca3():
    go(cA + 'quests.php?do_collect=10008&excavation=10008')

def exca4():
    go(cA + 'quests.php?do_collect=10008&excavation=10004')

def test():
  login(grandList[4])
  go (cA + 'battle_expansion_monster.php?action=attackDragonSpecific&attack_key=1&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=2&monster_slot=1')
  
def startRecord(filename):
  start = datetime.datetime.now()
  
def bqh():
  save_html('/home/ubuntu/twill-0.9/logintime.txt')
  file = open("/home/ubuntu/twill-0.9/logintime.txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/index.php'))
  for line in range(1, (num_lines + 1)):
    line = file.readline()
    for x in range(1, len(line)):
      if line[x] == 'b' and line[(x + 1)] == 'q':
        bqhLine = open("/home/ubuntu/twill-0.9/bqhLine.txt", "w")
        bqhLine.write(line)
        for x in range(1, len(line)):
          if line[x] == 'v' and line[(x + 1)] == 'a':
            bqh = open("/home/ubuntu/twill-0.9/bqh.txt", "w")
            for y in range(1,33):
              bqh.write(line[6 + x + y])

def guildID():
  go(cA + 'festival_battle_home.php')
  save_html('/home/ubuntu/twill-0.9/guildID.txt')
  file = open("/home/ubuntu/twill-0.9/guildID.txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/guildID.txt'))
  for line in range(1, (num_lines + 1)):
    line = file.readline()
    for x in range(1, len(line)):
      if len(line) > 26:
        if line[x] == '?' and line[(x - 5)] == 'e' and line[(x - 12)] == "d":
          Line = open("/home/ubuntu/twill-0.9/guildLine.txt", "w")
          Line.write(line)
          LINE = open("/home/ubuntu/twill-0.9/enemyGID.txt", "w")
          for y in range(1,17):
            LINE.write(line[54 + y])

def conqDuel():
  array = []
  X = open("/home/ubuntu/twill-0.9/victims.txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/victims.txt'))
  for x in range(1, (num_lines + 1)):
    line = X.readline()
    array.append(str(line))
  random.shuffle(array)
  x = str(array[1])
  x = x.rstrip('\n')
  Y = open("/home/ubuntu/twill-0.9/bqh.txt", "r") 
  y = Y.readline()
  y = y.rstrip('\n')
  go(cA + 'conquest_duel.php?action=battle&duel=false&target_id=' + x + '&bqh=' + y)

def cycleConqDuel():
  file = open("/home/ubuntu/twill-0.9/timeconqduel.txt", "w")
  then = datetime.datetime.now()
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    bqh()
    for x in range(0,5):
      conqDuel() 
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')

def cycleArmyAdd():
  login('1jew@grr.la')
  armyAdd()

def cycleExca3():
  file = open("/home/ubuntu/twill-0.9/timeexca3.txt", "w")
  then = datetime.datetime.now()
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    exca3()
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')

def cycleExca4():
  file = open("/home/ubuntu/twill-0.9/timeexca4.txt", "w")
  then = datetime.datetime.now()
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    exca4()
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')

def festJoin():
  guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
  guildID = guild.readline()
  go(cA + 'festival_guild_battle.php?action=enter_battle&id=' + guildID)

def cycleFestJoin():
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    guildID() 
    festJoin()

def fest():
  guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
  guildID = guild.readline()
  bqh = open("/home/ubuntu/twill-0.9/bqh.txt", "r")
  BQH = bqh.readline()
  go(cA + "festival_guild_battle.php?action=guild_attack&attacking_position=2&target_id=100003851490194&bqh=" + BQH + "&id=" + guildID + "&view_allies=true&attack_type=special&attack_key=1")

def cycleFest():
  file = open("/home/ubuntu/twill-0.9/timefest.txt", "w")
  then = datetime.datetime.now()
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    guildID()
    bqh()
    for x in range(0,10):
      fest()
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')

def festCollect():
  guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
  guildID = guild.readline()
  go(cA + "festival_guild_battle.php?action=collect_battle&id=" + guildID)

def cycleFestCollect():
  file = open("/home/ubuntu/twill-0.9/timefestcollect.txt", "w")
  then = datetime.datetime.now()
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    guildID()
    festCollect()
  now = datetime.datetime.now()
  file.write(str(now))
  file.write('\n')
  file.write(str(then))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')
