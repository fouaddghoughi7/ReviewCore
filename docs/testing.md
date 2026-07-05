# Testing

ReviewCore standardizes tests at the repository root and within each package.

## Test Structure

Root tests live under `tests/`, and package tests live under `packages/<package>/tests/`.

Root test categories:

- `tests/Unit`: isolated unit tests for root composition logic and shared tooling.
- `tests/Integration`: integration tests that validate cross-package or root behavior.
- `tests/Architecture`: architecture and repository-level tests.
- `tests/Contract`: public contract tests for root and package boundaries.

Package test categories follow the same conventions under each package's
`tests/` directory, but only `Unit` and `Integration` suites are maintained at
the package level for foundation development:

- `packages/core/tests/Unit`
- `packages/core/tests/Integration`

Architecture and Contract tests remain root-level responsibilities under
`tests/Architecture` and `tests/Contract`.

## PHPUnit Configuration

The root `phpunit.xml` defines four test suites:

- `Unit`
- `Integration`
- `Architecture`
- `Contract`

Each suite includes both root-level and package-level directories for that
category.

## Running Tests

From the repository root:

- `composer test`
- `composer test:unit`
- `composer test:integration`
- `composer test:architecture`
- `composer test:contract`

## Conventions

- Use `Test` suffixes for test classes and filenames.
- Keep root tests focused on root configuration, composition, and repository
  boundaries.
- Keep package tests focused on package behavior, package APIs, and integration
  with the package's own responsibilities.
- Keep architecture coverage at the repository root.
- Keep contract coverage at the repository root.
- Do not add business logic in tests; tests should describe expected behavior
  and enforce architecture.

## Architecture vs Contract Tests

- `Architecture` tests validate repository-level structure, package boundaries,
  dependency direction, and monorepo wiring.
- `Contract` tests validate public package contracts, shared interfaces, and
  API compatibility across package boundaries.
