# Deploy no Render

## O que foi preparado

- `Dockerfile` para Laravel/PHP 8.2 com Apache
- `render.yaml` com Web Service Docker e disco persistente
- `docker/entrypoint.sh` para apontar `public/upload` para o disco do Render
- `docker/apache-vhost.conf` para bloquear acesso web a pastas sensiveis

## Antes de subir

1. Coloque o projeto em um repositório Git.
2. No Render, crie um banco MySQL ou use um banco externo compatível.
3. Importe o SQL base `sqlfiles/Zara Power.sql` nesse banco.

## Criando o serviço

1. No Render, clique em `New +` > `Blueprint` ou `Web Service`.
2. Conecte o repositório deste projeto.
3. Se usar `Blueprint`, o Render vai ler `render.yaml`.
4. Confirme o Web Service Docker com disco persistente.

## Variáveis de ambiente

Configure no Render:

- `APP_NAME=GreenLand Agro`
- `APP_KEY=` gerada com `php artisan key:generate --show`
- `APP_URL=https://SEU-SERVICO.onrender.com`
- `DB_CONNECTION=mysql`
- `DB_HOST=...`
- `DB_PORT=3306`
- `DB_DATABASE=...`
- `DB_USERNAME=...`
- `DB_PASSWORD=...`
- `IMAGE_VIEW_SET=https://SEU-SERVICO.onrender.com`
- `TZ=America/Sao_Paulo`
- `FORCE_HTTPS=true`

O `RENDER_DISK_PATH=/var/data` já está no `render.yaml`.

## Pós deploy

Abra o Shell do serviço e rode:

```sh
php artisan migrate
php artisan db:seed --class=GreenLandAgroSeeder
```

## Observações

- O projeto grava uploads em `public/upload`, então o disco persistente é importante.
- O banco precisa ser importado com `sqlfiles/Zara Power.sql` antes das migrations do GLA.
- Se o domínio final mudar, atualize `APP_URL` e `IMAGE_VIEW_SET`.
