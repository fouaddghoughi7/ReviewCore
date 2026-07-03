# Repository Hygiene

This document defines the minimum source tree rules for ReviewCore before
enterprise development begins.

## Source Tree Policy

- Keep business logic out of the repository until the foundation milestones are
  complete.
- Keep executable experiments, manual test scripts, and local debugging files
  out of package source directories.
- Keep package source directories reserved for production PHP classes,
  interfaces, traits, enums, and package-owned configuration.
- Keep generated files, local caches, logs, coverage output, and environment
  secrets out of version control.
- Keep Composer dependencies out of version control. The `vendor` directory is
  restored with Composer.

## Placeholder Policy

- Empty placeholder files may remain only when they mark an intentional project
  boundary.
- Placeholder documentation files should be filled during the documentation
  milestones.
- Placeholder configuration files should be filled during the configuration,
  tooling, or security milestones.

## Generated And Local Files

The following files and directories must not be committed:

- Composer dependencies in `vendor/`.
- Local environment files such as `.env` and `.env.*`.
- Runtime files under `storage/cache`, `storage/logs`, and `storage/temp`.
- Test coverage, static analysis caches, and formatter caches.
- Local IDE settings unless the project explicitly promotes a shared file in a
  later milestone.
- Local AI or automation tool state such as `.ai/`.
- Operating system files such as `Thumbs.db`, `Desktop.ini`, and `.DS_Store`.

## Current Decision

The temporary manual test script in `packages/core/src` has been removed. Package
source should contain package code only.
