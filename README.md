# AV/LV Quoting Platform Prototype

This repository now contains both the formal specification and a Bootstrap-powered PHP prototype for the AV/LV quoting application. The prototype focuses on visualizing the next-phase workflows described in the documentation, including dashboards, projects, quotes, notifications, imports, configuration, and audit logging views.

## Getting Started

The application is built without external dependencies beyond PHP 8.x. Use the built-in PHP web server to explore the prototype:

```bash
php -S localhost:8000 -t public
```

Then navigate to [http://localhost:8000](http://localhost:8000) to browse the UI.

## Project Structure

```
public/              Front controller, assets, and entry point
app/                 Configuration, helpers, and sample data
views/               PHP templates grouped by feature area
docs/                Formal requirements, architecture, and planning assets
```

## Documentation Index
- [`docs/requirements.md`](docs/requirements.md)
- [`docs/architecture.md`](docs/architecture.md)
- [`docs/database-schema.md`](docs/database-schema.md)
- [`docs/user-stories.md`](docs/user-stories.md)
- [`docs/wireframes.md`](docs/wireframes.md)
- [`docs/implementation-plan.md`](docs/implementation-plan.md)

## Notes
- All feature toggles (Azure AD, client portal, regional tax) are disabled by default but surfaced in the settings UI to reflect "framework ready" requirements.
- The interface uses static sample data to illustrate flows until database integration is implemented.
- Only PDF storage is modeled in the configuration panel to align with current storage constraints.
