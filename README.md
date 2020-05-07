# HealthBundle

Simple health check symfony bundle. For third-party uptime services and notifications. For instance https://uptimerobot.com/

```yaml
# routing config

health-check:
  resource: "@HealthBundle/Resources/config/routes.yaml"

```

## Check

Request to `site.com/health` - _json_ Response "ok" and status 200.
Incorrect server or application configuration - 500, 502, 401, 403 statuses. Or failed request.

Additional simple checks and configurations are planned.
