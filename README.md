# CakeFest 2021

Presentation by Paul Hendriks, on how to implement Satis.

## Commands used:

```bash
# Initialize GIT
git init
git submodule add https://github.com/centerdata/test.git plugins/CakeFest

# Bake Plugin / Command / Model
bin/cake bake plugin CakeFest
bin/cake migrations migrate -p CakeFest
bin/cake bake model -p CakeFest CakeFest
bin/cake migrations seed -p CakeFest
bin/cake bake command -p CakeFest CakeFest

# Execute command, check output
bin/cake CakeFest

# Check plugin into git
git add -A && git commit -m "Initial commit"
git tag -a v0.0.1 -m "Initial version 0.0.1"
git push origin main && git push --tags
```
