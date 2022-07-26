from depuydt import echo, environment, command
from depuydt.file import File
import os

env = environment.Environment("~/.env")

os.environ["DB_NOMADE_USERNAME"] = env.get("DB_NOMADE_USERNAME")
os.environ["DB_NOMADE_PASSWORD"] = env.get("DB_NOMADE_PASSWORD")