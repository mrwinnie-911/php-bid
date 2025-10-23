# Implementation Roadmap

## Phase 1: Foundation
1. **Project Setup**
   - Initialize PHP project structure with Bootstrap-based frontend scaffolding.
   - Configure environment variables for MySQL connection and storage paths.
2. **Authentication & RBAC**
   - Implement native authentication, password hashing, and session management.
   - Create administrative UI for managing departments, roles, and user assignments.
3. **Audit Logging**
   - Establish centralized audit logging service capturing quote edits, version changes, and status updates.
   - Build audit log viewer with filtering and retention settings.

## Phase 2: Core Quoting Workflow
1. **Project & Room Management**
   - CRUD interfaces for projects and rooms with department ownership.
   - Link rooms to system templates and capture system-level notes.
2. **Quote Versioning Engine**
   - Implement quote creation, duplication, and version control.
   - Support line item categories: equipment, labor, third-party services.
   - Attach PDF documents per version.
3. **Approval Workflow**
   - Configure quote status transitions with optional managerial approvals.
   - Notifications for quotes awaiting approval within a department.

## Phase 3: Dashboards & Metric Builder
1. **Metric Datasets**
   - Define datasets exposed to metric builder, including default filters and aggregations.
2. **Metric Builder UI**
   - Build modal-based wizard for creating metrics and saving to personal or departmental dashboards.
3. **Dashboard Experience**
   - Implement customizable dashboard layout with drag-and-drop widgets and persistent storage.

## Phase 4: Notification Center
1. **Notification Dispatch**
   - Generate in-app notifications for key events (quote submissions, approvals, status changes).
2. **Notification Inbox**
   - Provide per-user notification center with unread indicators and filtering.
3. **Preferences Management**
   - Allow users to opt in/out of specific notification types within department scope.

## Phase 5: Vendor Price Import Pipeline
1. **Excel Upload & Parsing**
   - Integrate PhpSpreadsheet for Excel ingestion and staging table population.
2. **Field Mapping UI**
   - Build interface to map vendor columns to system fields with validation feedback.
3. **Catalog Update**
   - Commit validated data to canonical vendor product catalog, track changes in audit log.

## Phase 6: Framework Extensions
1. **Client Portal Skeleton**
   - Establish routes, controllers, and templates for client portal (feature-flagged off).
2. **Azure AD Readiness**
   - Implement configuration panel for Azure AD settings, store metadata in `app_settings`.
   - Create OAuth handlers and toggles without activating login flow.
3. **Regional Tax Placeholder**
   - Add administrative UI for managing regional tax profiles and mark them inactive until rules are defined.

## Phase 7: Quality Assurance & Deployment
1. **Testing Strategy**
   - Write PHPUnit tests for core services and repositories.
   - Develop Selenium/Panther scenarios for critical UI flows (login, quote creation, metric builder).
2. **Performance & Security Review**
   - Conduct load testing on dashboard queries and quote operations.
   - Review role-based access and audit coverage.
3. **Deployment Preparation**
   - Set up CI/CD pipeline for automated testing and deployment to hybrid environment.
   - Document operational runbooks, backup strategies, and monitoring dashboards.

