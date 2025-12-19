FROM python:3.11-slim

WORKDIR /app

# Copier les dépendances
COPY requirements.txt .

RUN pip install --no-cache-dir -r requirements.txt

# Copier tout le code Python
COPY . /app

EXPOSE 5000

CMD ["python", "Main.py"]
