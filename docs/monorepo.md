# Monorepo Guide

ReviewCore uses a Composer-based monorepo. The root project composes local
packages, and each package remains independently installable through its own
`composer.json`.

## Why A Monorepo

The monorepo keeps related platform packages in one repository while preserving
package boundaries. This supports coordinated refactoring, consistent tooling,
shared documentation, and atomic changes across package contracts.

## Root Project

The root package is `reviewcore/reviewcore`.

Root responsibilities:

- Compose local packages.
- Own deployable application entry points under `apps/`.
- Own root configuration, documentation, tools, storage, and root tests.
- Provide the development entry point for Composer commands.

The root project should not become a dumping ground for business logic.

## Packages

Local packages live under `packages/*`.

Each package must:

- Have its own `composer.json`.
- Declare its own namespace.
- Own one clear business or infrastructure capability.
- Expose only intentional public APIs.
- Avoid depending on another package's internal implementation.

The current package is:

```text
packages/core -> reviewcore/core
```

## Composer Path Repositories

The root `composer.json` registers local packages as path repositories. Composer
then links each local package into `vendor/` during installation.

This keeps package consumption explicit:

```text
root project -> Composer dependency -> local package
```

Packages should be developed as if they could be installed outside the monorepo.
That discipline keeps boundaries clear and prevents accidental coupling.

## Directory Responsibilities

```text
apps/       Deployable applications.
config/     Root configuration.
database/   Root database assets.
docs/       Project documentation.
packages/   Independent Composer packages.
src/        Root application composition code.
storage/    Runtime cache, logs, and temporary files.
tests/      Root-level tests.
tools/      Development and automation tools.
vendor/     Composer dependencies.
```

## Boundary Rules

- Root code may compose packages.
- Packages may depend on contracts and stable public APIs.
- Packages must not reach into another package's internal classes.
- Infrastructure packages must not contain business logic.
- Business packages should communicate through contracts, commands, queries,
  events, and service providers.
