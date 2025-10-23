# Quoting Platform Requirements Specification

## 1. Business Context and Goals
- **Project Types Supported:** New installations, upgrades, and box sales.
- **Primary Users:** Internal estimators and sales representatives.
- **Strategic Objectives:**
  - Accelerate quote turnaround while improving accuracy.
  - Enable collaboration between departments with clear ownership per project.
  - Provide comprehensive financial visibility at quote, department, and company levels.
  - Support tracking of pending projects, department performance, and forecasting.

## 2. Functional Requirements
### 2.1 User Roles and Permissions
- **Estimators:** Create and edit projects, build quotes, manage attachments, and submit revisions for approval.
- **Sales Representatives:** Review and present quotes, generate client-ready PDFs, and manage client interactions.
- **Department Managers:** Approve quotes, adjust department configurations, and view departmental analytics.
- **Administrators:** Manage global settings, roles, templates, imports, and security policies.
- **Client Users (Framework):** Future capability for clients to review and approve quotes via a dedicated portal.

Role-based permissions must be editable in-app. Users access only data and metrics relevant to their assigned departments and roles.

### 2.2 Workflow Overview
1. Request received via site survey or customer submission.
2. RFIs dispatched as needed.
3. Project design completed with detailed room/system definitions.
4. Statement of Work (SOW) compiled and quote generated.
5. Quote submitted as PDF for client approval.
6. Optional managerial approval depending on departmental policy.

### 2.3 Quote Management
- Capture rooms, system types, equipment lists, labor estimates, and third-party services, segmented by department.
- Maintain version history with comparison capabilities.
- Allow uploads of PDF artifacts (surveys, RFIs, SOWs, approvals) per quote version.
- Support branded PDF output with configurable sections (cover, scope summary, BOM, terms, exclusions).
- Prepare framework for multiple quote formats and future multilingual expansion.

### 2.4 Pricing and Costing
- Input pricing from vendor catalogs, internal price sheets, and manual entries.
- Support pricing variations by region, customer tier, or contract type.
- Manage labor rates by role and contractor, with effective dating.
- Provide staging and mapping tools for Excel-based vendor price imports.

### 2.5 Dashboards, Metrics, and Reporting
- User-configurable dashboards built with reusable widgets.
- Metric builder enabling authorized users to define KPIs using selectable datasets, filters, and aggregations.
- Default reporting window of 90 days, with user-controlled overrides.
- Ensure users only view metrics applicable to their department and role.

### 2.6 Notifications and Collaboration
- In-app notifications restricted to the department linked to the project.
- Notifications for events such as RFIs resolved, quotes awaiting approval, quote status changes, and new versions.
- Framework for future integration with external notification channels (email, Teams/Slack).

### 2.7 Security and Compliance
- Enforce role-based access, audit logging, and data encryption for sensitive information.
- Capture audit events for quote edits, version changes, and status updates.
- Prepare configuration hooks for Azure Active Directory SSO/MFA without enabling it yet.
- Maintain audit log retention policies configurable by administrators.

### 2.8 Future-Ready Features
- Client portal scaffolding for eventual direct client access.
- Regional tax configuration framework without immediate tax rule implementation.
- Hooks for integration with CRM/ERP systems and vendor APIs.

## 3. Non-Functional Requirements
- **Technology Stack:** PHP backend with Bootstrap-based HTML/CSS/JS frontend. No additional server-side languages.
- **Database:** MySQL with normalized schema and support for stored procedures/views for reporting.
- **Performance:** Support concurrent usage by estimators, sales reps, and managers with responsive dashboards.
- **Scalability:** Modular architecture enabling future microservice extraction if needed.
- **Usability:** Intuitive, mobile-responsive UI leveraging Bootstrap components.
- **Maintainability:** Configuration-driven design with in-app administrative controls and comprehensive documentation.

## 4. Success Metrics
- Reduced quote turnaround time.
- Higher quote accuracy measured via variance between estimate and actual cost.
- Increased visibility into departmental forecasts and pending pipeline.
- Adoption of metric builder and dashboard customization features by user base.

## 5. Assumptions and Constraints
- All persistent data stored in a dedicated MySQL database.
- No external integrations at initial launch, but architecture must anticipate future connectors.
- Project budget and timeline remain flexible.
- Security requirements considered "basic" beyond role-based access, encryption, and audit logging.

