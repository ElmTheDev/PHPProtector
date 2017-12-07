# PHPProtector
## PHP Protector is PHP based AntiVirus that uses signature-based detection to delete malware from your website.

# Default Database
- Default database of hashes is located at http://elmo.cf/antivirus

# How to submit file
- If you wish to submit file to default database please e-mail me on elmtheelm@gmail.com

# How does this work?
- This will grab some hashes from database provided then it will iterate through all files in folder where the PHP file is located and it's subfolders, then it will calculate MD5 hash of each file. If calculated MD5 hash exist's in database the script will delete it.

# How to use?

- Just upload antivirus.php on your website and navigate to it through browser
