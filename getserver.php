Get server

det only one server on the account

REQUEST

GET https://panel.cloudatcost.com/api/v1/getserver.php

PARAMS

key = KEY

login = example@example.com

sid = SERVERID

EXAMPLE

curl https://panel.cloudatcost.com/api/v1/getserver.php?key=KEY&login=example@example.com&sid=12345
Output:

{
  "status": "ok",
    "time": 1425064819,
    "id": "90000",
    "data": [
    {
      "id": "12345",
      "CustID": "90001",
      "packageid": "21579",
      "servername": "localhost",
      "lable": "api-test",
      "label": "api-test",
      "vmname": "c90001-iOD-848113",
      "ip": "1.2.3.4",
      "netmask": "255.255.255.0",
      "gateway": "1.2.3.1",
      "hostname": "c9000-iOD-123.cloudatcost.com",
      "rootpass": "password",
      "vncport": "45148",
      "vncpass": "vnc_pass",
      "servertype": "Custom",
      "template": "Microsoft Windows 7 (64-bit)",
      "cpu": "4",
      "cpuusage": "261",
      "ram": "4096",
      "ramusage": "3556.202",
      "storage": "69",
      "hdusage": "0.000434688",
      "sdate": "01\/26\/2014",
      "status": "Powered On",
      "panel_note": "",
      "mode": "Normal",
      "uid": "619712052",
      "sid": "240294",
      "rdns":"c90001-iOD-848113.cloudatcost.com",
      "rdnsdefault":"ptr-not-configured.cloudatcost"
    }
  ]
}
