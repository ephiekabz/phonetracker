import subprocess

data = subprocess.check_output(['netsh', 'wlan', 'show'])
profiles = [b.split(":")[1][1:-1] for b in data.splitlines() if b.startswith(b'All Users')]

for i in profiles:
    try:
        results = subprocess.check_output(['netsh', 'wlan', 'show', i])
        results = [b.split(":")[1][1:-1] for b in results.splitlines()]
        try:
            print("{:<30}| {:<}".format(i.decode('utf-8'), results[0].decode('utf-8')))
        except IndexError:
            print("{:<30}| {:<}".format(i.decode('utf-8'), ""))
    except subprocess.CalledProcessError:
        print("{:<30}| {:<}".format(i.decode('utf-8'), "ENCODING ERROR"))
        input("")

