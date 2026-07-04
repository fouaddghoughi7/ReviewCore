# Local Development

This guide describes the current local development workflow for ReviewCore.

## Requirements

- PHP `^8.3`
- Composer
- Git

## Install Dependencies

Run Composer from the repository root:

```bash
composer install
```

The root project installs local packages through Composer path repositories.
The current local package is `reviewcore/core`, linked from `packages/core`.

## Refresh Autoload Files

Refresh Composer autoload files after adding, moving, or renaming PHP classes:

```bash
composer dump-autoload
```

## Development Workflow

- Work from the repository root.
- Keep changes limited to the active milestone.
- Keep package code inside `packages/*`.
- Keep root `src/` reserved for root application composition code.
- Do not add business logic during foundation milestones.
- Do not commit generated files, dependency folders, caches, logs, or local
  environment files.

## Environment Files

Local environment files such as `.env` are ignored by Git. The shared example
file is `.env.example`.

No runtime environment variables are required at the current foundation stage.

## Tests And Quality Tools

Testing, formatting, static analysis, and CI commands are not standardized yet.
They will be introduced in dedicated foundation milestones before business
feature development begins.

Until those tools exist, contributors should keep changes small, review diffs
carefully, and avoid adding behavior that cannot be verified.

## Useful References

- [Monorepo Guide](monorepo.md)
- [Package Development](package-development.md)
- [Repository Hygiene](repository-hygiene.md)
