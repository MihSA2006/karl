FROM python:3.11-slim

WORKDIR /app

# Copier les dépendances
COPY requirements.txt .

RUN pip install --no-cache-dir -r requirements.txt

# Copier le code Python depuis app/scripts
COPY ../app/scripts /app

EXPOSE 5000

CMD ["python", "Main.py"]
