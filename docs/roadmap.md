# Roadmap

ReviewCore starts at `v0.1.0` as a foundation-stage Composer monorepo. The path
to `v1.0.0` focuses on repository maturity first, then runtime architecture,
then product capabilities.

## v0.1.x: Foundation Readiness

Goal: prepare the repository for enterprise development.

Focus:

- Repository hygiene
- Contributor documentation
- Governance documents
- Composer metadata review
- Testing strategy
- Coding standards strategy
- Static analysis strategy
- Security baseline
- CI planning

## v0.2.x: Runtime Foundation

Goal: define the runtime model without business logic.

Focus:

- Application kernel
- Dependency injection
- Service provider lifecycle
- Package bootstrapping conventions
- Runtime support utilities

## v0.3.x: Contracts And Configuration

Goal: establish shared abstractions before product packages grow.

Focus:

- Public contracts
- Configuration model
- Shared support package boundaries
- Package-level extension points

## v0.4.x: Platform Infrastructure

Goal: add reusable infrastructure abstractions.

Focus:

- Events
- Command and query bus
- Database abstraction
- Logging
- Cache and storage abstractions

## v0.5.x: Access And Organization Model

Goal: introduce enterprise account structure.

Focus:

- Identity
- Authentication
- Authorization
- Tenancy
- Organizations

## v0.6.x: Review Domain MVP

Goal: introduce the core review capability.

Focus:

- Review model
- Rating model
- Review lifecycle
- Review commands and queries
- Review events

## v0.7.x: Review Operations

Goal: add workflows around review management.

Focus:

- Moderation
- Responses
- Notifications
- Media

## v0.8.x: Intelligence And Integrations

Goal: expand platform value through search, analytics, automation, and external
systems.

Focus:

- Search
- Analytics
- Audit trail
- AI provider integrations
- WordPress integration
- Webhooks

## v0.9.x: Hardening

Goal: prepare for stable release.

Focus:

- Security review
- Compatibility review
- Documentation review
- Upgrade path
- Release candidate validation

## v1.0.0: Stable Release

Goal: ship stable public contracts and production-ready core workflows.

Focus:

- Stable package boundaries
- Stable public contracts
- Documented extension points
- Supported release process
