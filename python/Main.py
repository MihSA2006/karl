import os
from flask import Flask, request, jsonify
from google import genai

api_key = os.getenv("GEMINI_API_KEY")
client = genai.Client(api_key=api_key)

app = Flask(__name__)

@app.route('/api/prompt', methods=['POST'])
def prompt():
    data = request.get_json()
    if not data:
        return jsonify({"error": "No data provided"}), 400

    country = data.get("country")
    if not country:
        return jsonify({"error": "No country provided"}), 400

    name = country.get("countryName", "Unknown")

    response = client.models.generate_content(
        model="gemini-2.5-flash",
        contents=f"Si je dit {name}, quel domaine d'éducation les locaux devrais t-il connaitre en rapport avec cet endroit? Reponse sous forme de json avec les cles 'domaine' et 'description' uniquement."
    )

    return jsonify({
        "status": "success",
        "message": response.text
    })

if __name__ == '__main__':
    app.run(host="0.0.0.0", port=5000)
