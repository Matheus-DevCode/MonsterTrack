#!/bin/bash

# ⚙️ Token do bot do Telegram
TOKEN_TELEGRAM="7151465886:AAGyvlnCshHtss59s-_GbTE8N_8XQFmDCsk"

# 🔌 Porta onde o Laravel está rodando
LARAVEL_PORT=8000

# 🚀 Inicia o ngrok em segundo plano
echo "🔄 Iniciando ngrok..."
nohup ngrok http http://localhost:$LARAVEL_PORT > /dev/null 2>&1 &

# ⏳ Aguarda o ngrok subir (ajuste se necessário)
sleep 3

# 🌐 Captura a URL pública gerada pelo ngrok
NGROK_URL=$(curl -s http://127.0.0.1:4040/api/tunnels | grep -o 'https://[^"]*' | head -n 1)

# 📡 Define a rota do Laravel para o webhook
WEBHOOK_URL="$NGROK_URL/api/start-mensagem"

# 📬 Envia o webhook pro Telegram
curl -s -X POST "https://api.telegram.org/bot$TOKEN_TELEGRAM/setWebhook?url=$WEBHOOK_URL"

echo "✅ Webhook atualizado para: $WEBHOOK_URL"
