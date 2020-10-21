{{- define "ingress.template" -}}
apiVersion: traefik.containo.us/v1alpha1
kind: IngressRoute
metadata:
  name: {{ .ingress.name | quote }}
spec:
  entryPoints:
  {{- range $entryPoint := .ingress.entryPoints}}
    - {{ $entryPoint }}
  {{- end }}
  routes:
  - match: {{ .ingress.match }}
    kind: Rule
    services:
    - name: {{ .service.name | quote }}
      port: {{ .service.port }}
  {{- if (.ingress.certResolver) }}
  tls:
    certResolver: {{ .ingress.certResolver }}
  {{- end }}
{{- end -}}
