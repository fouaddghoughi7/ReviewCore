# ReviewCore

ReviewCore is an enterprise-grade, AI-powered review management platform for
businesses, agencies, bloggers, affiliate marketers, and WordPress users.

The platform is built around independent Composer packages, clean architecture,
dependency injection, and low coupling. ReviewCore is not a CMS, a Laravel
replacement, a generic PHP framework, a WordPress theme, or a simple review
plugin.

## Vision

ReviewCore aims to become the most modular, extensible, and developer-friendly
review platform for AI-assisted review workflows. The product direction is:

- AI first
- WordPress first
- SEO native
- E-E-A-T native
- Package based
- API first
- Test driven
- Clean architecture

## Product Focus

ReviewCore is in foundation development. The platform is planned around:

- Review and comment workflows
- AI provider integrations
- SEO, E-E-A-T, and schema workflows
- Analytics, automation, and WordPress integration

## Requirements

- PHP `^8.3`
- Composer

## Current Status

ReviewCore is at the `v0.1.0` foundation stage. The repository currently
contains the root Composer project and the first local package,
`reviewcore/core`.

## Installation

Install dependencies from the repository root:

```bash
composer install
```

Refresh Composer autoload files when package classes or package metadata change:

```bash
composer dump-autoload
```

The root project uses Composer path repositories. Local packages are developed
under `packages/*` and installed through Composer.

## Local Development

Use the root Composer project as the development entry point. Keep changes
limited to the active milestone and avoid business feature work until the
foundation milestones are complete. See [Local Development](docs/local-development.md).

## Package Architecture Overview

ReviewCore uses a Composer monorepo with independent packages. Each package
owns one clear capability and exposes only intentional public APIs. See
[Architecture](docs/architecture.md), [Monorepo Guide](docs/monorepo.md), and
[Package Development](docs/package-development.md).

## Roadmap Summary

The project is moving from `v0.1.0` foundation work toward a stable `v1.0.0`
platform release. See [Roadmap](docs/roadmap.md).

## Documentation

- [Documentation Index](docs/README.md)
- [Architecture](docs/architecture.md)
- [Composer Metadata](docs/composer.md)
- [Local Development](docs/local-development.md)
- [Monorepo Guide](docs/monorepo.md)
- [Package Development](docs/package-development.md)
- [Roadmap](docs/roadmap.md)
- [Repository Hygiene](docs/repository-hygiene.md)

## License

ReviewCore is licensed as MIT in Composer metadata. The full license text must
be maintained in `LICENSE` before public distribution.
