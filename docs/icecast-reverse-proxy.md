# Local Icecast behind the site domain

The site expects the live audio at the same origin, `/stream`, and reads
Icecast statistics server-to-server from `ICECAST_URL` (default
`http://127.0.0.1:8010`).

- `general.stream_url` → `/stream`
- `ICECAST_URL` → `http://127.0.0.1:8010`
- Encoder mount → `/stream`

`install-icecast.sh` listens on port **8010**. Keep that port private and let
the web server proxy `/stream` so the player works on HTTPS without mixed
content.

## nginx

```nginx
location = /stream {
    proxy_pass http://127.0.0.1:8010/stream;
    proxy_http_version 1.1;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header Connection "";
    proxy_buffering off;
    proxy_request_buffering off;
    proxy_read_timeout 1h;
    chunked_transfer_encoding off;
    add_header Cache-Control "no-cache, no-store";
    add_header Access-Control-Allow-Origin "*";
}
```

## Apache

```apache
ProxyPreserveHost On
ProxyPass        /stream http://127.0.0.1:8010/stream flushpackets=on
ProxyPassReverse /stream http://127.0.0.1:8010/stream
```

Enable `mod_proxy` and `mod_proxy_http`. Do not enable `mod_proxy_ajp`.

## If the encoder uses another mount

The mount name is chosen by the source client, not by Icecast. If the encoder
publishes to `/live` instead of `/stream`:

1. Change the web-server rule to `/live`.
2. Set **Admin → General settings → Stream URL** (or `general.stream_url`) to
   `/live`.

## Verify

```bash
# Icecast is alive on the server
curl -I http://127.0.0.1:8010/status-json.xsl

# The public path is proxied
curl -I https://<site-domain>/stream
```

The second request should return `200` and an audio `Content-Type` while the
encoder is connected. If it returns `404`, the mount name does not match.
