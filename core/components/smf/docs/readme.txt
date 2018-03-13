--------------------
MODX-Blesta Adapted from Modx-SMF
--------------------
Modx Blesta Author: CubeData <admin@cubedata.net>
Modx SMF Author: Vasiliy Naumkin <bezumkin@yandex.ru>
--------------------

### MODX + Blesta two-way synchronization:

- Login and logout.
- Create users.
- Reset passwords.
- Update common profile fields (username, fullname, email, date of birth, gender, etc.)
- Delete users.
- Activate and deactivate users.

### Quick start

1. Install MODX 2.3+
2. Install Blesta 4.2+
3. Install this package to MODX, you will be prompted to specify path to Blesta - "portal.{base_path}/cms" by default. (Uses CubeData's CMS Plugin to make the integration "bridge" on blesta for modx.
4. That`s all, now you systems must be synchronized.

If you will move Blesta to another directory, you will need to reinstall this package.

### Know issues

- If you will change username in MODX, his password will no longer work in Blesta because of its hashing algorithm.
But you can reset user password in MODX manager right after changing username.
- You must specify password when create a new user in MODX, otherwise he will not be able to login in Blesta without password reset.
- All was tested only with the Blesta installed in a subdomain.
When working with subdomains most likely will be a troubles with the session.
- All troubles of login\logout is associated with the user session. The first thing that you need to do is logout from MODX manager and clear a cookies.
The best way to test everything in anonymous(incognito mode for chrome) mode of your browser.

### System settings

See description of Blesta system settings in MODX manager.

---

Feel free to suggest ideas/improvements/bugs on GitHub:
https://github.com/cubedata/modx-blesta/

---
