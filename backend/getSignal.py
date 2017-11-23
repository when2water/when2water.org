import json
import urllib.request

def getSig (zipCode, restriction=-1):
    URL = "http://signal.when2water.org/index.php?zip={}&restriction={}&json=1".format(zipCode, restriction)
    sig = json.loads(urllib.request.urlopen(URL).read().decode())
    #print(sig)
    return sig['signal']

if __name__ == "__main__":
    print(getSig("01886", 0))
    print(getSig("99801", 1))
    print(getSig("84101", 1))
    print(getSig("10007", 0))
