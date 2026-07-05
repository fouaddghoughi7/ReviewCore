# ReviewCore Coding Standards

This document defines repository-wide PHP coding conventions for ReviewCore.

## Objectives

- Standardize formatting before feature development.
- Keep PHP code consistent across root and packages.
- Maintain minimal, readable code in a Composer monorepo.

## Formatter

ReviewCore uses `php-cs-fixer` as the PSR-12 formatting tool.

Configuration:

- File: `.php-cs-fixer.dist.php`
- Run formatter: `composer format`
- Check formatting: `composer check:style`
- Uses the local Composer-installed executable at `vendor/bin/php-cs-fixer`
- Risky fixers are intentionally enabled to support `declare_strict_types`

## Naming Conventions

- Namespaces: `ReviewCore\...`
- Classes: `PascalCase`
- Interfaces: `PascalCase` with `Interface` suffix
- Traits: `PascalCase` with `Trait` suffix
- Enums: `PascalCase`
- Exceptions: `PascalCase` with `Exception` suffix
- Service Providers: `PascalCase` with `ServiceProvider` suffix
- Contracts: use `Interface` suffix or descriptive name for interfaces
- Tests: `PascalCase` with `Test` suffix

## strict_types Policy

- Every PHP file must include `declare(strict_types=1);` as the first statement.
- This is enforced by `php-cs-fixer` and repository conventions.

## File Header Expectations

- No custom file headers are required.
- Files should start with `<?php` followed by `declare(strict_types=1);`.

## Import Ordering

- Use `use` statements in alphabetical order.
- Use separate groups for `const`, `function`, and `class` imports.
- No unused imports.

## Formatting Expectations

- Follow PSR-12 formatting rules.
- Use short array syntax: `[]`.
- Align binary operators minimally.
- Keep a single blank line before `return` statements.
- Use one blank line between methods.
- End files with a single newline.

## Line Length Policy

- Hard limit: 120 characters.
- Prefer wrapping long expressions rather than exceeding the limit.
- This policy is editorial; PHP CS Fixer does not currently enforce line length automatically.

## Whitespace Policy

- No trailing whitespace.
- Single blank line at EOF.
- No blank lines after class opening or PHPDoc blocks.

## Final Class Policy

- Use `final` on classes by default, unless extension is intentionally allowed.

## readonly Usage Policy

- Use `readonly` for value objects and DTOs when properties do not change after construction.
- Do not use `readonly` solely for style.

## Constructor Property Promotion Policy

- Use constructor property promotion for simple immutable value objects.
- Avoid promotion for classes with complex initialization logic.

## Nullable Type Policy

- Use nullable types only when a value can legitimately be absent.
- Prefer explicit non-nullable types when possible.

## PHPDoc Policy

- Use PHPDoc for type descriptions when type declarations are insufficient.
- Document non-obvious behavior, return types for closures, and public API contracts.
- Avoid redundant PHPDoc on simple getters or self-explanatory methods.

## When PHPDoc Should NOT Be Used

- Do not add PHPDoc for trivial private methods.
- Do not add PHPDoc solely to repeat type information already present in declarations.
- Do not use PHPDoc for single-expression methods that are self-documenting.

## Repository-wide Standards

- Keep PHP files simple and consistent.
- Prefer readability over clever formatting.
- Apply formatting before committing code.
- Document any exception to standard conventions in the milestone documentation.
