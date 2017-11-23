import urllib.request
from getSignal import getSig
import sys
import traceback

URL = "http://signal.when2water.org/zips.txt"
zipList = urllib.request.urlopen(URL).read().decode().split("\n")
#print(zipList)

for zips in zipList:
    try:
        if zips == "":
            continue
        #print(zips.strip())
        signal = getSig(zips.strip())
        print("Zip:{zipC}->{signal}".format(zipC=zips.strip(), signal=signal))
 #       0/0
    except:
        traceback.print_exc(file=sys.stderr)
