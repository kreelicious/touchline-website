#!/usr/bin/env bash
set -euo pipefail
ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
THEME_DIR="$ROOT/theme/touchline"
OUT="$ROOT/touchline-theme.zip"

rm -f "$OUT"
cd "$THEME_DIR"
zip -r "$OUT" . -x "*.DS_Store" -x "node_modules/*" -x "vendor/*"
echo "Created $OUT"
