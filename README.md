# ReviewCore

ReviewCore is an enterprise-grade, AI-powered review management platform.

The project is designed for modular review generation, review management,
comments, SEO, E-E-A-T workflows, schema generation, analytics, automation, and
WordPress integration. ReviewCore is not a CMS, a Laravel replacement, a generic
PHP framework, a WordPress theme, or a simple review plugin.

## Current Status

ReviewCore is at the `v0.1.0` foundation stage.

The repository currently contains the root Composer project and the first local
package, `reviewcore/core`. Business features should not be implemented until the
foundation milestones for documentation, Composer metadata, testing, coding
standards, static analysis, security, and CI are complete.

## Requirements

- PHP `^8.3`
- Composer

## Local Setup

Install dependencies from the repository root:

```bash
composer install
```

Refresh Composer autoload files when package classes or package metadata change:

```bash
composer dump-autoload
```

The root project uses Composer path repositories. During installation,
`reviewcore/core` is linked from `packages/core` into `vendor/reviewcore/core`.

## Repository Structure

```text
ReviewCore/
|-- apps/          Deployable applications such as API, admin, workers, and CLI.
|-- config/        Root configuration for composed applications.
|-- database/      Database assets owned by the root project.
|-- docs/          Project documentation and architecture notes.
|-- packages/      Independent Composer packages.
|-- src/           Root application composition code.
|-- storage/       Runtime cache, logs, and temporary files.
|-- tests/         Root-level tests.
|-- tools/         Development and automation tools.
`-- vendor/        Composer dependencies.
```

## Composer Path Repositories

ReviewCore keeps packages inside the monorepo and installs them with Composer
path repositories. Each package must remain installable as an independent
Composer package with its own `composer.json`.

The root project currently registers:

```text
packages/core -> reviewcore/core
```

Path repositories allow the root project to consume local packages through the
same dependency mechanism used for external packages, while still keeping
development inside one repository.

## Current Packages

### `reviewcore/core`

The core package contains the early runtime foundation for ReviewCore. It owns
platform-level primitives such as the application object and future bootstrapping
contracts.

The core package must stay focused on runtime concerns. It must not contain
review generation, SEO, AI provider, WordPress, analytics, or other business
capability logic.

## Package Development Rules

- Keep every feature in an independent package.
- Keep each package focused on one business or infrastructure capability.
- Give every package its own `composer.json`.
- Expose package behavior through contracts, service providers, commands,
  queries, events, or documented public APIs.
- Do not depend on another package's internal implementation details.
- Use dependency injection instead of service location in application and domain
  code.
- Follow SOLID, PSR-12, and `strict_types`.
- Include tests and documentation with every new feature.
- Keep business logic out of infrastructure packages.
- Keep package `src` directories reserved for production PHP source files.

## Documentation

- [Repository Hygiene](docs/repository-hygiene.md)
