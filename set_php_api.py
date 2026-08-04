import subprocess, json, urllib.request

try:
    token_out = subprocess.check_output(["C:\\Program Files\\Microsoft SDKs\\Azure\\CLI2\\wbin\\az.cmd", "account", "get-access-token"], shell=True)
    token = json.loads(token_out)["accessToken"]

    url = "https://management.azure.com/subscriptions/290cf19d-afcf-4071-b981-f288c633697a/resourceGroups/QualityIQ/providers/Microsoft.Web/sites/QualityIQ/config/web?api-version=2022-09-01"
    body = json.dumps({"properties": {"appCommandLine": "/home/site/wwwroot/startup.sh", "linuxFxVersion": "PHP|8.2"}}).encode('utf-8')

    req = urllib.request.Request(url, data=body, headers={
        "Authorization": f"Bearer {token}",
        "Content-Type": "application/json"
    }, method="PUT")

    with urllib.request.urlopen(req) as resp:
        print("REST API Result:", resp.status)
        print(resp.read().decode('utf-8')[:300])
except Exception as e:
    print("Error:", e)
