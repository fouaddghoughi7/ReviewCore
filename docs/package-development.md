# Package Development

ReviewCore is package based. Every feature should live in an independent package
with a clear boundary and minimal coupling.

## Package Principles

- One package owns one business or infrastructure capability.
- Packages are independently installable Composer packages.
- Public APIs must be intentional and documented.
- Dependencies should point toward contracts and stable abstractions.
- Domain and application code should use dependency injection.
- Infrastructure packages must not contain business logic.
- All PHP code must follow PSR-12 and use `strict_types`.

## Standard Package Shape

Each package should use this structure when the package needs the corresponding
responsibility:

```text
packages/example/
|-- composer.json
|-- src/
|   |-- Application/
|   |-- Contracts/
|   |-- Domain/
|   |-- Infrastructure/
|   `-- Providers/
`-- tests/
```

Directory responsibilities:

- `Application`: commands, queries, handlers, and use cases.
- `Contracts`: interfaces and public package contracts.
- `Domain`: entities, value objects, domain services, and domain events.
- `Infrastructure`: adapters for storage, external services, frameworks, and
  technical concerns.
- `Providers`: service providers that register package bindings and boot logic.
- `tests`: package-level tests.

Packages do not need every directory on day one. Add structure when the package
has a real responsibility for it.

## Service Providers

Service providers are the package integration point. A package provider should
register bindings, handlers, subscribers, policies, configuration, and other
bootstrapping needed by that package.

Application code should depend on contracts rather than constructing concrete
implementations directly.

## Contracts

Use contracts at package boundaries. Good contract candidates include:

- Repositories
- Service clients
- Buses
- Event dispatchers
- Tenant, user, and authorization context
- Storage, cache, search, and notification adapters

Do not create interfaces for every class by default. A contract should exist
because another package or application needs a stable abstraction.

## Dependency Rules

- A package may depend on the root Composer autoloader during development, but
  package code must not depend on root application internals.
- A package may depend on another package's documented public API.
- A package must not depend on another package's private implementation details.
- Cross-package workflows should use commands, queries, events, or contracts.
- Business logic belongs in business packages, not infrastructure packages.

## Documentation And Tests

Every new feature package must include useful documentation and tests. Tests are
required before business feature development begins, once the testing milestone
standardizes the project test stack.

See [Testing](testing.md) for the repository test conventions, suite
organization, and the root PHPUnit configuration.
