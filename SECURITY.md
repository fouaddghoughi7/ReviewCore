# Security Policy

Security reports are handled separately from normal bugs. Do not publish
vulnerability details in public issues, pull requests, or discussions.

## Supported Versions

ReviewCore is in the `v0.1.0` foundation stage. The supported development line
is the default branch until a release support policy is introduced.

## Reporting A Vulnerability

Use the repository host's private vulnerability reporting feature when
available. If private reporting is unavailable, contact a maintainer privately
before sharing technical details.

Include:

- A clear description of the issue.
- Steps to reproduce.
- Affected files, packages, or configuration.
- Potential impact.
- Any known workaround.

## Response Expectations

Maintainers should acknowledge valid reports, assess impact, coordinate a fix,
and publish disclosure details only after users have a reasonable path to
upgrade or mitigate the issue.

## Security Scope

Security-sensitive areas include authentication, authorization, tenant isolation,
AI provider credentials, WordPress integration, generated content handling,
webhooks, dependency management, and environment configuration.
