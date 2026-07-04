# Contributing

Thank you for contributing to ReviewCore. This project is in the `v0.1.0`
foundation stage, so contributions must protect the architecture before adding
product behavior.

## Before You Start

- Read [Project Vision](.ai/PROJECT.md).
- Read [Local Development](docs/local-development.md).
- Read [Monorepo Guide](docs/monorepo.md).
- Read [Package Development](docs/package-development.md).
- Keep work limited to the active milestone.

## Contribution Rules

- Do not add business logic during foundation milestones.
- Keep every feature in an independent package.
- Respect package boundaries.
- Follow SOLID, PSR-12, dependency injection, and clean architecture.
- Include useful documentation with behavior changes.
- Include tests once the project testing stack is established.
- Do not commit generated files, local environment files, dependency folders,
  caches, logs, or temporary output.

## Pull Request Expectations

Each pull request should explain:

- The milestone or issue it addresses.
- The files changed and why they changed.
- Any architectural impact.
- How the change was verified.
- Any follow-up work intentionally left for a later milestone.

## Review Standard

ReviewCore favors simple, readable, maintainable, extensible, and testable
changes. Convenience must not override package boundaries or long-term
architecture.
