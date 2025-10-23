# Preliminary Database Schema

## 1. Entity Relationship Summary
The schema centers around projects and quotes, with supporting tables for departments, roles, metrics, notifications, and imports. Key relationships include:
- Each **project** belongs to a department and may have multiple rooms and quote versions.
- **Quote versions** contain multiple line items and reference uploaded PDF attachments.
- **Users** belong to a department and role, which controls access to metrics, notifications, and administrative features.
- **Vendor imports** feed into the canonical catalog of vendor products.
- **Audit logs** capture user actions against quotes and quote versions.

## 2. Table Definitions
### 2.1 Core Tables
| Table | Purpose | Key Fields |
|-------|---------|------------|
| `users` | Stores authentication and profile information. | `id`, `department_id`, `role_id`, `name`, `email`, `password_hash`, `azure_ad_object_id`, `mfa_enabled`, timestamps |
| `departments` | Defines organizational departments. | `id`, `name`, `description`, `notification_rules`, timestamps |
| `roles` | Defines role-based permissions. | `id`, `name`, `permissions_json`, `dashboard_defaults`, timestamps |
| `projects` | Represents customer projects. | `id`, `department_id`, `client_name`, `status`, `requested_date`, `due_date`, `created_by`, `assigned_to`, `survey_summary`, timestamps |
| `rooms` | Stores room-level details for projects. | `id`, `project_id`, `name`, `system_type`, `notes`, timestamps |
| `systems` | Library of reusable system templates. | `id`, `name`, `description`, `department_id`, `default_configuration`, timestamps |
| `quote_versions` | Tracks individual quote iterations. | `id`, `project_id`, `version_number`, `status`, `total_cost`, `total_price`, `currency`, `pdf_path`, `created_by`, `submitted_at`, timestamps |
| `quote_line_items` | Stores equipment, labor, and third-party service entries per version. | `id`, `quote_version_id`, `item_type`, `description`, `quantity`, `unit_cost`, `unit_price`, `department_id`, `vendor_product_id`, `labor_role_id`, `notes` |
| `labor_rates` | Maintains labor cost tables. | `id`, `department_id`, `role_name`, `base_rate`, `overtime_rate`, `contractor`, `effective_start`, `effective_end` |

### 2.2 Supporting Tables
| Table | Purpose | Key Fields |
|-------|---------|------------|
| `attachments` | Metadata for stored PDFs. | `id`, `project_id`, `quote_version_id`, `file_name`, `file_path`, `description`, `uploaded_by`, `uploaded_at` |
| `notifications` | In-app alerts per user/department. | `id`, `user_id`, `department_id`, `event_type`, `message`, `link`, `read_at`, timestamps |
| `metrics` | Metric builder definitions. | `id`, `name`, `description`, `dataset`, `filters_json`, `aggregation`, `visualization`, `owner_type`, `owner_id`, `visibility_scope`, timestamps |
| `dashboard_layouts` | Saved dashboard configurations. | `id`, `user_id`, `layout_json`, `default_date_range`, timestamps |
| `vendor_imports` | Staging data for uploaded vendor sheets. | `id`, `vendor_name`, `uploaded_by`, `status`, `mapping_json`, `error_report_path`, `processed_at`, timestamps |
| `vendor_import_rows` | Row-level staging data for validation. | `id`, `vendor_import_id`, `raw_data_json`, `normalized_data_json`, `validation_status`, `validation_errors` |
| `vendor_products` | Canonical catalog post-import. | `id`, `sku`, `vendor_name`, `description`, `category`, `cost`, `price`, `currency`, `effective_start`, `effective_end`, timestamps |
| `app_settings` | Application-level configuration and feature flags. | `key`, `value`, `updated_at` |
| `audit_log` | Tracks critical events. | `id`, `event_type`, `entity_type`, `entity_id`, `user_id`, `department_id`, `payload_json`, `created_at` |
| `regional_settings` | Placeholder for future tax/region rules. | `id`, `region_code`, `tax_profile_json`, `currency`, `status`, timestamps |
| `client_access_tokens` | Framework for client portal authentication. | `id`, `quote_version_id`, `client_email`, `token_hash`, `expires_at`, `status`, `created_at` |

### 2.3 Reference & Lookup Tables
| Table | Purpose | Key Fields |
|-------|---------|------------|
| `quote_statuses` | Standardizes quote workflow states. | `code`, `name`, `description`, `requires_approval`, `display_order` |
| `notification_templates` | Stores localized notification text with merge tags. | `id`, `event_type`, `department_id`, `template_body`, `is_active`, timestamps |
| `metric_datasets` | Metadata describing datasets exposed to metric builder. | `id`, `name`, `source_table`, `default_filters`, `allowed_aggregations` |
| `labor_roles` | Reference for labor categories. | `id`, `department_id`, `name`, `description`, timestamps |

## 3. Constraints & Indexing Strategy
- Apply composite indexes on frequently filtered columns such as (`department_id`, `status`) for `projects`, (`project_id`, `version_number`) for `quote_versions`, and (`user_id`, `read_at`) for `notifications`.
- Full-text indexes on `quote_line_items.description` and `vendor_products.description` for quick search.
- Enforce foreign keys with cascading deletes where appropriate (e.g., deleting a project cascades to rooms, quotes, attachments) while maintaining audit log records.
- Partition `audit_log` by date if volume dictates.

## 4. Data Retention & Archiving
- Configure retention period for audit logs via `app_settings` (default 24 months).
- Archive historical quote versions beyond retention threshold to secondary storage while retaining summary metadata.
- Maintain import history for regulatory traceability of pricing changes.

## 5. Future Schema Extensions
- Add `client_users` table once client portal is activated.
- Introduce `tax_rules` linked to `regional_settings` to store jurisdiction-specific logic.
- Extend metric infrastructure with `metric_schedules` for automated refresh intervals.

