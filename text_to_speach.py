import pyttsx3
import mysql.connector

# Initialize the pyttsx3 TTS engine
engine = pyttsx3.init()

# Connect to the MySQL database
conn = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    database='robot'
)

# Retrieve the text from the database
cursor = conn.cursor()
cursor.execute('SELECT speech FROM voicereq WHERE id=(SELECT MAX(id) FROM voicereq)')
result = cursor.fetchone()
text = result[0]

# Convert the text to voice
engine.say(text)
engine.runAndWait()

# Close the database connection
conn.close()