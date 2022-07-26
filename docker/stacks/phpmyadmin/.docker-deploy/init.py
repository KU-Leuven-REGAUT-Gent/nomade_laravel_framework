from depuydt import echo, environment, command
import os



# CREATING SYMBOLIC LINKS
env = environment.Environment("~/.env")
MYSQL_USERNAME = env.require("MYSQL_USERNAME")
MYSQL_ROOT_PASSWORD = env.require("MYSQL_ROOT_PASSWORD")
env.save()
os.environ["MYSQL_USERNAME"] = MYSQL_USERNAME;
os.environ["MYSQL_ROOT_PASSWORD"] =MYSQL_ROOT_PASSWORD;
echo.notice(os.environ["MYSQL_USERNAME"] )
echo.notice(os.environ["MYSQL_ROOT_PASSWORD"])