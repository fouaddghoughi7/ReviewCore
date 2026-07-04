# Architecture

ReviewCore is a modular review platform built as a Composer monorepo. The root
project composes independent packages, and each package owns one business or
infrastructure capability.

## Architectural Goals

- Keep packages independent.
- Prefer contracts over concrete dependencies at package boundaries.
- Use dependency injection for application and domain collaboration.
- Use service providers as package integration points.
- Keep business logic out of infrastructure packages.
- Keep the root project focused on composition.

## High-Level Model

```text
applications
    |
root project
    |
local Composer packages
    |
contracts and stable public APIs
```

Applications should depend on package APIs, not package internals. Packages
should communicate through contracts, commands, queries, events, and service
providers.

## Package Layers

Packages may use these layers when the responsibility exists:

- Domain: business concepts, rules, and domain events.
- Application: use cases, commands, queries, and handlers.
- Contracts: public interfaces used across package boundaries.
- Infrastructure: adapters for technical systems.
- Providers: package registration and bootstrapping.

Not every package needs every layer. Structure should follow actual
responsibility, not ceremony.

## Dependency Direction

Dependencies should point toward stable abstractions:

```text
application code -> contracts -> implementations
```

Cross-package workflows should avoid direct access to another package's private
classes. When a package needs collaboration, it should rely on a documented
public API, a contract, or an event.

## Current Foundation

The current foundation includes the root Composer project and `reviewcore/core`.
The core package is reserved for runtime foundation concerns. Product
capabilities such as reviews, comments, AI providers, SEO, analytics, automation,
and WordPress integration should live in dedicated packages.
