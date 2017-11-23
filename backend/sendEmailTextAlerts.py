import urllib.request
from getSignal import getSig
import sys
import traceback

print("Getting Subscriber List...", end='')
URL = "http://alerts.when2water.org/alerts.txt"
alertsList = urllib.request.urlopen(URL).read().decode().split("\n")
print("done")

for alert in alertsList:
    try:
        if alert == "":
            continue
        print(alert, end='')
        entry = alert.split(",", 1)
        entry[-1:] = entry[-1].rsplit(",", 1)
        signal = getSig(entry[0], entry[2])
        if signal == 1:
            print(" sending...", end='')
            request = "http://alerts.when2water.org/send_alert.php?to={email}".format(email=entry[1].strip())
            print(urllib.request.urlopen(request).read().decode())
        else:
            print(" no signal")
    except:
        traceback.print_exc(file=sys.stderr)
