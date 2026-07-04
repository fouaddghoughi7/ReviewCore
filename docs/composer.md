# Composer Metadata

ReviewCore uses Composer as both the dependency manager and the package boundary
mechanism for the monorepo.

## Root Project

The root Composer package is `reviewcore/reviewcore`. It is a project package
that composes local ReviewCore packages through path repositories.

Root fields:

- `name`: mandatory Composer package identifier.
- `description`: short package purpose shown by Composer and package tools.
- `type`: mandatory project role; the root uses `project`.
- `keywords`: searchable terms that describe ReviewCore.
- `homepage`: canonical project URL.
- `license`: mandatory license identifier; ReviewCore uses `MIT`.
- `authors`: maintainership metadata.
- `support`: issue tracker and source repository links.
- `require`: runtime dependencies, including PHP and local packages.
- `repositories`: Composer path repositories for local packages.
- `autoload`: PSR-4 namespace mapping for root composition code.
- `minimum-stability`: default package stability policy.
- `prefer-stable`: prefer stable dependency releases when compatible.
- `config`: Composer behavior for installs, plugins, and package ordering.
- `scripts`: Composer commands maintained by the project.
- `extra`: ReviewCore-specific metadata for tooling and documentation.

## Package Projects

Each package under `packages/*` is an independent Composer package. The current
package is `reviewcore/core`.

Package fields:

- `name`: mandatory package identifier using the `reviewcore/*` vendor.
- `description`: concise package responsibility.
- `type`: package role; reusable packages use `library`.
- `keywords`: terms for the package capability.
- `homepage`: canonical project URL.
- `license`: mandatory and consistent with the root license.
- `authors`: maintainership metadata.
- `support`: issue tracker and source repository links.
- `require`: package runtime dependencies.
- `autoload`: package PSR-4 namespace mapping.
- `config`: package-level Composer preferences.
- `scripts`: package-level Composer commands.
- `extra`: package metadata, including branch aliases and ReviewCore role.

## Mandatory Fields

Every ReviewCore Composer package must define:

- `name`
- `description`
- `type`
- `license`
- `require.php`
- `autoload.psr-4`

Every package should also define:

- `keywords`
- `homepage`
- `authors`
- `support`
- `extra.reviewcore`

## Stability Policy

The root project uses `minimum-stability: stable` and `prefer-stable: true`.
Internal packages may still be required with explicit development constraints
such as `0.1.x-dev` while ReviewCore is pre-`v1.0`.

This keeps third-party dependencies stable by default while allowing local
ReviewCore packages to evolve during foundation development.

## Path Repository Convention

The root project registers local packages with:

```text
packages/*
```

Every future package must live directly under `packages/` and provide its own
`composer.json`. The root project should require packages by name instead of
including package files directly.

## Future Package Conventions

Future packages must:

- Use the `reviewcore/*` package name.
- Use a PSR-4 namespace under `ReviewCore\\`.
- Keep package code independent from root application internals.
- Declare only dependencies needed by that package.
- Use `library` as the type unless the package is intentionally not reusable.
- Keep `license`, `authors`, `homepage`, and `support` consistent with the root.
- Use script names that do not shadow built-in Composer commands.
- Define `extra.branch-alias` while the package is developed before stable tags.
- Define `extra.reviewcore.package` and `extra.reviewcore.role`.

Composer metadata is part of the public package contract. Changes to package
names, namespaces, dependency constraints, or stability policy should be treated
as architectural changes.
