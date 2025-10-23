# Solution Architecture Overview

## 1. Architectural Principles
- **Single Stack Requirement:** Entire application implemented with PHP for server-side logic and HTML/CSS/JavaScript (with Bootstrap) for the user interface.
- **Modularity:** Separate concerns into presentation, application, domain, and infrastructure layers to support maintainability and future extensibility.
- **Configurability:** All business rules and role permissions are administered through in-app configuration interfaces.
- **Security First:** Apply role-based access checks at controller and service layers, encrypt sensitive data, and capture comprehensive audit logs.
- **Extensibility:** Design components with interfaces and feature flags so Azure AD, client portal, regional taxes, and integrations can be activated without major refactoring.

## 2. Layered Component Model
```
+--------------------------------------------------------------+
|                        Presentation Layer                    |
|  Bootstrap UI, JS widgets, dashboards, metric builder, forms |
+------------------------------^-------------------------------+
                               |
+------------------------------|-------------------------------+
|                        Application Layer                     |
|  Controllers, notification manager, import workflow,        |
|  dashboard service, PDF generator, security middleware       |
+------------------------------^-------------------------------+
                               |
+------------------------------|-------------------------------+
|                         Domain Layer                         |
|  Quote engine, pricing service, labor calculator, metric     |
|  definitions, audit logging policies                         |
+------------------------------^-------------------------------+
                               |
+------------------------------|-------------------------------+
|                       Infrastructure Layer                   |
|  MySQL repositories (DAO/ORM), file storage, queue manager,  |
|  Excel parser, PDF renderer, configuration registry          |
+--------------------------------------------------------------+
```

## 3. Core Modules
### 3.1 Authentication & Authorization
- Native PHP authentication with hashed credentials.
- Role and department context loaded per request.
- Middleware guards enforce RBAC on controllers and dataset filters.
- Feature flags and configuration stubs prepared for Azure AD (OAuth endpoints, claim mapping) and MFA toggles.

### 3.2 Project & Quote Management
- Project controller orchestrates creation, updates, and assignment to departments.
- Quote service handles versioning, room/system composition, and attachment management.
- PDF generator integrates Dompdf/TCPDF templates with stored quote data.
- Audit service records quote edits, version changes, and status transitions.

### 3.3 Dashboard & Metric Builder
- Dashboard controller retrieves user-specific layouts from `dashboard_layouts`.
- Metric builder service interprets metric definitions (dataset, filters, aggregation) and executes parameterized queries via repository layer.
- Visualization layer renders results using Chart.js/ApexCharts components.

### 3.4 Notifications
- Notification dispatcher emits in-app alerts stored in `notifications` table.
- Subscription logic binds notifications to departments and, optionally, roles within those departments.
- Extensible notification adapters reserved for future email or collaboration tool integrations.

### 3.5 Vendor Price Import Pipeline
- Upload controller stores raw Excel file to temporary storage.
- Import service uses PhpSpreadsheet to parse data into staging tables (`vendor_imports`).
- Mapping UI aligns vendor columns with canonical fields.
- Validation engine checks duplicates, missing data, and formatting before committing to `vendor_products`.

### 3.6 Client Portal Framework
- Dedicated route group and controllers under `/client` namespace.
- View templates provide read-only access to quote versions, audit summary, and approval actions (disabled until activation).
- Access tokens or client user accounts stored in `client_access_tokens` for future authentication.

## 4. Data Storage & File Management
- **MySQL:** Primary data store for all entities. ORM or repository layer ensures SQL queries are centralized and secure.
- **File Storage:** PDF attachments stored in organized directory structure (e.g., `/storage/quotes/{project_id}/{version}/`). Paths indexed in database.
- **Configuration Registry:** Key-value storage (table `app_settings`) for feature flags, Azure AD endpoints, and regional tax placeholders.

## 5. Integration Points
- **Azure AD SSO:** OAuth2 endpoints and token processing pipelines stubbed but behind feature flag.
- **CRM/ERP Connectors:** RESTful service interfaces defined; actual connectors implemented in later phases.
- **Vendor APIs:** Import pipeline designed to accept both manual Excel uploads and future API ingestion.

## 6. Deployment Topology
- **Application Server:** PHP-FPM or Apache with PHP 8.x hosting the application.
- **Database Server:** Managed MySQL instance (cloud or on-premises) with regular backups.
- **Storage:** Shared filesystem or object storage for PDFs with secure access controls.
- **Hybrid Deployment:** Architecture supports hosting frontend/backend in cloud while allowing on-premises database if required.

## 7. Cross-Cutting Concerns
- **Logging & Monitoring:** Monolog integration for structured logs; dashboards for error tracking and performance metrics.
- **Validation:** Centralized validation library ensures consistent input handling and prevents injection attacks.
- **Testing:** PHPUnit for backend logic, Selenium/Panther for end-to-end UI tests.
- **Internationalization:** Locale-aware formatting and placeholders for future language packs and tax calculations.

## 8. Data Flow Summary
1. User authenticates, context loaded (role, department, permissions).
2. User performs action (e.g., edit quote); controller validates request and delegates to services.
3. Services interact with repositories, enforce business rules, and update MySQL.
4. Events trigger notifications and audit log entries.
5. Dashboards query metrics via metric builder definitions and render personalized widgets.

## 9. Future Enhancements
- Activate Azure AD authentication once configuration finalized.
- Implement client portal UI/UX and approval workflows.
- Add regional tax engines and automated currency conversions.
- Introduce external integrations for CRM/ERP synchronization and vendor catalog APIs.
- Enable advanced analytics pipelines (e.g., data warehouse exports, BI tool connectors).

