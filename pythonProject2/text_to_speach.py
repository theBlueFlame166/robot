import pyttsx3
import mysql.connector
import openai

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

#####

openai.api_key = "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"

while True:
	ask =('Question: '+text)
	response = openai.Completion.create(
  		model="text-davinci-003",
  		prompt=ask,
  		temperature=0.9,
  		max_tokens=150,
  		top_p=1,
  		frequency_penalty=0,
  		presence_penalty=0.6,
  		stop=[" Human:", " AI:"]
		)

	text = response['choices'][0]['text']
	print ('Reply: '+text)
	engine.say(text)
	engine.runAndWait()

# Close the database connection
conn.close()

