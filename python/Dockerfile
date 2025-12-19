FROM python:3.11-slim

WORKDIR /app

# Installer dépendances
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

# Copier le code Python
COPY ../app/scripts/Main.py /app/Main.py

EXPOSE 5000

CMD ["python", "Main.py"]
